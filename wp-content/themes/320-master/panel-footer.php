<footer class="footer" role="contentinfo">

		<div class="col">
			<p><?php the_field('footer_address', 'option'); ?></p>
		</div>

		<div class="col">
			<p><?php the_field('footer_contact', 'option'); ?></p>
		</div>
		
		<div class="col">
			<ul class="social clearfix">
				<li class="tw"><a href="#"><i class="icon-twitter"></i></a></li>
				<li class="fb"><a href="#"><i class="icon-facebook"></i></a></li>
				<li class="li"><a href="#"><i class="icon-linkedin-sign"></i></a></li>
			</ul>
			<p>© <?php the_field('copyright', 'option'); ?>, <?php echo date('Y') ?></p>
		</div>
	
</footer> <!-- end footer -->