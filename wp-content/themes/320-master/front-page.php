<?php get_header(); ?>
			
	<section id="garth" class="panel">

		<div class="story">

			<div class="copy">
				<h3>Hi, I'm Garth.</h3>
				<p class="lead">I geek out on analytics, algorithm updates, link acquisitions, click through rates, and quality scores. I love coffee and high fives.</p>
			</div>

		</div>

	</section> <!-- end #garth -->
	
	<section id="what" class="panel">
		<div class="label"><h2>What I Do</h2></div>

		<div class="story">

			<div class="graphic">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/library/img/diagram.png" alt="What I Do Graphic">
			</div>

			<hr class="dotted">

			<div class="copy left">
				<p>What I do:<br> 
				Lots of technical stuff with acronyms.</p>

				<p>Simply put, I promote and grow your business online.</p>

				<p>What I don’t do: Voodoo magic, take on a client I can’t help, or eat pickles.</p>
			</div>

			<div class="copy right">
				<p>Technically I promote your business through search engine optimization, pay per click advertising, reputation management and social services. Through these services I increase the amount of people finding your website, track how they interact with your site, and fine tune your site to maximize conversion.</p>

				<p>I meet with you face to face, to understand how your business runs and creates a personalized solution to bring you more customers. I provide customized reports so you can track the metrics that matter to you. The cost of our services depends on the scope and the competitiveness of the online marketplace. Our clients budgets range from $2,500 to $15,000 per month.</p>
			</div>

		</div>

	</section> <!-- end #what -->

	<section id="who" class="panel">
		<div class="label"><h2>Who Is Garth</h2></div>

		<div class="story">

			<div class="graphic">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/library/img/worms.png" alt="What Is Garth Graphic">
			</div>
			<div class="copy">
				<p class="lead">What do Madonna, Cher, Sting, and Garth have in common?</p>

				<p>They all are incredibly unique individuals that excelled at their profession, so much so that they have been iconicized by a single name. I am Garth. I am not your typical Search Engine Marketing company. I am able to achieve awesome results at a lower cost than the big agencies by creating small highly efficient and agile team. I also drink large amounts of coffee which keeps me working long hours!</p>

				<p>I’ve been an entrepreneur since the age of 6, digging worms out of the yard and selling them as fishing worms to the corner market. Fast forward two decades, I’m creating and managing business online.  I’ve spent that last four years honing my online marketing skills and in the process created my own network of highly trafficked web properties. In the past year I’ve built an awesome team to scale operations so that I could bring similar success for my appreciative clients.</p>
			</div>

		</div>

	</section> <!-- end #who -->

	<section id="work" class="panel">
		<div class="label"><h2>Who We Worked With</h2></div>

		<div class="story">

			<h3>Who We Worked With, Power In Numbers</h3>

			<hr class="dotted">

			<ul class="left">
				<li><p class="title">nwsurrogacy.com</p>
					<p>SEO Increased organic traffic 220%. Achieved Page 1 rankings both local and national keywords. Implemented online survey interest form.</p>
				</li>
				<li><p class="title">synergy-dental.com</p>
					<p>Increased oganic traffic.<br>
						Achieved top3 rankings for their top keywords.<br>
						Increased revenue by $60,000 over three month time period.</p>
				</li>
			</ul>

			<ul class="right">
				<li><p class="title">masterplans.com</p>
					<p>Increased traffic on average 8% every month.</p>
				</li>
				<li><p class="title">hearingaidsreview.com</p>
					<p>Increased Revenue 28%.<br>
						Increased organic traffic 204%</p>
				</li>
				<li><p class="title">tampasmiles.com</p>
					<p>Achieved 30 Page 1 rankings</p>
				</li>
			</ul>

		</div>

	</section> <!-- end #work -->

	<section id="together" class="panel">
		<div class="label"><h2>Should we work together?</h2></div>

		<div class="story">

			<blockquote>
				<span class="lead">“Garth,</span><br>
				<span>I understand you only take on<br> 
				a limited number of clients.</span>
				 
				<span>How do I know if we would be a<br>
				good fit for your services?</span>

				<span>Does it matter if I don’t like coffee?”</span>
			</blockquote>

			<ul class="left">
				<li>Do you offer unique products or services?</li>
				<li>Do you operate an amazing offline business but need help translating that awesomeness into the digital world?</li>
				<li>Do you realize the online marketing is not a one time investment?</li>
			</ul>

			<ul class="right">
				<li>Are you looking for long term growth as well as short-term gains?</li>
				<li>Do you have a budget for online marketing and does the ROI make sense for your business?</li>
				<li>What’s your favorite color?</li>
			</ul>

			<p class="outro">If you answered yes to all these questions and your favorite color is blue... chances are we could be a great match.</p>
			<p class="outro">Get off your chair, step away from your computer and meet me for coffee.</p>

		</div>

	</section> <!-- end #together -->

	<section id="contact" class="panel">
		<div class="label"><h2>Contact</h2></div>

		<div class="story">

			<div class="copy">
				<h3>Let's Make It Happen</h3>
				<p>Lorem ipsum dolor sit amet. Por favor put in some stuff in here and all that. It’ll be great, need some content though.</p>
			</div>

			<div class="form-wrap">
				<?php echo FrmEntriesController::show_form(x, $key = 'thxwgd', $title=false, $description=false); ?>
			</div>

		</div>

		<?php include 'panel-footer.php'; ?>

	</section> <!-- end #contact -->

<?php get_footer(); ?>
