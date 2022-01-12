<?php get_header() ?>
        <?php global $themesbazar ?>
			

	
			
	<!-- Section 06 (top two div) #################################--> 	
	
		<!--gellary open--->	
		<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				
               <?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post(); ?>
                
                              
               <div class="single_images"><?php the_post_thumbnail(); ?>
            
                           <?php 
                           $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                                if ($caption): ?>
                                         <div class="caption"><?php echo $caption ?> </div>
                                <?php endif; ?> 
                       </div>
                       
					<h3 class="single_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>

					 <p><?php the_content();?> </p> 
               
               
                 <?php endwhile;?>
                <?php endif;?>
                
                
                
                
                 
               
                
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