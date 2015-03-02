<section class="Buscador">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<div>
			<input type="submit" id="searchsubmit" value="B&uacute;scar" />
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Realice su b&uacute;squeda ac&aacute;"  />
		</div>
	</form>
</section> <!-- End of Buscador -->