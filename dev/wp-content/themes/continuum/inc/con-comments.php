<div id="comments">

	<div class="left-panel">
    
        <div class="inner">
        
			<?php comments_template(); // show comments ?>
            
        </div>
                
    </div>
    
    <div class="right-panel sidebar">
    
        <div class="inner">
    
            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Comments') ) : else : ?>
                        
                <!-- don't show anything by default -->
            
            <?php endif; ?>
            
        </div>
    
    </div>
    
    <br class="clearer" />

</div>