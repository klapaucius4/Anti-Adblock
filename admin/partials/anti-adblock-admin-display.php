<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://fsylum.net
 * @since      1.0.0
 *
 * @package    Anti_AdBlock
 * @subpackage Anti_AdBlock/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div id="anti-adblock-admin-container" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="wrap">
                <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
                <form action="options.php" method="post">
                    <?php
                        settings_fields( $this->plugin_name );
                        do_settings_sections( $this->plugin_name );
                        submit_button();
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>