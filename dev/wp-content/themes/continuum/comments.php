<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php _e( 'This post is password protected. Enter the password to view comments.', 'continuum' ); ?>
	<?php
		return;
	}
?>
        
<div class="comments-header">

    <div class="ribbon left"> 
                
        <div class="ribbon-inner">
                                    
            <h3 class="gentesque"><?php comments_number('0 Comments', 'One Comment', '% Comments' );?></h3>
                
        </div>
        
        <?php if ( comments_open() && have_comments() ) : ?>
    
            <div class="leave-comment">
            
                <a href="#respond"><?php _e( 'Leave a comment', 'continuum' ); ?> &raquo;</a>
            
            </div>
            
        <?php endif; ?>
        
    </div> 
    
</div>

<?php if ( have_comments() ) : ?>

    <br class="clearer" />
    
    <?php if (show_posts_nav(get_comments_number())) : ?>

        <div class="pagination-wrapper comments">
    
            <div class="left-cap">&nbsp;</div>
            
            <?php $args = array(
                'prev_text'    => __('&laquo;'),
                'next_text'    => __('&raquo;') );
            ?> 
            
            <div class="pagination">                	
                <?php paginate_comments_links($args); ?>
            </div> 
            
            <div class="right-cap">&nbsp;</div>
            
        </div>
        
        <br class="clearer" />
        
    <?php endif; ?> 
    
    <ol class="commentlist">
        <?php wp_list_comments('type=all&callback=mytheme_comment'); ?>
    </ol>
    
    <?php if (show_posts_nav(get_comments_number())) : ?>

        <div class="pagination-wrapper comments">
    
            <div class="left-cap">&nbsp;</div>
            
            <?php $args = array(
                'prev_text'    => __('&laquo;'),
                'next_text'    => __('&raquo;') );
            ?> 
            
            <div class="pagination">                	
                <?php paginate_comments_links($args); ?>
            </div> 
            
            <div class="right-cap">&nbsp;</div>
            
        </div>
        
        <br class="clearer" /><br />
        
    <?php endif; ?>
    
    <br />
    
 <?php else : // this is displayed if there are no comments so far ?>
 
    <br />

    <?php if ( comments_open() ) : ?>
        <h3 class="gentesque be-the-first"><?php _e( 'Be the first to comment!', 'continuum' ); ?></h3>

     <?php else : // comments are closed ?>
        <h3 class="gentesque be-the-first"><?php _e( 'Comments are closed.', 'continuum' ); ?></h3>

    <?php endif; ?>
    
    <br />
    
<?php endif; ?>

<?php if ( comments_open() ) : ?>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p><?php _e( 'You must be logged in to post a comment.', 'continuum' ); ?></p>
    <?php else : ?>
    
        <?php comment_form(); ?> 

    <?php endif; // If registration required and not logged in ?>

<?php endif; ?>