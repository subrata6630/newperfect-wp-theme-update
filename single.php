<?php get_header() ?>
        <?php global $themesbazar ?>
			

	
			
	<!-- Section 06 (top two div) #################################--> 	
	
		<!--gellary open--->	
		<div class="row">
			<div class="col-md-8">
			
			<div class="single_details">
				
               <?php if(have_posts()) : ?>
               <?php while(have_posts()) : the_post(); ?>
                
                <ol class="breadcrumb">
  <li><a href="<?php bloginfo(url);?>"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
  <li><a href="#"><?php the_category(', '); ?></a></li>
  <li class="active"><?php the_title();?></li>
</ol>
               
               <div class="single_images">	<?php the_post_thumbnail('single-thumbnail', array('class' => 'single-thumbnail')); ?>
            
                           <?php 
                           $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                                if ($caption): ?>
                                         <div class="caption"><?php echo $caption ?> </div>
                                <?php endif; ?> 
                       </div>
                       
                         <div class="row"><div class="col-md-12"><?php dynamic_sidebar('single_top')?></div></div>
                         
                         
					<h3 class="single_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<ol class="breadcrumb">
        <li><?php echo $themesbazar['update'];?> <?php the_time('F, j, Y, g:i a'); ?></li>
        <li class="active"><?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> <?php echo $themesbazar['count'];?></li>
        </ol>
					 <p><?php the_content();?> </p> 
               
               
                 <?php endwhile;?>
                <?php endif;?>
                
                
     <div class="row"><div class="col-md-12"><?php dynamic_sidebar('single_buttom')?></div></div>           
                
 <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $themesbazar['more-news-category']?></b>

<?php
global $post;
$cat_ID=array();
$categories = get_the_category(); //get all categories for this post
  foreach($categories as $category) {
    array_push($cat_ID,$category->cat_ID);
  }
  $args = array(
  'orderby' => 'date',
  'order' => 'DESC',
	'post_type' => 'post',
	'numberposts' => 10,
	'post__not_in' => array($post->ID),
	'category__in' => $cat_ID
  ); // post__not_in will exclude the post we are displaying
    $cat_posts = get_posts($args);
    $out='';
      foreach($cat_posts as $cat_post) {
          $out .= '<li> &nbsp;';
          $out .=  ' <a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.wptexturize($cat_post->post_title).'</a></li>';
      }
    $out = '<ul class="cat_post">' . $out . '</ul>';
    echo $out;
?>
               
               
           </div>     
			</div>	
		
			<!--****************** tab *************** -->
			
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
	
	
			
	<?php get_footer(); ?>