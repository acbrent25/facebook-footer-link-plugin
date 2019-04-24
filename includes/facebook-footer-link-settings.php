<?php
// Create menu Link in admin
function ffl_options_menu_link(){
    add_options_page(
        'Facebook Footer Link Options',
        'Facebook Footer Link',
        'manage_options',
        'ffl-options',
        'ffl_options_content'
    );
}

// Create Options Page Content
function ffl_options_content(){

    // Init Options Global
    global $ffl_options;

    ob_start(); ?>
        <div class="wrap">
            <h2><?php _e('Facebook Footer Link Settings', 'ffl_domain'); ?></h2>
            <p><?php _e('Settings for the Facebook Footer Link Plugin', 'ffl_domain'); ?></p>
            
            <form method="post" action="options.php">
                <?php settings_fields('ffl_settings_group'); ?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[enable]"><?php _e('Enable', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="ffl_settings[enable]" id="ffl_settings[enable]" value="1" <?php checked('1', $ffl_options['enable']); ?> >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[facebook_url]"><?php _e('Facebook Profile URL', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[facebook_url]" id="ffl_settings[facebook_url]" value="<?php echo $ffl_options['facebook_url']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter Your Facebook Profile URL', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[instagram_url]"><?php _e('Instagram Profile URL', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[instagram_url]" id="ffl_settings[instagram_url]" value="<?php echo $ffl_options['instagram_url']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter Your Instagram Profile URL', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[twitter_url]"><?php _e('Twitter Profile URL', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[twitter_url]" id="ffl_settings[twitter_url]" value="<?php echo $ffl_options['twitter_url']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter Your Twitter Profile URL', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[pinterest_url]"><?php _e('Pinterest Profile URL', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[pinterest_url]" id="ffl_settings[pinterest_url]" value="<?php echo $ffl_options['pinterest_url']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter Your Pinterest Profile URL', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[linkedin_url]"><?php _e('LinkedIn Profile URL', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[linkedin_url]" id="ffl_settings[linkedin_url]" value="<?php echo $ffl_options['linkedin_url']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter Your LinkedIn Profile URL', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[link_color]"><?php _e('Link Color', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="ffl_settings[link_color]" id="ffl_settings[link_color]" value="<?php echo $ffl_options['link_color']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'ffl_domain'); ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="ffl_settings[show_in_feed]"><?php _e('Show in Posts Feed', 'ffl_domain'); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="ffl_settings[show_in_feed]" id="ffl_settings[show_in_feed]" value="1" <?php checked('1', $ffl_options['show_in_feed']); ?> >
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="color">test color</label>
                            </th>
                            <td>
                            <input type="text" value="#bada55" class="my-color-field" />
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <p class="submit"><input type="submit" names="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'ffl_domain'); ?>"></p>
            </form>

        </div>
    <?php
    echo ob_get_clean();
}

add_action('admin_menu', 'ffl_options_menu_link');

// Register Settings
function ffl_register_settings(){
    register_setting('ffl_settings_group', 'ffl_settings');
}

add_action('admin_init', 'ffl_register_settings');