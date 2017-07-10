<h4>The Difference Between Gorillas and Monkeys</h4>
<h3>How do gorillas differ from monkeys, though they look alike, sort of?</h3>
<ul class="sidebar-difference">
<li>They both have large brains compared to their sizes</li>
<li>Both usually live in forests</li>
<li>Both have binocular and color vision</li>
<li>Both eat fruits, leaves and sometime insets and meat</li>
</ul>

<b><i>But their similarities end there:</i></b>

<ul class="sidebar-difference">
<li>Gorillas are larger and heavier than monkeys</li>
<li>They do not have tails</li>
<li>A gorilla’s brain is more developed</li>
<li>Gorillas live longer and do not reach adulthood as early; 10 years for females and 15 for males</li>
</ul>

<?php if ( function_exists('dynamic_sidebar')) {
	
	global $post;
	global $woocommerce; 

	$posttype = get_post_type($post);
	
	if( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post') ) {
		dynamic_sidebar('Blog Sidebar');
	}	
	elseif($woocommerce && is_shop() || $woocommerce && is_product_category() || $woocommerce && is_product_tag() || $woocommerce && is_product()){
		dynamic_sidebar('WooCommerce Sidebar');
	}
	else {
		dynamic_sidebar('Page Sidebar');
	}
	
} ?>
    
