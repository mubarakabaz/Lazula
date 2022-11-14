<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mubarakabaz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content=" ">
  <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
</head>
<body>

	<!-- SECTION: Splashscreen -->
	@include('includes.front.splash')
	<!-- END SECTION: Splashscreen -->
	<!-- SECTION: Navigation -->
	@include('includes.front.navigation')
	<!-- END SECTION: Navigation -->
	<!-- SECTION: Intro -->
	@include('includes.front.intro')
	<!-- END SECTION: Intro -->
	<main role="main">
		<!-- SECTION: About -->
		<section class="about">
			<div class="about__wrapper wrapper--small">
				<div class="about__content">
					<div class="about__content-blurb blurb blurb--framed">
						<h2 class="blurb__heading">Nothing is<br>impossible</h2>
						<p class="blurb__copy no-margin">If you just work hard enough at it</p>
					</div>
					<p class="about__content-signature">James Martin</p>
				</div>
				<img class="about__visual" src="assets/img/about-visual.png" alt="James Martin">
			</div>
		</section>
		<!-- END SECTION: About -->
		<!-- SECTION: App Design -->
		<section class="app-design">
			<div class="app-design__wrapper wrapper--large">
				<div class="app-design__content blurb">
					<h2 class="blurb__heading">Topaz App <br>Design</h2>
					<p class="blurb__copy blurb__copy--tight">App design for Topaz, an awesome creative company from New York.</p>
					<a class="transform-link" href="#0">Check it out</a>
				</div>
			</div>
			<figure class="app-design__visual"></figure>
		</section>
		<!-- END SECTION: App Design -->
		<!-- SECTION: Web Design -->
		<section class="web-design">
			<div class="web-design__wrapper wrapper--small">
				<div class="web-design__content blurb">
					<h2 class="blurb__heading">MGF Web <br>Design</h2>
					<p class="blurb__copy blurb__copy--tight">Web design I made for MGF, an amazing architecture agency from London.</p>
					<a class="transform-link" href="#0">Check it out</a>
				</div>
			</div>
			<figure class="web-design__visual"></figure>
		</section>
		<!-- END SECTION: Web Design -->
		<!-- SECTION: Work -->
		<section id="work" class="work">
			<h2 class="work__heading title">Latest Projects</h2>
			<div class="work__wrapper wrapper--large">
				<ul class="work__list">
					<li class="work__list-el work__list-el--is-active">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">Strategik INC<br>Web Design</h3>
								<p class="blurb__copy">The awesome guys at Strategik INC were superb to work with because they knew their goals exactly.</p>
							</div>
							<a class="transform-link" href="#0">See full project</a>
						</div>
						<div class="work__visual">
							<img src="assets/img/work-strategik.jpg" alt="Strategik INC">
						</div>
					</li>
					<li class="work__list-el">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">Ēostre UI Kit<br>Web Design</h3>
								<p class="blurb__copy">Ēostre UI Kit is made following the latest design trends with focus on usability and fast workflow.</p>
							</div>
							<a class="transform-link" href="#0">See full project</a>
						</div>
						<div class="work__visual">
							<img src="assets/img/work-eostre.jpg" alt="Ēostre UI Kit">
						</div>
					</li>
					<li class="work__list-el">
						<div class="work__content">
							<div class="work__content-blurb blurb blurb--framed">
								<h3 class="blurb__heading">Go Outside<br>App Design</h3>
								<p class="blurb__copy">Quick concept for a fictitious wildlife exploration app. Grab the PSD and start your own exploration.</p>
							</div>
							<a class="transform-link" href="#0">See full project</a>
						</div>
						<div class="work__visual">
							<img src="assets/img/work-go-outside.jpg" alt="Go Outside App">
						</div>
					</li>
				</ul>
				<ul class="work__navigation">
					<li class="work__navigation-el work__navigation-el--is-active"></li>
					<li class="work__navigation-el"></li>
					<li class="work__navigation-el"></li>
				</ul>
			</div>
		</section>
		<!-- END SECTION: Work -->
		<!-- SECTION: Blog -->
		<section id="blog" class="blog">
			<h2 class="blog__heading title">Blog Posts</h2>
			<div class="blog__wrapper wrapper--large">
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="assets/img/blog-post-1.jpg" alt="Man viewing work plans">
					</div>
					<div class="blog__post-excerpt">
						<h3>Days in the office</h3>
						<p>I love using UI Kits vs website templates because UI Kits give you an easier way to use elements compared to templates.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="assets/img/blog-post-2.jpg" alt="Man hanging pictures">
					</div>
					<div class="blog__post-excerpt">
						<h3>Why I use CCO images</h3>
						<p>CCO images are awesome because you don't have to credit the author, and you can use them anywhere, anytime.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
				<article class="blog__post">
					<div class="blog__post-thumbnail">
						<img src="assets/img/blog-post-3.jpg" alt="Men working at a desk">
					</div>
					<div class="blog__post-excerpt">
						<h3>Designing for IOT</h3>
						<p>Internet of things is coming so quickly, we as designers will have to design UI and UX for more things in the future.</p>
						<a class="transform-link" href="#0">Read full article</a>
					</div>
				</article>
			</div>
			<div class="blog__view-more">
				<a class="button blog__view-more--el" href="#0">View More</a>
			</div>
		</section>
		<!-- END SECTION: Blog -->
		<!-- SECTION: Contact -->
		<section id="contact" class="contact">
			<h2 class="contact__heading title">Contact Me</h2>
			<div class="contact__wrapper wrapper--large">
				<div class="contact__visual">
					<img src="assets/img/contact-visual.png" alt="James Martin's location">
				</div>
				<!-- Simple form setup: formspree.io -->
				<form class="contact__form">
					<input class="contact__form-el contact__form-el--name" type="text" placeholder="Your Name" spellcheck="false">
					<input class="contact__form-el contact__form-el--email" type="email" placeholder="Your Email" spellcheck="false">
					<textarea class="contact__form-el contact__form-el--message" placeholder="Your Message"></textarea>
					<input class="contact__form-el contact__form-el--submit" type="submit" value="Send">
				</form>
			</div>
		</section>
		<!-- END SECTION: Contact -->
	</main>
	<!-- SECTION: Footer -->
	@include('includes.front.footer')
	<!-- END SECTION: Footer -->

	@include('includes.front.scriptjs')
</body>
</html>
