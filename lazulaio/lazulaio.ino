//PH Sensor
#include "DFRobot_PH.h"
#include <EEPROM.h>
#define PH_PIN A0
float voltage, phValue;
DFRobot_PH ph;

//TDS Sensor
#include <EEPROM.h>
#include "GravityTDS.h"
#define TdsSensorPin A1
GravityTDS gravityTds;
float tdsValue = 0;

//Suhu Sensor
#include <OneWire.h>
#include <DallasTemperature.h>
OneWire pin_DS18B20(4);
DallasTemperature DS18B20(&pin_DS18B20);
float temperature = 25;

//WiFi Module
#include<KRwifi.h>
char* ssid = "Perintis 25";
char* pass = "00110099";
char* server = "192.168.100.2";

//LCD
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 20, 4);

//Relay Pompa
byte statusPompaPHNaik;
byte statusPompaPHTurun;
byte statusPompaNutrisi;
byte statusPompaAirBaku;
#define pompaPHNaik  8
#define pompaPHTurun 9
#define pompaNutrisi 10
#define pompaAirBaku 11

//ArduinoJson
#include<ArduinoJson.h>

//Kalibrasi dan SetPoint
float phSetA, phSetB, ppmSetA, ppmSetB, kalibrasiPh, kalibrasiPpm;

//timer
unsigned long timepoint = 0;
int timer;

//Fungsi Reset
void(* resetFunc) (void) = 0;

void setup() {
  Serial.begin(115200);
  //PH Sensor
  ph.begin();
  //Suhu Sensor
  DS18B20.begin();
  //TDS Sensor
  gravityTds.setPin(TdsSensorPin);
  gravityTds.setAref(5.0);
  gravityTds.begin();

  //Relay
  pinMode(pompaPHNaik, OUTPUT);
  digitalWrite(pompaPHNaik, HIGH);
  pinMode(pompaPHTurun, OUTPUT);
  digitalWrite(pompaPHTurun, HIGH);
  pinMode(pompaNutrisi, OUTPUT);
  digitalWrite(pompaNutrisi, HIGH);
  pinMode(pompaAirBaku, OUTPUT);
  digitalWrite(pompaAirBaku, HIGH);

  //LCD
  lcd.begin();
  lcd.setCursor(0, 0);
  lcd.print("Sistem Hidroponik");
  lcd.setCursor(0, 1);
  lcd.print("Connecting...");

  //WiFi
  setWifi(ssid, pass);

  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("Sistem Hidroponik");
  lcd.setCursor(0, 1);
  lcd.print("Connected");
  delay(2000);
  lcd.clear();

  phSetA        = EEPROM.read(201);
  phSetB        = EEPROM.read(202);
  ppmSetA       = EEPROM.read(203);
  ppmSetB       = EEPROM.read(204);
  kalibrasiPh   = EEPROM.read(205);
  kalibrasiPpm  = EEPROM.read(206);
  ppmSetA = ppmSetA * 10;
  ppmSetB = ppmSetB * 10;
}

void loop() {
  //Suhu Sensor
  DS18B20.requestTemperatures();
  temperature = DS18B20.getTempCByIndex(0);

  //TDS Sensor
  gravityTds.setAdcRange(1024);
  gravityTds.setTemperature(temperature);
  gravityTds.update();
  tdsValue = gravityTds.getTdsValue();

  if (millis() - timepoint > 1000U) {
    timepoint = millis();
    voltage = analogRead(PH_PIN) / 1024.0 * 5000;
    phValue = ph.readPH(voltage, temperature);

    Serial.print("Suhu: ");
    Serial.print(temperature);

    Serial.print("  TDS: ");
    Serial.print(tdsValue, 0);
    Serial.print("ppm");

    Serial.print("  pH:");
    Serial.println(phValue, 2);

    //LCD
    lcd.setCursor(0, 0);
    lcd.print("Sistem Hidroponik");
    lcd.setCursor(0, 1);
    lcd.print("PH  :");  lcd.print(phValue, 1); lcd.print("  ");
    lcd.setCursor(10, 1);
    lcd.print("<"); lcd.print(phSetA, 0); lcd.print("   >"); lcd.print(phSetB, 0);
    lcd.setCursor(0, 2);
    lcd.print("TDS :");  lcd.print(tdsValue, 0); lcd.print("  ");
    lcd.setCursor(10, 2);
    lcd.print("<"); lcd.print(ppmSetA, 0); lcd.print(" >"); lcd.print(ppmSetB, 0);
    lcd.setCursor(0, 3);
    lcd.print("Suhu:");  lcd.print(temperature, 1);

    //Logika nyala pompa
    if (phValue < phSetA & phValue < phSetB) {
      digitalWrite(pompaPHTurun, LOW);
      digitalWrite(pompaPHNaik, HIGH);
    }
    if (phValue > phSetA & phValue > phSetB) {
      digitalWrite(pompaPHTurun, HIGH);
      digitalWrite(pompaPHNaik, LOW);
    }
    if (phValue > phSetA & phValue < phSetB) {
      digitalWrite(pompaPHTurun, HIGH);
      digitalWrite(pompaPHNaik, HIGH);
    }

    if (tdsValue < ppmSetA & tdsValue < ppmSetB) {
      digitalWrite(pompaNutrisi, LOW);
      digitalWrite(pompaAirBaku, HIGH);
    }
    if (tdsValue > ppmSetA & tdsValue > ppmSetB) {
      digitalWrite(pompaNutrisi, HIGH);
      digitalWrite(pompaAirBaku, LOW);
    }
    if (tdsValue > ppmSetA & tdsValue < ppmSetB) {
      digitalWrite(pompaNutrisi, HIGH);
      digitalWrite(pompaAirBaku, HIGH);
    }

    timer++;
    timepoint = millis();
  }
  ph.calibration(voltage, temperature);


  //GET DATA REALTIME KE SERVER
  if (timer >= 5) {
    String path = String() + "/autoHidroponik2/input.php?ph=" + phValue + "&tds=" + tdsValue + "&pn=" + statusPompaPHNaik + "&pt=" + statusPompaPHTurun + "&n=" + statusPompaNutrisi + "&ab=" + statusPompaAirBaku;
    httpGet(server, path, 80);
    Serial.println(server + path);
    Serial.print("Respon: ");
    Serial.println(getData);

    //    const size_t capacity = JSON_OBJECT_SIZE(6) + 90;
    DynamicJsonDocument doc(2048);
    deserializeJson(doc, getData);

    phSetA   = doc["phSetA"].as<float>(), 2;
    phSetB   = doc["phSetB"].as<float>(), 2;
    ppmSetA  = doc["ppmSetA"].as<float>(), 2;
    ppmSetB  = doc["ppmSetB"].as<float>(), 2;
    kalibrasiPh  = doc["kalibrasiPh"].as<float>(), 2;
    kalibrasiPpm = doc["kalibrasiPpm"].as<float>(), 2;

    Serial.println(phSetA);
    Serial.println(phSetB);
    Serial.println(ppmSetA);
    Serial.println(ppmSetB);
    Serial.println(kalibrasiPh);
    Serial.println(kalibrasiPpm);

    //Simpan ke EEPROM
    EEPROM.write(201, phSetA);
    EEPROM.write(202, phSetB);
    int sppmSetA = ppmSetA / 10;
    int sppmSetB = ppmSetB / 10;
    EEPROM.write(203, sppmSetA);
    EEPROM.write(204, sppmSetB);
    EEPROM.write(205, kalibrasiPh);
    EEPROM.write(206, kalibrasiPpm);

    if (getHttpStatus == "Koneksi Gagal") {
      resetFunc();
    }
    timer = 0;
  }


}
