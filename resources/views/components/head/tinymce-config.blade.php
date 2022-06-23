<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.tiny.cloud/1/nkhvpn19cyi6agyy31l3vg524rrekazggz7ii54bnn27lsdf/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>

    // InitializeTinyMCE();
    tinymce.init({
        selector: 'textarea#myeditorinstance',
        menubar: false,
        plugins: 'code image',
        toolbar: 'undo redo | styles | bold italic underline blockquote | alignleft aligncenter alignright alignjustify | numlist bullist | image code',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        branding: false,
    });
    
    // menggunakan fungsi Upload Gambar dengan TinyMCE
    tinymce.activeEditor.uploadImages(function(success){
        document.forms[0].submit();
    });

</script>
