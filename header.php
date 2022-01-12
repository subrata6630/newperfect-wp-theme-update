<?php global $themesbazar; ?>   
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
             <title><?php wp_title('');  ?></title>  
             
             
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
<meta property="og:title" content="<?php the_title(); ?>" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="<?php echo $image[0]; ?>" /> 
<meta property="og:video" content="" /> 
<meta property="og:video:width" content="560" />  
<meta property="og:video:height" content="340" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />

        
        <?php wp_head();?>
        
        
        
        <style>

body{
   background-color: <?php echo $themesbazar['body-color']?>;
   font-size: <?php echo $themesbazar['body-font']['font-size']?>;
}
    .full_website{
        background-color: <?php echo $themesbazar['website-bag']?>;
    }
    .catagory_title{
        color: <?php echo $themesbazar['category-font']['color']?>;
        font-size: <?php echo $themesbazar['category-font']['font-size']?>;
        text-align: <?php echo $themesbazar['category-font']['text-align']?>;
        border-bottom: 2px solid <?php echo $themesbazar['category-background']?>;
        margin-top: 10px;
        padding-bottom: 8px;
    }
     .catagory_title span{
       background-color: <?php echo $themesbazar['category-background']?>;
       padding: 7px 25px 7px 7px;
        border-radius: 0px 70px 0px 0px;
     }

    .catagory_title a{
        color: <?php echo $themesbazar['category-font']['color']?>;
    }
    .heading_01{
        font-size: <?php echo $themesbazar['large-title']['font-size']?>;
        line-height: <?php echo $themesbazar['large-title']['line-height']?>;
        margin-top: 0px;
        text-align: <?php echo $themesbazar['large-title']['text-align']?>;
    }
    .heading_01 a{
        color:<?php echo $themesbazar['large-title']['color']?>
    }
    .heading_01 a:hover{
        color:firebrick
    }

    .heading_02{
        font-size: <?php echo $themesbazar['midium-title']['font-size']?>;
        line-height: <?php echo $themesbazar['midium-title']['line-height']?>;
        margin-top: 0px;
        font-weight: 400;
    }

    .heading_02 a{
        color:<?php echo $themesbazar['midium-title']['color']?>;
    }

    .heading_02 a:hover{
        color:cadetblue;
    }
    .heading_03{
        font-size: <?php echo $themesbazar['small-title']['font-size']?>;
        line-height: <?php echo $themesbazar['small-title']['line-height']?>;
        margin-top: 0px;
        font-weight: 400;
    }

    .heading_03 a{
        color:<?php echo $themesbazar['small-title']['color']?>;
    }

    .heading_03 a:hover{
        color:cadetblue;
    }
            
    .footer-04{
	background:<?php echo $themesbazar['footer-color']?>;
	padding: 2%;
	color:<?php echo $themesbazar['footer-font']['color']?>;
    font-size: <?php echo $themesbazar['footer-font']['font-size']?>;
}       
            
    /*Widget Title=========*/
    .widget_area{ margin:5px 0px 5px 0px;}
    .widget_area li{margin:2px 0px 5px 0px;}
    .widget_area a{color: #000000;}
    .widget_area a:hover{color: #FF0505;}
    .widget_area h3{
        font-size: <?php echo $themesbazar['widget-font']['font-size']?>;
        color: <?php echo $themesbazar['widget-font']['color']?>;
        text-align: <?php echo $themesbazar['widget-font']['text-align']?>;
        border-radius: 5px 5px 0px 0px;
        border-bottom: 2px solid <?php echo $themesbazar['widget-background']?>;
        border-left: 5px solid <?php echo $themesbazar['widget-background']?>;
        margin-bottom: 5px;
        padding: 7px 10px;}
    
    #bs-example-navbar-collapse-1 {
    background-color: <?php echo $themesbazar['menu-background']?>;
    font-size: <?php echo $themesbazar['menu-font']['font-size']?>;
    }
    #nav .navbar-default .navbar-nav > li > a{color: <?php echo $themesbazar['menu-font']['color']?>;
        padding: 7px 20px 7px 20px;}
   .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important; 
       margin: 0px;
       background-color: #73337D;}
    .scrool_01{
    background-color: <?php echo $themesbazar['scrool-background']?>;
    padding: 5px;
    color: <?php echo $themesbazar['scrool-font']['color']?>;
    font-weight: bold;
    margin-bottom: 5px;
	margin-top:5px;
    font-size: <?php echo $themesbazar['scrool-font']['font-size']?>;

}
   /* Goto Top============================ */
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: <?php echo $themesbazar['category-background']?>; /* Set a background color */
    color: <?php echo $themesbazar['category-font']['color']?>; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

            
    #myBtn:hover {
    background-color: <?php echo $themesbazar['category-background']?>; /* Add a dark-grey background on hover */
        opacity: 0.5;
}
    




</style>
		
    </head>
    <body>
		<section>
			<div class="container full_website">
			
		<!-- Section 01 (date-social) #################################--> 	
							
			
			<div class="datalist">
				<div class="row date-social">
					<div class="col-md-6 date">
						 <?php if($themesbazar['time-date'] ==1 ): ?>
                   <p><script type="text/javascript" src="http://english-date.appspot.com/index5.php"></script>, <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script> </p>
				   <?php endif; ?>
				   
				   <?php if($themesbazar['time-date'] == 2 ): ?>
                   <p>
				    <?php date_default_timezone_set('UTC+6');
                       $today = date("F j, Y, g:i a"); 
                       echo $today;
                       ?>
					   </p>
				   <?php endif; ?>
					</div>
					<div class="col-md-6 social">					
						 <a href="<?php echo $themesbazar['social-link']['facebook-url']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $themesbazar['social-link']['twitter-url']; ?>" target="_blank"><i class="fa fa-twitter"  style="color:#5DA7DA;"></i></a>
							<a href="<?php echo $themesbazar['social-link']['googleplus-url']; ?>" target="_blank"><i class="fa fa-google-plus" style="color:#D1483B;"></i></a>
							<a href="<?php echo $themesbazar['social-link']['youtube-url']; ?>" target="_blank"><i class="fa fa-youtube"style="color:#C41A1E;"></i></a>
							<a href="<?php echo $themesbazar['social-link']['android-url']; ?>" target="_blank"><i class="fa fa-android" style="color:#A5D11C;"></i></a>
							<a href="<?php echo $themesbazar['social-link']['rss-url']; ?>" target="_blank"><i class="fa fa-rss" style="color:#FB7629;"></i></a>
					</div>
				</div>
			</div>
		
		<!-- Section 02 (logo-banner) #################################--> 			
			
			<div class="row logo_banner">
				<div class="col-md-4 logo">
					<a href="<?php bloginfo(home); ?>"><img src=" <?php echo $themesbazar['logo_upload']['url']?>" alt="Logo" width="100%"></a>
				</div>
				<div class="col-md-8 bannar">					
					<a href="<?php echo $themesbazar['bannar-link']['bannar-url']; ?>" target="_blank"><img src="<?php echo $themesbazar['bannar_upload']['url']?>"></a>					
				</div>
			</div>
			
		
			
		<!-- Section 03 (menu-bar) #################################-->	
			
			
			<!-- navbar start -->
			
			<div class="col-md-12" style="margin-bottom:5px">
				 <div class="row" id="nav" >
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
	           <?php /* Primary navigation */
		        wp_nav_menu( array(
		           'theme_location' => 'main-menu',
				   'menu_class'    => 'nav navbar-nav',
				   'fallback_cb' => 'default_main_menu',
		           'walker' => new wp_bootstrap_navwalker())
		              );
	               	?>		
			
			</div>
		</nav>
	</div>
			</div>
			<!-- Section 04 (scrolling) #################################--> 	
			
			<div class="row">
			
				<div class="col-md-2">
					<div class="scrool_01"><?php echo $themesbazar['scrool'] ?></div>
				</div>
				<a href="#"><div class="col-md-10"><div class="scrool_02"><marquee behavior="" direction="">
<?php 
    $scrool = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['howscrool'],
    ));
    while($scrool->have_posts()) : $scrool->the_post(); ?>
				<i class="fa fa-square" aria-hidden="true"></i>
<a href="<?php the_permalink()?>"><?php the_title();?></a>
				<?php endwhile;?>
				
				</marquee></div></div></a>
			</div> 