<?php get_header() ?>
        <?php global $themesbazar ?>
			
			
	<!--################# (gellary) #################################-->		
			
			<div class="row">
				<div class="col-md-9">	
				
				<!-- (ph-gellary open) -->
				
					<div class="row">
						<div class="col-md-8">
							<div class="img-border">
								<div class="photo-gallery">
									<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php
     $slider = get_the_category_by_id($themesbazar['slider']);
    $catslider = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'offset' => 0,
        'category_name' => $slider,

    ));
    while ($catslider->have_posts()) : $catslider->the_post(); ?>
                         <div class="item active">
							 <?php the_post_thumbnail() ?>
							 <h3 class="heading_slider"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
						</div>
						<?php endwhile ?>
						
						<?php
    $catslider = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-slider'],
        'offset' => 1,
        'category_name' => $slider,

    ));
    while ($catslider->have_posts()) : $catslider->the_post(); ?>
						<div class="item">
							<?php the_post_thumbnail() ?>
							 <h3 class="heading_slider"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
						</div>
						<?php endwhile ?>
					</div>
				 <!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
					 </a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					 </a>
					</div>
								</div>
							</div>
						</div>
						
				<!-- ********gellary news********* -->
					
						<div class="col-md-4">
						
							<!--top add here open-->
		    <div class="row"><div class="col-md-12"><?php dynamic_sidebar('widget_area_01')?></div></div>
							<!--top add here close-->
							
							<div class="img-border">
							<?php
    $catslider = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'offset' => 0,
        'category_name' => $slider,

    ));
    while ($catslider->have_posts()) : $catslider->the_post(); ?>
							
								<div class="images_title">
									<?php the_post_thumbnail() ?>
									<h3 class="heading_03"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
								</div>
								<?php endwhile ?>	
							</div>
							
						</div>
					</div>
					
		<!-- (top three div open) -->					
							
					<!--top add here open-->
			<div class="row"><div class="col-md-12"><?php dynamic_sidebar('widget_area_02')?></div></div>
					<!--top add here close-->
				
					
					
			<!-- **********{cetagory one}**********-->

					<div class="row">
					<?php
    $catone = get_the_category_by_id($themesbazar['cat-one']);
    $cat01 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 0,
        'category_name' => $catone,

    ));
    while ($cat01->have_posts()) : $cat01->the_post(); ?>
						<div class="col-md-4">
							<div class="img-border">
								<div class="images_title">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<h3 class="heading_03"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a></h3>
								</div>
							</div>
						</div>
		
					<?php endwhile ?>
					
					
					
					
					
					<?php
    $catone = get_the_category_by_id($themesbazar['cat-one']);
    $cat01 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 3,
        'category_name' => $catone,

    ));
    while ($cat01->have_posts()) : $cat01->the_post(); ?>
						<div class="col-md-4">
							<div class="img-border">
								<div class="images_title">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<h3 class="heading_03"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a></h3>
								</div>
							</div>
						</div>
		
					<?php endwhile ?>
					
					
					
					
					<?php
    $catone = get_the_category_by_id($themesbazar['cat-one']);
    $cat01 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 6,
        'category_name' => $catone,

    ));
    while ($cat01->have_posts()) : $cat01->the_post(); ?>
						<div class="col-md-4">
							<div class="img-border">
								<div class="images_title">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<h3 class="heading_03"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a></h3>
								</div>
							</div>
						</div>
		
					<?php endwhile ?>
					
					
					<?php
    $catone = get_the_category_by_id($themesbazar['cat-one']);
    $cat01 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 9,
        'category_name' => $catone,

    ));
    while ($cat01->have_posts()) : $cat01->the_post(); ?>
						<div class="col-md-4">
							<div class="img-border">
								<div class="images_title">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									<h3 class="heading_03"><a href="<?php the_permalink() ?>"> <?php the_title()?> </a></h3>
								</div>
							</div>
						</div>
		
					<?php endwhile ?>
					
					
					
					<!-- **widget_area_03** -->
				<div class="col-md-12"><?php dynamic_sidebar('widget_area_03')?></div>	
					<!-- **widget_area_03** -->
					</div>
						
				</div>
			 
		
			
				<div class="col-md-3">
	
			<!-- **********{cetagory two}**********-->	
				
					<div class="big-img">
					<?php  
    $cattwo = get_the_category_by_id($themesbazar['cat-two']);
    $cattwo_link = get_category_link($themesbazar['cat-two']);
                ?>    
			<h4 class="catagory_title-04"><span><a href="<?php echo esc_url($cattwo_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwo;?></a></span></h4>
			<?php
    $cat02 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwo,
    ));
    while ($cat02->have_posts()) : $cat02->the_post();?>
						<div class="leadnews">								
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
							<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>								
						</div>
					<?php endwhile?>	
					</div>
					
			<!-- sider widget -->
	<div class="row"><div class="col-md-12"><?php dynamic_sidebar('sidebar')?></div></div>	
			<!-- sider widget -->
			
		<!-- **********{cetagory three}**********-->
		
				<div class="big-img">
				
					<?php  
    $catthree= get_the_category_by_id($themesbazar['cat-three']);
    $catthree_link = get_category_link($themesbazar['cat-three']);
                ?>    
			<h4 class="catagory_title-01"><span><a href="<?php echo esc_url($catthree_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catthree;?></a></span></h4>
			<?php
    $cat03 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catthree,
    ));
    while ($cat03->have_posts()) : $cat03->the_post();?>
						<div class="leadnews">																			
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
							<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>								
						</div>
					<?php endwhile?>	
					</div>
				</div>
			</div>
			
		<!-- **********{cetagory four}**********-->	
			
			<div class="row">
				<div class="col-md-6">
				
				
				<?php  
    $catfour = get_the_category_by_id($themesbazar['cat-four']);
    $catfour_link = get_category_link($themesbazar['cat-four']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($catfour_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catfour;?></a></span></h4>
					<div class="row">
					
						<div class="col-md-6">
						<?php
    $cat04 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catfour,
    ));
    while ($cat04->have_posts()) : $cat04->the_post();?>
							<div class="leadnews">									
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
								<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
							</div>
							<?php endwhile?>	
						</div>
						
						
						<div class="col-md-6">
							<div class="img-border-02">
							<?php

    $cat04 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-four'],
        'offset' => 1,
        'category_name' => $catfour,

    ));
    while ($cat04->have_posts()) : $cat04->the_post(); ?>
								<div class="images_title-02">
									<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
									<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
								</div>
							<?php endwhile?>	
							</div>
						</div>
					</div>
				</div>
				
			<!-- ****** tab-pans ****** -->
			
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
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
                    
							<div class="images_title-02">
								<h4 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
							</div>
							<?php endwhile;?>
							
						</div>
					
					
						<div role="tabpanel" class="tab-pane" id="profile">							
		<?php
query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
if (have_posts()) : while (have_posts()) : the_post();
?>
							<div class="images_title-02">
								<h4 class="heading_03"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
							</div>
                                <?php
endwhile; endif;
wp_reset_query();
?>

						</div>
					</div>
				</div>
						</div>
						<div class="col-md-6">
								<!-- Facebook Start -->
	<?php if($themesbazar['facebook'] ==1 ): ?>
                   	<h4 class="catagory_title-03"><?php echo $themesbazar['facebook-title']?></h4>
					<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="<?php echo $themesbazar['facebook-link']['face-url']; ?>" data-tabs="timeline" data-width="<?php echo $themesbazar['facebook-width']?>" data-height="<?php echo $themesbazar['facebook-height']?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
				   <?php endif; ?>
				   
				   <?php if($themesbazar['facebook'] == 2 ): ?>
				   <?php endif; ?>
				   	<!-- Facebook Close -->
						</div>
					</div>
				</div>
			</div>
			
			
			
		<!-- **********{cetagory five}**********-->			
			
			<div class="row">
			
				<div class="col-md-12">
				<?php  
    $catfive = get_the_category_by_id($themesbazar['cat-five']);
    $catfive_link = get_category_link($themesbazar['cat-five']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($catfive_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catfive;?></a></span></h4>
				</div>
				
				<div class="col-md-3">
				<?php
    $cat05 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catfive,
    ));
    while ($cat05->have_posts()) : $cat05->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
					
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat05 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,
        'category_name' => $catfive,

    ));
    while ($cat05->have_posts()) : $cat05->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat05 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 3,
        'category_name' => $catfive,

    ));
    while ($cat05->have_posts()) : $cat05->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
				<?php
    $cat05 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
		'offset' => 5,
        'category_name' => $catfive,
    ));
    while ($cat05->have_posts()) : $cat05->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
				</div>
				
			</div>
			
		<!-- **********{cetagory six}**********-->	
			
			<div class="row">
			
				<div class="col-md-3">
				
				<?php  
    $catsix = get_the_category_by_id($themesbazar['cat-six']);
    $catsix_link = get_category_link($themesbazar['cat-six']);
                ?>    
			<h4 class="catagory_title-04"><span><a href="<?php echo esc_url($catsix_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catsix;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat06 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catsix,
    ));
    while ($cat06->have_posts()) : $cat06->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
				<?php endwhile;?>
						
								<?php
    $cat06 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-six'],
        'offset' => 1,
        'category_name' => $catsix,

    ));
    while ($cat06->have_posts()) : $cat06->the_post(); ?>	
						<div class="news_title">
			
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>					
				</div>
				
			<!-- **********{cetagory seven}**********-->	
			
				<div class="col-md-3">
				
				<?php  
    $catseven = get_the_category_by_id($themesbazar['cat-seven']);
    $catseven_link = get_category_link($themesbazar['cat-seven']);
                ?>    
			<h4 class="catagory_title-01"><span><a href="<?php echo esc_url($catseven_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catseven;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat07 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catseven,
    ));
    while ($cat07->have_posts()) : $cat07->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
				<?php endwhile;?>
						
								<?php
    $cat07 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-seven'],
        'offset' => 1,
        'category_name' => $catseven,

    ));
    while ($cat07->have_posts()) : $cat07->the_post(); ?>	
						<div class="news_title">
			
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>					
				</div>
				
			<!-- **********{cetagory eight}**********-->	
				
				<div class="col-md-3">
				
				<?php  
    $cateight = get_the_category_by_id($themesbazar['cat-eight']);
    $cateight_link = get_category_link($themesbazar['cat-eight']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($cateight_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cateight;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat08 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cateight,
    ));
    while ($cat08->have_posts()) : $cat08->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
				<?php endwhile;?>
						
								<?php
    $cat08 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-eight'],
        'offset' => 1,
        'category_name' => $cateight,

    ));
    while ($cat08->have_posts()) : $cat08->the_post(); ?>	
						<div class="news_title">
			
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>					
				</div>
				
		<!-- **********{cetagory nine}**********-->	
				
				<div class="col-md-3">
				
				<?php  
    $catnine = get_the_category_by_id($themesbazar['cat-nine']);
    $catnine_link = get_category_link($themesbazar['cat-nine']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($catnine_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catnine;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat09 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catnine,
    ));
    while ($cat09->have_posts()) : $cat09->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
				<?php endwhile;?>
						
								<?php
    $cat09 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-nine'],
        'offset' => 1,
        'category_name' => $catnine,

    ));
    while ($cat09->have_posts()) : $cat09->the_post(); ?>	
						<div class="news_title">
			
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>					
				</div>
				
			</div>
			
		<!-- **********{cetagory ten}**********-->	
			
			<div class="row">
				<div class="col-md-6">
				
				<?php  
    $catten= get_the_category_by_id($themesbazar['cat-ten']);
    $catten_link = get_category_link($themesbazar['cat-ten']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($catten_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catten;?></a></span></h4>
				
					<div class="row">
						<div class="col-md-6">
						<?php
    $cat10 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catten,
    ));
    while ($cat10->have_posts()) : $cat10->the_post();?>
							<div class="leadnews">									
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
							</div>
						<?php endwhile;?>	
						</div>
						<div class="col-md-6">
							
							<div class="img-border-02">
							<?php
    $cat10 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-ten'],
        'offset' => 1,
        'category_name' => $catten,

    ));
    while ($cat10->have_posts()) : $cat10->the_post(); ?>
								<div class="images_title-02">
									<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
								</div>
					<?php endwhile;?>								
							</div>
							
						</div>
					</div>
					
				</div>
				
		<!-- **********{cetagory eleven}**********-->
			
				<div class="col-md-6">
				
				<?php  
    $cateleven = get_the_category_by_id($themesbazar['cat-eleven']);
    $cateleven_link = get_category_link($themesbazar['cat-eleven']);
                ?>    
			<h4 class="catagory_title-04"><span><a href="<?php echo esc_url($cateleven_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cateleven;?></a></span></h4>
				
					<div class="row">
						<div class="col-md-6">
						<?php
    $cat11 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cateleven,
    ));
    while ($cat11->have_posts()) : $cat11->the_post();?>
							<div class="leadnews">									
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
							</div>
						<?php endwhile;?>	
						</div>
						<div class="col-md-6">
							
							<div class="img-border-02">
							<?php
    $cat11 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-eleven'],
        'offset' => 1,
        'category_name' => $cateleven,

    ));
    while ($cat11->have_posts()) : $cat11->the_post(); ?>
								<div class="images_title-02">
									<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
								</div>
							<?php endwhile;?>		
							</div>
						
						</div>
					</div>
					
				</div>
				
				
			</div>
			
		<!-- add here open -->	
			<div class="row">
				<div class="col-md-6">
					<div class="add">
						<?php dynamic_sidebar('widget_area_04')?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="add">
						<?php dynamic_sidebar('widget_area_05')?>
					</div>
				</div>
			</div>
		<!-- add here close -->	
			
		<!-- **********{cetagory twelve}**********-->		
			
			<div class="row">
			
				<div class="col-md-6">
				
				<?php  
    $cattwelve = get_the_category_by_id($themesbazar['cat-twelve']);
    $cattwelve_link = get_category_link($themesbazar['cat-twelve']);
                ?>    
			<h4 class="catagory_title-01"><span><a href="<?php echo esc_url($cattwelve_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwelve;?></a></span></h4>
				
					<div class="row">
						<div class="col-md-6">
						<?php
    $cat12 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwelve,
    ));
    while ($cat12->have_posts()) : $cat12->the_post();?>
							<div class="leadnews">									
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
							</div>
						<?php endwhile;?>	
						</div>
						<div class="col-md-6">
							
							<div class="img-border-02">
							<?php
    $cat12 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-twelve'],
        'offset' => 1,
        'category_name' => $cattwelve,

    ));
    while ($cat12->have_posts()) : $cat12->the_post(); ?>
								<div class="images_title-02">
									<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
								</div>
							<?php endwhile;?>	
							</div>
							
						</div>
					</div>
					
				</div>
				
	<!-- **********{cetagory thirteen}**********-->	
				
				<div class="col-md-6">
				
				<?php  
    $catthirteen = get_the_category_by_id($themesbazar['cat-thirteen']);
    $catthirteen_link = get_category_link($themesbazar['cat-thirteen']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($catthirteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catthirteen;?></a></span></h4>
				
					<div class="row">
						<div class="col-md-6">
						<?php
    $cat13 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catthirteen,
    ));
    while ($cat13->have_posts()) : $cat13->the_post();?>
							<div class="leadnews">									
								<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
							</div>
						<?php endwhile;?>	
						</div>
						<div class="col-md-6">
							
							<div class="img-border-02">
							<?php
    $cat13 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-thirteen'],
        'offset' => 1,
        'category_name' => $catthirteen,

    ));
    while ($cat13->have_posts()) : $cat13->the_post(); ?>
								<div class="images_title-02">
									<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
								</div>	
							<?php endwhile;?>	
							</div>
							
						</div>
					</div>
					
				</div>
				
				
			</div>
			
		<!-- **********{cetagory fourteen}**********-->		
			
			<div class="row">
			
			
				<div class="col-md-3">
				
				<?php  
    $catfourteen = get_the_category_by_id($themesbazar['cat-fourteen']);
    $catfourteen_link = get_category_link($themesbazar['cat-fourteen']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($catfourteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catfourteen;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat14 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catfourteen,
    ));
    while ($cat14->have_posts()) : $cat14->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat14 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-fourteen'],
        'offset' => 1,
        'category_name' => $catfourteen,

    ));
    while ($cat14->have_posts()) : $cat14->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>
				
			<!-- **********{cetagory fifthteen}**********-->	
				
				<div class="col-md-3">
				
				<?php  
    $catfifthteen= get_the_category_by_id($themesbazar['cat-fifthteen']);
    $catfifthteen_link = get_category_link($themesbazar['cat-fifthteen']);
                ?>    
			<h4 class="catagory_title-04"><span><a href="<?php echo esc_url($catfifthteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catfifthteen;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat15 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catfifthteen,
    ));
    while ($cat15->have_posts()) : $cat15->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat15 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-fifthteen'],
        'offset' => 1,
        'category_name' => $catfifthteen,

    ));
    while ($cat15->have_posts()) : $cat15->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>
				
		<!-- **********{cetagory sixteen}**********-->
				
				<div class="col-md-3">
				
				<?php  
    $catsixteen = get_the_category_by_id($themesbazar['cat-sixteen']);
    $catsixteen_link = get_category_link($themesbazar['cat-sixteen']);
                ?>    
			<h4 class="catagory_title-01"><span><a href="<?php echo esc_url($catsixteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catsixteen;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat16 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catsixteen,
    ));
    while ($cat16->have_posts()) : $cat16->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat16 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-sixteen'],
        'offset' => 1,
        'category_name' => $catsixteen,

    ));
    while ($cat16->have_posts()) : $cat16->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>
				
			<!-- **********{cetagory seventeen}**********-->
			
				<div class="col-md-3">
				
				<?php  
    $catseventeen = get_the_category_by_id($themesbazar['cat-seventeen']);
    $catseventeen_link = get_category_link($themesbazar['cat-seventeen']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($catseventeen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catseventeen;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat17 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catseventeen,
    ));
    while ($cat17->have_posts()) : $cat17->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat17 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-seventeen'],
        'offset' => 1,
        'category_name' => $catseventeen,

    ));
    while ($cat17->have_posts()) : $cat17->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>	
				
			</div>
			
			<!-- **********{cetagory eightteen}**********-->
			
			<div class="row">
				<div class="col-md-12">
				<?php  
    $cateightteen= get_the_category_by_id($themesbazar['cat-eightteen']);
    $cateightteen_link = get_category_link($themesbazar['cat-eightteen']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($cateightteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cateightteen;?></a></span></h4>
				</div>
				
				<div class="col-md-3">
				<?php
    $cat18 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cateightteen,
    ));
    while ($cat18->have_posts()) : $cat18->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
					
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat18 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' =>2,
        'offset' => 1,
        'category_name' => $cateightteen,

    ));
    while ($cat18->have_posts()) : $cat18->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat18 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 3,
        'category_name' => $cateightteen,

    ));
    while ($cat18->have_posts()) : $cat18->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
				<?php
    $cat18 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
		'offset' => 5,
        'category_name' => $cateightteen,
    ));
    while ($cat18->have_posts()) : $cat18->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
				</div>
				
				
				
			</div>
		
		<!-- **********{cetagory nineteen}**********-->	
			
			<div class="row">
				<div class="col-md-12">
				<?php  
    $catnineteen= get_the_category_by_id($themesbazar['cat-nineteen']);
    $catnineteen_link = get_category_link($themesbazar['cat-nineteen']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($catnineteen_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $catnineteen;?></a></span></h4>
				</div>
				
				<div class="col-md-3">
				<?php
    $cat19 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $catnineteen,
    ));
    while ($cat19->have_posts()) : $cat19->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
					
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat19 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,
        'category_name' => $catnineteen,

    ));
    while ($cat19->have_posts()) : $cat19->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
					<div class="img-border-02">
					<?php
    $cat19= new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 3,
        'category_name' => $catnineteen,

    ));
    while ($cat19->have_posts()) : $cat19->the_post(); ?>
						<div class="images_title-02">
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					</div>
				</div>
				
			<!-- ################# -->
			
				<div class="col-md-3">
				<?php
    $cat19 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
		'offset' => 5,
        'category_name' => $catnineteen,
    ));
    while ($cat19->have_posts()) : $cat19->the_post();?>
					<div class="leadnews">									
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_03"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					</div>
				<?php endwhile;?>	
				</div>
				
				
				
			</div>
			
			
		<!-- **************** (photo&vedio gellary) ******************-->	
			
			<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<h4 class="catagory_title-01"> <span><i class="fa fa-camera" aria-hidden="true"></i>
 <?php echo $themesbazar['photo']?> </span></h4>
						<div class="img-border">
							<div class="photo-gallery">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								<?php 
				$gallary_active = new WP_Query(array(
					'post_type' => 'news-photo',
					'posts_per_page' => 1,
					'offset'     =>0
				));
                        while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
									<div class="item active">
										<a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a>
									</div>
								 <?php endwhile; ?>	
								 
								<?php 
				$gallary = new WP_Query(array(
					'post_type' => 'news-photo',
					'posts_per_page' => 5,
					'offset'     =>1
				));
                                    while($gallary->have_posts()) : $gallary->the_post(); ?>
									<div class="item">
										<?php the_post_thumbnail(); ?>
                                        <h4 class="heading_02"><?php the_title();?></h4>
									</div>
                                        <?php endwhile; ?> 
								 
								 
								 
								 
								</div>
								</div>
							</div>
						</div>
					</div>
					
			<!-- **********video gellary********* -->
					
					
					<div class="col-md-6">	
						<h4 class="catagory_title-04"> <span><i class="fa fa-video-camera" aria-hidden="true"></i>
<?php echo $themesbazar['video']?> </span></h4>
						<div class="img-border">
							<div class="video-gellary">
								 <?php 
				$blocks = new WP_Query(array(
					'post_type' => 'news-video',
					'posts_per_page' => 1,
					'offset'     =>0
				));
				while($blocks->have_posts()) : $blocks->the_post(); ?>
                            
                            <div class="video">
								<?php the_content(); ?>
								</div>								
							
							<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="row"><div class="col-md-12"><?php dynamic_sidebar('widget_area_06')?></div></div>	
		<!-- **********{cetagory twenty}**********-->			
			
			<div class="row">
			
				<div class="col-md-3">
				
				<?php  
    $cattwenty = get_the_category_by_id($themesbazar['cat-twenty']);
    $cattwenty_link = get_category_link($themesbazar['cat-twenty']);
                ?>    
			<h4 class="catagory_title-02"><span><a href="<?php echo esc_url($cattwenty_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwenty;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat20 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwenty,
    ));
    while ($cat20->have_posts()) : $cat20->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat20 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-twenty'],
        'offset' => 1,
        'category_name' => $cattwenty,

    ));
    while ($cat20->have_posts()) : $cat20->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>	
				
			<!-- **********{cetagory twentyone}**********-->
			
				<div class="col-md-3">
				
				<?php  
    $cattwentyone = get_the_category_by_id($themesbazar['cat-twentyone']);
    $cattwentyone_link = get_category_link($themesbazar['cat-twentyone']);
                ?>    
			<h4 class="catagory_title-04"><span><a href="<?php echo esc_url($cattwentyone_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwentyone;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat21 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwentyone,
    ));
    while ($cat21->have_posts()) : $cat21->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat21 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-twentyone'],
        'offset' => 1,
        'category_name' => $cattwentyone,

    ));
    while ($cat21->have_posts()) : $cat21->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>	
				
				<!-- **********{cetagory twentytwo}**********-->
				
				<div class="col-md-3">
				
				<?php  
    $cattwentytwo = get_the_category_by_id($themesbazar['cat-twentytwo']);
    $cattwentytwo_link = get_category_link($themesbazar['cat-twentytwo']);
                ?>    
			<h4 class="catagory_title-03"><span><a href="<?php echo esc_url($cattwentytwo_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwentytwo;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat22 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwentytwo,
    ));
    while ($cat22->have_posts()) : $cat22->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat22 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-twentytwo'],
        'offset' => 1,
        'category_name' => $cattwentytwo,

    ));
    while ($cat22->have_posts()) : $cat22->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>	
				
				
			<!-- **********{cetagory twentythree}**********-->
				
								<div class="col-md-3">
				
				<?php  
    $cattwentythree = get_the_category_by_id($themesbazar['cat-twentythree']);
    $cattwentythree_link = get_category_link($themesbazar['cat-twentythree']);
                ?>    
			<h4 class="catagory_title-01"><span><a href="<?php echo esc_url($cattwentythree_link);?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php echo $cattwentythree;?></a></span></h4>
				
					<div class="leadnews-title">
					<?php
    $cat23 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => $cattwentythree,
    ));
    while ($cat23->have_posts()) : $cat23->the_post();?>
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
						<h3 class="heading_04"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
					<?php endwhile;?>

					<?php
    $cat23 = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $themesbazar['how-cat-twentythree'],
        'offset' => 1,
        'category_name' => $cattwentythree,

    ));
    while ($cat23->have_posts()) : $cat23->the_post(); ?>
						<div class="news_title">
							<h3 class="heading_03"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<?php the_permalink()?>"> <?php the_title() ?></a></h3>
						</div>
					<?php endwhile;?>	
					
					</div>
					
				</div>	


				
			</div>
			
		<?php get_footer(); ?>	
		
	
		<!-- Section 15 (footer) #################################-->	
			
