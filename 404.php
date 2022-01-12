<?php get_header() ?>
        <?php global $themesbazar ?>
			

	
			
	<!-- Section 06 (top two div) #################################--> 	
	
		<!--gellary open--->	
		<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				
      <div align="center">
       <h2>Ooops... Error 404 </h2>
       <h3>Sorry, but the page you are looking for doesn't exist. </h3>
       <h4>You can go to the <a href="<?php bloginfo('url'); ?>"><button>Homepage</button> </a></h4>
   </div>  
                
                
                
                
                 
               
                
			</div>	
		

			<div class="col-md-4">
				<div class="tab_border">
					<!-- Nav tabs -->
					<div class="tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab" id="last"><?php echo $themesbazar['last'] ?></a></li>
						<li role="presentation" id="popular"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $themesbazar['popular'] ?></a></li>
					</ul>
					</div>
					<!-- Tab panes -->
				
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<?php 
                    $lastnews = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $themesbazar['lastpost'],
                    ));
                    while($lastnews->have_posts()) : $lastnews->the_post();?>
                    
							<div class="single_tab">
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
								<h4 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
							</div>
							<?php endwhile;?>
							
						</div>
					
					
						<div role="tabpanel" class="tab-pane" id="profile">							
		<?php
query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
if (have_posts()) : while (have_posts()) : the_post();
?>
							<div class="single_tab">
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
								<h4 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
							</div>
                                <?php
endwhile; endif;
wp_reset_query();
?>

						</div>
					</div>
				</div>	
			
			<!--********add here*******-->
		    <div class="col-md-12"><?php dynamic_sidebar('single_widget')?></div>
			
                
			</div>
			</div>
			
		</div>			
	
	
			
	<?php get_footer(); ?>