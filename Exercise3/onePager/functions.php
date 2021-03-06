<?php 


	function create_contact_info_options_page() {  
		add_menu_page('Contact Info', 'Contact Info', 'manage_options', "contact_info_options", 'build_contact_info_options_page');}
add_action('admin_menu', 'create_contact_info_options_page');


function build_contact_info_options_page(){

	//adding options and setting default values
 add_option( "Address" ,"Paradeplatz, Zurich" ); 
 add_option( "PhoneNumber1" ,"+4163090230942"); 
 add_option( "PhoneNumber2" , "+524382394523"); 
 add_option( "EmailAddress" , "mrdesignrobot@inf.co"); 
  add_option( "Name" , "Mr. Design Luigi"); 
  add_option( "Twitter" , "@mrdesignrobot"); 


	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Contact Info Settings </h1>
			 <p>Provide your Personal Contact Infos</p>
			<form method="POST" action="">
				
				<table class="form-table">
					<tr>
						<th><label for="address">HTML:</label></th>
						<td>
						<input type="text" name="address" 
						value="<?php print get_option("Address"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="phone1">Telephone Number 1:</label></th>
						<td>
						<input type="text" name="phone1" 
						value="<?php print get_option("PhoneNumber1"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="phone2">Telephone Number 2:</label></th>
						<td>
						<input type="text" name="phone2" 
						value="<?php print get_option("PhoneNumber2"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="email">Email Address:</label></th>
						<td>
						<input type="text" name="email" 
						value="<?php print get_option("EmailAddress"); ?>"
						size ="25" />
						</td>
					</tr>
						<tr>
						<th><label for="twitter">Twitter Username:</label></th>
						<td>
						<input type="text" name="twitter" 
						value="<?php print get_option("Twitter"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="name">Email Address:</label></th>
						<td>
						<input type="text" name="name" 
						value="<?php print get_option("Name"); ?>"
						size ="25" />
						</td>
					</tr>
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Contact Info" class="button-primary"/>
				</p> 
			</form>

		</div>
 <?php 
		if (isset($_POST['submit'])) {
			
			$addr = esc_attr($_POST["address"]);
			update_option("Address", $addr);
			$p1 = esc_attr($_POST["phone1"]);
			update_option("PhoneNumber1", $p1);
			$p2 = esc_attr($_POST["phone2"]);
			update_option("PhoneNumber2", $p2);
			$email = esc_attr($_POST["email"]);
			update_option("EmailAddress", $email);
			$name = esc_attr($_POST["name"]);
			update_option("Name", $name);
			$twitter = esc_attr($_POST["twitter"]);
			update_option("Twitter", $twitter);
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}


	function create_skills_options_page() {  
		add_menu_page('Skills Options', 'Skills Options', 'manage_options', "skills_options", 'build_skill_options_page');}
add_action('admin_menu', 'create_skills_options_page');




function build_skill_options_page(){

	//adding options and setting default values
 add_option( "html_skill" , 80); 
 add_option( "css_skill" , 70); 
 add_option( "wp_skill" , 90); 
 add_option( "js_skill" , 70); 


	?>
		<div id="theme-options-wrap">
			<div class="icon32" id="icon-tools"> <br /> </div>

		 	<h1>Skills Percentages Settings </h1>
			 <p>Provide percentages for the various skills.</p>
			<form method="POST" action="">
				
				<table class="form-table">
					<tr>
						<th><label for="html">HTML:</label></th>
						<td>
						<input type="number" name="html" min="0" max="100"
						value="<?php print get_option("html_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="css">CSS:</label></th>
						<td>
						<input type="number" name="css" min="0" max="100"
						value="<?php print get_option("css_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="js">Javascript:</label></th>
						<td>
						<input type="number" name="js" min="0" max="100"
						value="<?php print get_option("js_skill"); ?>"
						size ="25" />
						</td>
					</tr>
					<tr>
						<th><label for="wp">Wordpress:</label></th>
						<td>
						<input type="number" name="wp" min="0" max="100"
						value="<?php print get_option("wp_skill"); ?>"
						size ="25" />
						</td>
					</tr>
				
				</table>
				<p>
				<input type="submit" name ="submit" value="Save Skills" class="button-primary"/>
				</p> 
			</form>

		</div>
 <?php 
		if (isset($_POST['submit'])) {
			
			$html = esc_attr($_POST["html"]);
			update_option("html_skill", $html);
			$css = esc_attr($_POST["css"]);
			update_option("css_skill", $css);
			$js = esc_attr($_POST["js"]);
			update_option("js_skill", $js);
			$wp = esc_attr($_POST["wp"]);
			update_option("wp_skill", $wp);
			
			?>
			<div id="message" class="updated">Settings saved</div>
			<?php 
    }

}

function my_custom_post_portfolio_item() {
  $labels = array(
    'name'               => _x( 'Portfolio Item', 'post type general name' ),
    'singular_name'      => _x( 'portfolio_item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Portfolio Item' ),
    'edit_item'          => __( 'Edit Portfolio Item' ),
    'new_item'           => __( 'New Porfolio Item' ),
    'all_items'          => __( 'All Portfolio Items' ),
    'view_item'          => __( 'View Portfolio Item' ),
    'search_items'       => __( 'Search Portfolio Item' ),
    'not_found'          => __( 'No  found' ),
    'not_found_in_trash' => __( 'No portfolio item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio Items'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds all works that go into the portfolio section',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'editor', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'portfolio_item', $args ); 
}
add_action( 'init', 'my_custom_post_portfolio_item' );
add_theme_support('post-thumbnails', array('portfolio_item'));

function build_taxonomies(){
	register_taxonomy(
    'portfolio_item_type',
    'portfolio_item',
    array(
        'hierarchical' => true,
        'label' => 'Portfolio Item Type',
        'query_var' => true,
        'rewrite' => false
    )
);
}

add_action( 'init', 'build_taxonomies', 0 );


$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );





add_action('wp_ajax_wordpress_query_blog', 'wordpress_query_blog_callback');
add_action('wp_ajax_nopriv_wordpress_query_blog', 'wordpress_query_blog_callback');


function wordpress_query_blog_callback(){

	$myfile = fopen("/home/edgar/phptest","w");
	$txt = "ieeee\n";
	fwrite($myfile,$txt);
	fclose($myfile);
	
	$query = new WP_Query(array('p' => $_POST['id']));
	

	//ESTO NO SE COMO PONERLO PARA QUE LO DEVUELVA
	/*$html = <<<HTML
	<article id="first" class="slideInLeft">
	<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="writer">
			<br>
			<p><img  src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
	  			<h4><?php the_author(); ?></h4>
				<h5 class="blog-date">Published <?php the_time('F j,Y'); ?>.</h5>
				</div>
				<div class="intro">
					<h2><?php the_title(); ?></h2>
					<p>
 						<?php the_content(); ?>
					<p>
					<p><a href="#!" onClick="getSingleBlog(<?php the_id(); ?>)"> Read More</a></p>
					<br>
				</div>
			<?php endwhile; else: ?>
       			 <?php endif; ?>
			</article>
	HTML;	*/

	

}

 ?>








