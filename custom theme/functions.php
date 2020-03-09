  <?php 
  function myfun()
  {

  	wp_enqueue_style('zerogrid',get_template_directory_uri().'/css/zerogrid.css',array(),'1.0','all');
  	wp_enqueue_style('style',get_template_directory_uri().'/css/style.css',array(),'1.0','all');
  	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0','all');
  	wp_enqueue_style('responsiveslides',get_template_directory_uri().'/css/responsiveslides.css',array(),'1.0','all');

     wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.0',true);
     wp_enqueue_script('responsiveslides.js',get_template_directory_uri().'/js/responsiveslides.js',array(),'1.0',true);
   }
 add_action('wp_enqueue_scripts','myfun');
  // defult menu
 function default_menu(){
  echo "<ul>
  <li><a href=''>home</a><li>
  <li><a href=''>gallery</a><li>
  <li><a href=''>contact</a><li>
  <li><a href=''>blog</a><li>

     <ul>";
 }
 // ========register nav menu======
 register_nav_menus(
 	array(
 		'headermenu'=>'header menu',
 		'footermenu'=>'footer menu'
 	)
 );
 // ===========blog page dynamic=========
  // add post image
 add_theme_support('post-thumbnails');

 // ============= slider dynamic================
    register_post_type("boommisc",array(
    	'labels'=>array(
    		'name'=>'sliders',
    		'add_new_item'=>'add slider'
    	),
    	'public'=>true,
    	'supports'=>array('title','thumbnail')
    ));
    // ============block dynamic===============
    register_post_type('block',array(
    	'labels'=>array(
    		'name'=>'block',
    		'add_new_item'=>'add new block'
    	),
    	'public'=>true,
    	'supports'=>array('title','editor')
    ));
    // ====================gallery dyanmic===========
    register_post_type('gallery',array(
      'labels'=>array(
        'name'=>'Gallery',
        'add_new_item'=>'add new item'
      ),
      'public'=>true,
      'supports'=>array('title','editor','thumbnail')
    ));
    // ================create a side bar wiget==========
    function wiget()
    {
          register_sidebar(array(
            'name'=>'sidebar',
            'id'=>'sidebarone',
            'before_widget'=>'<div class="box">',
            'after_widget'=>'</div></div>',
            'before_title'=>'<div class="heading"><h2>',
            'after_title'=>'</div></h2><div class="content">'
          )); 
         
          register_sidebar(array(
          	'name'=>'footerwid',
          	'id'=>'footerone',
          	'before_widget'=>'<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">',
			'after_widget'=>'</div></div></div></div>',
			'before_title'=>'<div class="heading"><h2>',
			'after_title'=>'</div></h2><div class="content">'
          ));
          register_sidebar(array(
            'name'=>'contact sidebar',
            'id'=>'contact_sidebar',
            'before_widget'=>'<div class="box">',
            'after_widget'=>'</div></div>',
            'before_title'=>'<div class="heading"><h2>',
            'after_title'=>'</div></h2><div class="content">'
          )); 
    }
    add_action('widgets_init','wiget');

  // <!-- ==============addd logo============= -->
    function add_logo(){
      $var=array(
        'height'=>65,
        'width'=>300,
        'flex-height'=>true,
        'flex-width'=>true
      );
      add_theme_support('custom-logo',$var);
    }
    add_action('after_setup_theme','add_logo');

  ?>
  
