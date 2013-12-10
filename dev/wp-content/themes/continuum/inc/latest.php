<?php //get theme options
global $con_front, $con_layout, $con_feed, $con_reviews, $con_ads, $con_misc;
$con_front = get_option( 'con_front', $con_front );
$con_layout = get_option( 'con_layout', $con_layout );
$con_feed = get_option( 'con_feed', $con_feed );
$con_reviews = get_option( 'con_reviews', $con_reviews );
$con_ads = get_option( 'con_ads', $con_ads );
$con_misc = get_option( 'con_misc', $con_misc ); ?>

<?php //set theme options
$con_latest_header = $con_misc['latest_header'];
$con_latest_cats = $con_misc['latest_cats'];
$con_latest_num = $con_misc['latest_num'];
?>

<div class="latest-wrapper">

	<div id="latest">
        
        <div id="category-wrapper"> <!-- begin category header ribbon -->
        
        	<div class="header gentesque">
            
                <div class="title">
    
                    <?php echo $con_latest_header; ?>
                    
                </div>
                
                <div class="arrow">&nbsp;</div>
                
            </div>
        
        	<?php 
			$count=0;
			$cats=explode(",",$con_latest_cats); //setup array of latest categories
            $cat_ids = array(13,14,15,16);
			foreach ($cats as $cat) { //loop through each latest category
				$count++;
				$catname=trim($cat);
                $catname=str_replace('&','&amp;',$catname);
				if($catname!="" && $count<=4) {
					$catid= $cat_ids[$count - 1];
					$catlink=get_category_link($catid);
					?>
                
                    <div class="category<?php if($count==1) { ?> left<?php } elseif($count==4) { ?> right<?php } ?>">
                    
                        <div class="inner">
                            
                            <div class="gentesque">
                                <a href="<?php echo $catlink; ?>" class="tooltip" title="<?php echo __( 'View more articles in ', 'continuum' ) . $catname; ?>"><b><?php echo $catname; ?></b></a>
                            </div>
                            
                        </div>
                        
                    </div> 
                    
                <?php } ?>
                
            <?php } ?>
            
            <br class="clearer" />
            
        </div><!-- end category header ribbon -->
        
        <?php 
		$count=0;
		foreach ($cats as $cat) { //loop through each latest category
			$count++;
			$catname=trim($cat);
            $catname=str_replace('&','&amp;',$catname);			
			if($catname!="" && $count<=4) {
				$catid= $cat_ids[$count - 1];
				$catlink=get_category_link($catid);
				?>
        
                <div class="catpanel-wrapper<?php if($count==1) { ?> first<?php } elseif($count==4) { ?> last<?php } ?>"> <!-- begin category content -->
                
                    <?php 					
					$latestargs = array('cat' => $catid, 'posts_per_page' => $con_latest_num);
                    $postcount=0;
                    query_posts ( $latestargs );
                    if (have_posts()) : while (have_posts()) : the_post(); $postcount++; 
						$posttype=get_post_type();
						$isreview=false;
						if($posttype!='post') $isreview=true;
						?>	
                        
                        <?php // get review info
						if($isreview) {
							$rating = get_post_meta($post->ID, "Rating", $single = true); 
							$ratings = con_setup_rating($rating); //setup the ratings array	
							$award = get_post_meta($post->ID, "Award", $single = true); //has this product been given an award?	
						}
						?>
                
                        <div class="catpanel<?php if($postcount==$con_latest_num) { ?> last<?php } ?>">
                        
                            <?php if($postcount==1) { ?>
                            
                                <div class="article-image">
                                
                                	<?php if($isreview) {
										con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts 
									} ?>
                            
                                    <a class="thumbnail darken" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('latest', array( 'title'	=> '' )); ?></a>  
                                
                                </div>
                            
                                <a class="title first" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                
                            <?php } else { ?>
                    
                                <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                
								<?php if($isreview) { ?>
                                    <div class="stars-wrapper">
                                        <?php con_show_rating($ratings[0], $ratings[1], $ratings[2]); // show the stars or hearts  ?>
                                    </div>
                                    <br class="clearer" />
                                <?php } ?> 
                            
                            <?php } ?>
                            
                        </div>
                        
                    <?php endwhile; endif; ?>
                
                </div> <!-- end category content -->
                
            <?php } ?>
            
        <?php } ?>
        
        <br class="clearer" />
        
        <div id="more-wrapper"> <!-- begin more buttons -->
        
        	<?php 
			$count=0;
			foreach ($cats as $cat) { //loop through each latest category
				$count++;
				$catname=trim($cat);	
                $catname=str_replace('&','&amp;',$catname);			
				if($catname!="" && $count<=4) {
					$catid= $cat_ids[$count - 1];
					$catlink=get_category_link($catid);
					?>
        
                    <div class="more-button<?php if($count==1) { ?> first<?php } elseif($count==4) { ?> last<?php } ?>">
                            
                        <div>
                            <a href="<?php echo $catlink; ?>"><?php _e( 'More', 'continuum' ); ?> &raquo;</a>
                        </div>
                        
                    </div>
                    
                <?php } ?>
                
            <?php } ?>
            
            <br class="clearer" />
            
        </div><!-- end more buttons -->
        
	</div>
    
</div>

<div id="latest-bottom">&nbsp;</div>

<?php wp_reset_query(); ?>