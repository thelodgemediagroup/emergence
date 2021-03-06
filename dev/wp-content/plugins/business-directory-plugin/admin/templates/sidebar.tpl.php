<?php
?>
<div class="sidebar">
    <div class="meta-box-sortables metabox-holder ui-sortable" id="side-sortables">
        <!-- Like this plugin? -->
        <div class="postbox">
            <h3 class="hndle"><span><?php _ex( 'Like this plugin?', 'admin sidebar', 'WPBDM'); ?></span></h3>
            <div class="inside">
                <p><?php _ex( 'Why not do any or all of the following:', 'admin sidebar', 'WPBDM'); ?></p>
                <ul>
                    <li class="li_link"><a href="http://wordpress.org/extend/plugins/business-directory-plugin/"><?php _ex( 'Give it a good rating on WordPress.org.', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://wordpress.org/extend/plugins/business-directory-plugin/"><?php _ex( 'Let other people know that it works with your WordPress setup.', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/"><?php _ex( 'Buy a Premium Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                </ul>
            </div>
        </div>

        <!-- Premium modules -->
        <div class="postbox premium-modules">
            <h3 class="hndle"><span><?php _ex( 'Get a Premium Module', 'admin sidebar', 'WPBDM'); ?></span></h3>
            <div class="inside">
                <ul>
                    <li class="li_link">
                        <img src="<?php echo WPBDP_URL . 'resources/images/new.gif'; ?>" /> <a href="http://businessdirectoryplugin.com/premium-modules/featured-levels-module/"><?php _ex('Featured Levels Module', 'admin sidebar', 'WPBDM'); ?></a>
                    </li>
                    <li class="li_link">
                        <img src="<?php echo WPBDP_URL . 'resources/images/new.gif'; ?>" /> <a href="http://businessdirectoryplugin.com/premium-modules/zip-search-module/"><?php _ex('ZIP Code Search Module', 'admin sidebar', 'WPBDM'); ?></a>
                    </li>
                    <li class="li_link">
                        <img src="<?php echo WPBDP_URL . 'resources/images/new.gif'; ?>" /> <a href="http://businessdirectoryplugin.com/premium-modules/file-upload-module/"><?php _ex('File Upload Module', 'admin sidebar', 'WPBDM'); ?></a>
                    </li>                                                           
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/regions-module/"><?php _ex('Regions Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/ratings-module/"><?php _ex('Ratings Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/google-maps-module/"><?php _ex('Google Maps Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/paypal-module/"><?php _ex('PayPal Payment Gateway Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/2checkout-module/"><?php _ex('2Checkout Payment Gateway Module', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/business-directory-combo-pack/"><?php _ex('Single Site License Combo Pack', 'admin sidebar', 'WPBDM'); ?></a></li>
                    <li class="li_link"><a href="http://businessdirectoryplugin.com/premium-modules/business-directory-combo-pack-multi-site/"><?php _ex('Multi Site License Combo Pack', 'admin sidebar', 'WPBDM'); ?></a></li>
                </ul>
            </div>
        </div>

        <!-- support -->
        <div class="postbox">
            <h3 class="hndle"><span><?php _ex('Found a bug? Need support?', 'admin sidebar', 'WPBDM'); ?></span></h3>
            <div class="inside">
                <p>
                    <?php echo str_replace( '<a>',
                                            '<a href="http://businessdirectoryplugin.com/forums/" target="_blank">',
                                            _x( 'If you\'ve found a bug or need support <a>visit the forums!</a>', 'admin sidebar', 'WPBDM' ) ); ?>
                </p>
                <p>
                    &#149; <a href="http://businessdirectoryplugin.com/docs/"><?php _ex( 'Full plugin documentation', 'admin sidebar', 'WPBDM' ); ?></a><br />
                    &#149; <a href="http://businessdirectoryplugin.com/quick-start-guide/"><?php _ex( 'Quick Start Guide', 'admin sidebar', 'WPBDM' ); ?></a>
                </p>
            </div>
        </div>
        <!-- /support -->        

        <!-- Installed modules -->
        <div class="postbox installed-modules">
            <h3 class="hndle"><span>Installed Modules</span></h3>
            <div class="inside">
                <ul>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/paypal-module/"><?php _ex('PayPal Payment Gateway', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('paypal') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/2checkout-module/"><?php _ex('2Checkout Payment Gateway', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('2checkout') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/google-maps-module/"><?php _ex('Google Maps Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('googlemaps') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/ratings-module/"><?php _ex('Ratings Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('ratings') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/regions-module/"><?php _ex('Regions Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('regions') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/file-upload-module/"><?php _ex('File Upload Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('attachments') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/zip-search-module/"><?php _ex('ZIP Code Search Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('zipcodesearch') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/premium-modules/featured-levels-module/"><?php _ex('Featured Levels Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('featuredlevels') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>
                    <li class="li_link">
                        <a href="http://businessdirectoryplugin.com/"><?php _ex('Enhanced Categories Module', 'admin sidebar', 'WPBDM'); ?></a>:<br />
                        <?php echo wpbdp()->has_module('categories') ? _x('Installed', 'admin sidebar', 'WPBDM') : _x('Not Installed', 'admin sidebar', 'WPBDM'); ?>
                    </li>                   
                </ul>
            </div>
        </div>
    </div>
</div>