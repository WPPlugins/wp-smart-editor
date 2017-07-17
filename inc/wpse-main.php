<?php
defined('ABSPATH') or die('Restricted Access!');

// Main class of WP Smart Editor
class wpse_main {

    // Prepare the default values for new profiles
    public static $default_buttons_array = array(
        'toolbar1' => 'bold italic strikethrough bullist numlist blockquote hr alignleft aligncenter alignright link unlink wp_more',
        'toolbar2' => 'formatselect underline alignjustify forecolor pastetext removeformat charmap outdent indent undo redo columns bulletmngr anchor summary wpsebutton customstyles',
        'toolbar3' => '',
        'toolbar4' => '',
        'unused_toolbar1' => 'preview superscript subscript searchreplace print visualblocks rtl ltr wp_help unused',
        'unused_toolbar2' => 'fontselect fontsizeselect styleselect unused',
        'unused_toolbar3' => ''
    );

    public static $default_extra_btns = array(
        'active_wpfdl' => '1',
        'active_wptml' => '1'
    );

    public static $default_config = array(
        'disable_autop' => '1',
        'active_post_editor' => '1',
        'active_file_editor' => '1'
    );

    public static $default_roles_access = array(
        0 => 'administrator'
    );

    public static $default_custom_styles = array(
        0 => array(
            'id' => 1,
            'title' => 'Blue message',
            'name' => 'blue-message',
            'css' => 'background: none repeat scroll 0 0 #3399ff;
color: #ffffff;
text-shadow: none;
font-size: 14px;
line-height: 24px;
padding: 10px;'
        ),
        1 => array(
            'id' => 2,
            'title' => 'Green message',
            'name' => 'green-message',
            'css' => 'background: none repeat scroll 0 0 #8cc14c;
color: #ffffff;
text-shadow: none;
font-size: 14px;
line-height: 24px;
padding: 10px;'
        ),
        2 => array(
            'id' => 3,
            'title' => 'Orange message',
            'name' => 'orange-message',
            'css' => 'background: none repeat scroll 0 0 #faa732;
color: #ffffff;
text-shadow: none;
font-size: 14px;
line-height: 24px;
padding: 10px;'
        ),
        3 => array(
            'id' => 4,
            'title' => 'Red message',
            'name' => 'red-message',
            'css' => 'background: none repeat scroll 0 0 #da4d31;
color: #ffffff;
text-shadow: none;
font-size: 14px;
line-height: 24px;
padding: 10px;'
        ),
        4 => array(
            'id' => 5,
            'title' => 'Grey message',
            'name' => 'grey-message',
            'css' => 'background: none repeat scroll 0 0 #53555c;
color: #ffffff;
text-shadow: none;
font-size: 14px;
line-height: 24px;
padding: 10px;'
        ),
        5 => array(
            'id' => 6,
            'title' => 'Left block',
            'name' => 'left-block',
            'css' => 'background: none repeat scroll 0 0px, radial-gradient(ellipse at center center, #ffffff 0%, #f2f2f2 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
color: #8b8e97;
padding: 10px;
margin: 10px;
float: left;'
        ),
        6 => array(
            'id' => 7,
            'title' => 'Right block',
            'name' => 'right-block',
            'css' => 'background: none repeat scroll 0 0px, radial-gradient(ellipse at center center, #ffffff 0%, #f2f2f2 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
color: #8b8e97;
padding: 10px;
margin: 10px;
float: right;'
        ),
        7 => array(
            'id' => 8,
            'title' => 'Blockquotes',
            'name' => 'blockquotes',
            'css' => 'background: none;
border-left: 5px solid #f1f1f1;
color: #8B8E97;
font-size: 14px;
font-style: italic;
line-height: 22px;
padding-left: 15px;
padding: 10px;
width: 60%;
float: left;'
        )
    );

    public static $default_wpse_buttons = array(
        0 => array(
            'id' => 1,
            'font-size' => '13',
            "color"=>"#ffffff",
            "background"=>"#2196F3",
            "padding-left"=>"12",
            "padding-top"=>"6",
            "padding-right"=>"12",
            "padding-bottom"=>"6",
            "border-width"=>"1",
            "border-radius"=>"0",
            "border-color"=>"#2196F3",
            "color-hover"=>"#ffffff",
            "background-hover"=>"#2196F3",
            "border-style"=>"solid",
            'box-shadow-color-hover' =>'#bababa',
            'box-shadow-horz-hover' =>'3',
            'box-shadow-vert-hover' =>'3',
            'box-shadow-blur-hover' =>'3',
            'box-shadow-spread-hover' =>'0',
            "text"=>"Button text"
        ),
        1 => array(
            'id' => 2,
            'font-size' => '13',
            "color"=>"#ffffff",
            "background"=>"#009688",
            "padding-left"=>"12",
            "padding-top"=>"6",
            "padding-right"=>"12",
            "padding-bottom"=>"6",
            "border-width"=>"1",
            "border-radius"=>"0",
            "border-color"=>"#2196F3",
            "color-hover"=>"#ffffff",
            "background-hover"=>"#009688",
            "border-style"=>"solid",
            'box-shadow-color-hover' =>'#bababa',
            'box-shadow-horz-hover' =>'3',
            'box-shadow-vert-hover' =>'3',
            'box-shadow-blur-hover' =>'3',
            'box-shadow-spread-hover' =>'0',
            "text"=>"Button text"
        ),
        2 => array(
            'id' => 3,
            'font-size' => '13',
            "color"=>"#ffffff",
            "background"=>"#0097a7",
            "padding-left"=>"12",
            "padding-top"=>"6",
            "padding-right"=>"12",
            "padding-bottom"=>"6",
            "border-width"=>"1",
            "border-radius"=>"0",
            "border-color"=>"#2196F3",
            "color-hover"=>"#ffffff",
            "background-hover"=>"#0097a7",
            "border-style"=>"solid",
            'box-shadow-color-hover' =>'#bababa',
            'box-shadow-horz-hover' =>'3',
            'box-shadow-vert-hover' =>'3',
            'box-shadow-blur-hover' =>'3',
            'box-shadow-spread-hover' =>'0',
            "text"=>"Button text"
        ),
    );

    protected  $active_post_id = null;

    // Constructor
    public function __construct() {
        add_action('admin_enqueue_scripts', array($this, 'load_back_styles'));              // Load back-end styles and scripts
        add_action('admin_init', array($this, 'load_custom_styles_data'));                  // Load data for custom styles button
        add_action('admin_init', array($this, 'wpse_tinymce'));                             // Setup our editor
        add_filter('tiny_mce_before_init', array($this, 'tinymce_before_init'));            // Init MCE
        add_action('load-wpse_profiles_page_wpse-config', array($this, 'save_settings'));   // Save config settings
        add_filter('format_for_editor', array($this, 'disable_autop'));                     // Format content if disable wpautop

        // Check if we are in admin page
        if (is_admin()) {
            // Check if we are in WPSE profiles
            if (is_multisite()) {
                switch_to_blog(get_current_blog_id());
                $current_screen = $_SERVER['REQUEST_URI'];
                $post_type = isset($_GET['post']) ? get_post_type($_GET['post']) : "";
                if (isset($_GET['post_type']) && strpos($current_screen, 'post-new.php') !== FALSE) {
                    $post_type = $_GET['post_type'];
                }

                restore_current_blog();
            } else {
                global $pagenow;
                $post_type = isset($_GET['post']) ? get_post_type($_GET['post']) : "";
                if (isset($_GET['post_type']) && $pagenow == "post-new.php") {
                    $post_type = $_GET['post_type'];
                }
            }
            // Load styles and js for profiles
            if ($post_type == 'wpse_profiles') {
                add_action('admin_enqueue_scripts', array($this, 'admin_css'));             // Load profile CSS
                add_action('admin_enqueue_scripts', array($this, 'admin_js'));              // Load profile JS
            }

            add_action('admin_menu', array($this, 'wpse_meta_box'));                        // Setup meta box
            add_action('admin_menu', array($this, 'wpse_sub_menu'));                        // Add submenu for our plugin

            // Add ajax
            add_action('wp_ajax_wpse_get_users', array($this, 'wpse_get_users'));
            add_action('wp_ajax_wpse_custom_styles_ajax', array($this, 'wpse_custom_styles_ajax'));
            add_action('wp_ajax_wpse_button_ajax', array($this, 'wpse_button_ajax'));
            add_action('wp_ajax_wpse_bulleted_ajax', array($this, 'wpse_bulleted_ajax'));
        }
        if (!is_admin()) {
            add_action('wp_enqueue_scripts', array($this, 'load_front_styles'));        // Load style for front-end
        }
    }

    // Ajax to get list users
    public function wpse_get_users() {
        // Check users permissions
        if (!current_user_can('create_wpse_profiles')) {
            wp_send_json('No permission!', 403);
            return false;
        }

        $usersearch = isset( $_REQUEST['search'] ) ?  wp_unslash(trim( $_REQUEST['search'] ))  : '';
        $role = isset( $_REQUEST['role'] ) ? $_REQUEST['role'] : '';
        $users_per_page = 20;
        $pagenum = 1;
        if ($role == 'none') {
            $args_all = array(
                'include' => wp_get_users_with_no_role(),
                'search' => $usersearch,
                'fields' => 'all_with_meta'
            );
        } else {
            $args_all = array(
                'role' => $role,
                'search' => $usersearch,
                'fields' => 'all_with_meta'
            );
        }
        if ($args_all['search'] !== '' )
            $args_all['search'] = '*' . $args_all['search'] . '*';

        $total_users = count(get_users($args_all));
        $total_pages = ceil($total_users / $users_per_page);
        if (isset( $_REQUEST['paged'] )) {
            if ($_REQUEST['paged'] == 'first') {
                $pagenum = 1;
            }
            elseif ($_REQUEST['paged'] == 'last') {
                $pagenum = $total_pages;
            } else {
                $pagenum = $_REQUEST['paged'];
            }
        }
        $paged = max( 1, $pagenum );

        if ( $role === 'none' ) {
            $args = array(
                'number' => $users_per_page,
                'offset' => ( $paged-1 ) * $users_per_page,
                'include' => wp_get_users_with_no_role(),
                'search' => $usersearch,
                'fields' => 'all_with_meta'
            );
        } else {
            $args = array(
                'number' => $users_per_page,
                'offset' => ( $paged-1 ) * $users_per_page,
                'role' => $role,
                'search' => $usersearch,
                'fields' => 'all_with_meta'
            );
        }

        if ($args['search'] !== '' )
            $args['search'] = '*' . $args['search'] . '*';

        // Query the user IDs for this page
        $wp_user_search = get_users($args);

        $users_list = '';
        $pages_list = '';

        if (count($wp_user_search)) {
            foreach ($wp_user_search as $userid => $user_object) {
                $users_list .= '<tr>';
                $users_list .= '<td class="select-box"><input type="checkbox" name="wpse-users[]" value="'.$userid.'"></td>';
                $users_list .= '<td class="name column-name"><span style="color: #0073aa">' . $user_object->display_name . '</span></td>';
                $users_list .= '<td class="username column-username"><strong>' . $user_object->user_login . '</strong></td>';
                $users_list .= '<td class="email column-email">' . $user_object->user_email . '</td>';

                $role_list = array();
                global $wp_roles;
                foreach ($user_object->roles as $role) {
                    if (isset($wp_roles->role_names[$role])) {
                        $role_list[$role] = translate_user_role($wp_roles->role_names[$role]);
                    }
                }

                if (empty($role_list)) {
                    $role_list['none'] = _x('None', 'no user roles');
                }
                $roles_list = implode(', ', $role_list);

                $users_list .= '<td class="role column-role">' . $roles_list . '</td>';
                $users_list .= '</tr>';
            }
        } else {
            $users_list .= '<tr><td colspan="5"> ';
            $users_list .= __('No users found.', 'wp-smart-editor');
            $users_list .= '</td></tr>';
        }

        $doneLeft = $doneRight = $skipLeft = $skipRight = false;
        if ($total_pages > 1) {
            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i < $pagenum - 2) {
                    $skipLeft = true;
                }
                elseif ($i > $pagenum + 2) {
                    $skipRight = true;
                }
                else {
                    $skipLeft  = false;
                    $skipRight = false;
                }
                if ($i == 1) {
                    if ($pagenum == 1) {
                        $pages_list .= '<i class="dashicons dashicons-controls-skipback" id="first-page"></i>';
                    } else {
                        $pages_list .= '<a class="dashicons dashicons-controls-skipback" id="first-page" title="'.__('First page', 'wp-smart-editor').'"></a>';
                    }
                }
                if (!$skipLeft && !$skipRight) {
                    if ($i == $pagenum) {
                        $pages_list .= '<strong>'.$i.'</strong>';
                    } else {
                        $pages_list .= '<a class="switch-page">'.$i.'</a>';
                    }
                } elseif ($skipLeft) {
                    if (!$doneLeft) {
                        $pages_list .= '<span>...</span>';
                        $doneLeft = true;
                    }
                } elseif ($skipRight) {
                    if (!$doneRight) {
                        $pages_list .= '<span>...</span>';
                        $doneRight = true;
                    }
                }

                if ($i == $total_pages) {
                    if ($pagenum == $total_pages) {
                        $pages_list .= '<i class="dashicons dashicons-controls-skipforward" id="last-page"></i>';
                    } else {
                        $pages_list .= '<a class="dashicons dashicons-controls-skipforward" id="last-page" title="'.__('Last page', 'wp-smart-editor').'"></a>';
                    }
                }
            }
        }
        $response = array('users_list' => $users_list, 'pages_list' => $pages_list);
        wp_send_json($response);
    }

    // Ajax for custom styles
    public function wpse_custom_styles_ajax() {
        // Check users permissions
        if (!current_user_can('activate_plugins')) {
            wp_send_json('No permission!', 403);
            return false;
        }
        $regex = '/^[a-zA-Z0-9_\-]+$/';
        $regexWithSpaces = '/^[\p{L}\p{N}_\- ]+$/u';

        $check_exist = get_option('wpse_custom_styles');
        if ($check_exist === false) {
            update_option('wpse_custom_styles', $this::$default_custom_styles);
        }

        $custom_style_data = get_option('wpse_custom_styles');
        $task = isset($_POST['task']) ? $_POST['task'] : '';
        if ($task == '') return false;

        elseif ($task == 'new') {
            $new_style_id = end($custom_style_data)['id'] + 1;
            $new_style_array = array(
                'id' => $new_style_id,
                'title' => __('New class', 'wp-smart-editor'),
                'name' => __('new-class', 'wp-smart-editor'),
                'css' => ''
            );
            array_push($custom_style_data, $new_style_array);
            update_option('wpse_custom_styles', $custom_style_data);
            wp_send_json($new_style_array);
        }

        elseif ($task == 'delete') {
            $custom_style_data_delete = get_option('wpse_custom_styles');
            $style_id = $_POST['id'];
            $new_style_deleted_array = array();
            $done = false;
            foreach ($custom_style_data_delete as $data) {
                if ($data['id'] == $style_id) {
                    $done = true;
                    continue;
                }
                array_push($new_style_deleted_array, $data);
            }
            update_option('wpse_custom_styles', $new_style_deleted_array);
            if ($done) {
                wp_send_json(array('id' => $style_id), 200);
            }
        }

        elseif ($task == 'copy') {
            $data_saved = get_option('wpse_custom_styles');
            $style_id = $_POST['id'];
            $new_style_copied_array = get_option('wpse_custom_styles');
            $copied_styles = array();
            foreach ($data_saved as $data) {
                if ($data['id'] == $style_id) {
                    $copied_styles = array(
                        'id' => end($new_style_copied_array)['id'] + 1,
                        'title' => sanitize_text_field($data['title']),
                        'name' => sanitize_text_field($data['name']),
                        'css' => $data['css']
                    );

                    array_push($new_style_copied_array, $copied_styles);
                }
            }
            update_option('wpse_custom_styles', $new_style_copied_array);
            wp_send_json($copied_styles);
        }

        elseif ($task == 'preview') {
            $style_id = $_POST['id'];
            $data_saved = get_option('wpse_custom_styles');
            $get_style_array = array();
            foreach ($data_saved as $data) {
                if ($data['id'] == $style_id) {
                    foreach ($data as $key => $value) {
                        $data[$key] = esc_html($value);
                    }
                    $get_style_array = $data;
                }
            }
            if (!empty($get_style_array)) {
                wp_send_json($get_style_array);
            } else {
                wp_send_json(false, 404);
            }
        }

        elseif ($task == 'style_save') {
            $style_id = $_POST['id'];
            $new_title = sanitize_text_field($_POST['title']);
            $new_classname = sanitize_text_field($_POST['name']);
            $new_css = $_POST['mycss'];
            // Validate new name
            if (!preg_match($regexWithSpaces, $new_title) || !preg_match($regex, $new_classname)) {
                wp_send_json('Invalid characters, please enter another!', 403);
                return false;
            }
            $data_saved = get_option('wpse_custom_styles');
            $new_data_array = array();
            foreach ($data_saved as $data) {
                if ($data['id'] == $style_id) {
                    $data['title'] = $new_title;
                    $data['name'] = $new_classname;
                    $data['css'] = $new_css;
                }
                array_push($new_data_array, $data);
            }
            update_option('wpse_custom_styles', $new_data_array);
        }

        else {
            wp_send_json(null, 404);
        }
    }

    // Ajax for button plugin
    public function wpse_button_ajax() {
        // Check users permissions
        if (!$this->active_post_id) {
            wp_send_json('No permission!', 403);
            return false;
        }

        $task = $_POST['task'];
        if ($task == '') wp_send_json('No request to handle!', 400);

        $buttons_data_saved = get_option('wpse_button_styles');
        if ($buttons_data_saved === false) wp_send_json('Database Not Found!', 404);

        if ($task === 'delete') {
            $id_btn = $_POST['id_btn'];
            $buttons_data_saved = get_option('wpse_button_styles');
            $new_data = array();
            $done = false;
            foreach ($buttons_data_saved as $button_data) {
                if ($button_data['id'] == $id_btn) {
                    $done = true;
                    continue;
                }
                array_push($new_data, $button_data);
            }
            update_option('wpse_button_styles', $new_data);
            if ($done) {
                wp_send_json('Done!', 200);
            }
        }

        if ($task === 'update') {
            $id_btn = $_POST['id_btn'];
            $btn_link = sanitize_text_field($_POST['btn_link']);

            $style_btn = array();
            foreach ($_POST['style_btn'] as $key => $value) {
                $style_btn[$key] = sanitize_text_field($value);
            }

            $style_btn['id'] = (int)$id_btn;
            $style_btn['border-style'] = 'solid';
            $style_btn['btn-link'] = $btn_link;

            $buttons_data_saved = get_option('wpse_button_styles');
            $new_data = array();
            $done = false;
            foreach ($buttons_data_saved as $button_data) {
                if ($button_data['id'] == $id_btn) {
                    $button_data = $style_btn;
                    $done = true;
                }
                array_push($new_data, $button_data);
            }
            update_option('wpse_button_styles', $new_data);
            if ($done) {
                wp_send_json(array('id_btn' => $id_btn), 200);
            }
        }

        if ($task === 'addnew') {
            $btn_link = sanitize_text_field($_POST['btn_link']);
            $buttons_data_saved = get_option('wpse_button_styles');
            $new_btn_id = end($buttons_data_saved)['id'] + 1;

            $style_btn = array();
            foreach ($_POST['style_btn'] as $key => $value) {
                $style_btn[$key] = sanitize_text_field($value);
            }
            $style_btn['id'] = (int)$new_btn_id;
            $style_btn['border-style'] = 'solid';
            $style_btn['btn-link'] = $btn_link;

            array_push($buttons_data_saved, $style_btn);
            update_option('wpse_button_styles', $buttons_data_saved);
            wp_send_json(array('id_btn' => $new_btn_id), 200);
        }

        else {
            wp_send_json(null, 400);
        }
    }

    // Ajax for bullets manager plugin
    public function wpse_bulleted_ajax() {
        // Check users permissions
        if (!$this->active_post_id) {
            wp_send_json('No permission!', 403);
            return false;
        }

        $task = $_POST['task'];
        if ($task == '') wp_send_json('No request!', 400);

        $bullets_data_saved = get_option('wpse_bulleted_styles');
        if ($bullets_data_saved === false) add_option('wpse_bulleted_styles', array());

        if ($task === 'addnew') {
            $bullets_data_saved = get_option('wpse_bulleted_styles');
            $new_bul_id = end($bullets_data_saved)['id'] + 1;
            $bul_classes = sanitize_text_field($_POST['classes']);
            $style_bullet = array();
            foreach ($_POST['styles_bul'] as $key => $value) {
                $style_bullet[$key] = sanitize_text_field($value);
            }
            $style_bullet['id'] = $new_bul_id;
            $style_bullet['classes'] = $bul_classes;

            array_push($bullets_data_saved, $style_bullet);
            update_option('wpse_bulleted_styles', $bullets_data_saved);
            wp_send_json(array('id_bul' => $new_bul_id, 'classes' => $bul_classes), 200);
        }

        if ($task === 'delete') {
            $bullets_data_saved = get_option('wpse_bulleted_styles');
            $id_bul = $_POST['id_bul'];
            $new_data = array();
            $done = false;

            foreach ($bullets_data_saved as $bullet) {
                if ($bullet['id'] == $id_bul) {
                    $done = true;
                    continue;
                }
                array_push($new_data, $bullet);
            }
            update_option('wpse_bulleted_styles', $new_data);
            if ($done) {
                wp_send_json(true, 200);
            }
        }

        if ($task === 'update') {
            $bullets_data_saved = get_option('wpse_bulleted_styles');
            $id_bul = (int)$_POST['id_bul'];
            $bul_classes = sanitize_text_field($_POST['classes']);
            $new_data = array();
            $style_bullet = array();
            foreach ($_POST['styles_bul'] as $key => $value) {
                $style_bullet[$key] = sanitize_text_field($value);
            }
            $style_bullet['id'] = $id_bul;
            $style_bullet['classes'] = $bul_classes;
            $done = false;

            foreach ($bullets_data_saved as $bullet) {
                if ($bullet['id'] == $id_bul) {
                    $bullet = $style_bullet;
                    $done = true;
                }
                array_push($new_data, $bullet);
            }
            update_option('wpse_bulleted_styles', $new_data);
            if ($done) {
                wp_send_json(true, 200);
            }
            else {
                wp_send_json(false, 404);
            }
        }

        else {
            wp_send_json(null, 400);
        }
    }

    // Load style for front-end
    public function load_front_styles() {
        wp_enqueue_style('dashicons');
        wp_enqueue_style('front_styles', plugin_dir_url(dirname(__FILE__)) . 'css/front_styles.css');
        wp_enqueue_style('custom_styles',plugin_dir_url(dirname(__FILE__)) . 'css/customstyles/custom_styles.css');
    }

    // Load style and script for our plugins
    public function load_back_styles() {
        wp_register_style('load_fonts', plugin_dir_url(dirname(__FILE__)) . 'css/load_fonts.css');
        wp_enqueue_style('load_fonts');

        // Register files for later use
        wp_register_style('codemirror_css', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/lib/codemirror.css');
        wp_register_script('codemirror_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/lib/codemirror.js');
        wp_register_script('codemirror_hint', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/show-hint.js');
        wp_register_style('codemirror_hint_style', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/show-hint.css');
        wp_register_style('codemirror_search_style', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/matchesonscrollbar.css');
        wp_register_style('codemirror_dialog_style', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/dialog/dialog.css');
        wp_register_style('codemirrror_adv_dialog_css', plugin_dir_url(dirname(__FILE__)).'js/codemirror/addon/adv-dialog/dialog.css');
        wp_register_script('less_js', plugin_dir_url(dirname(__FILE__)) . 'js/less.js');
        wp_register_script('codemirror_mode_css', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/css/css.js');
        wp_register_script('codemirror_mode_php', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/php/php.js');
        wp_register_script('codemirror_mode_clike', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/clike/clike.js');
        wp_register_script('codemirror_mode_html', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/htmlmixed/htmlmixed.js');
        wp_register_script('codemirror_mode_xml', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/xml/xml.js');
        wp_register_script('codemirror_mode_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/mode/javascript/javascript.js');
        wp_register_script('codemirror_hint_css', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/css-hint.js');
        wp_register_script('codemirror_hint_html', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/html-hint.js');
        wp_register_script('codemirror_hint_xml', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/xml-hint.js');
        wp_register_script('codemirror_hint_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/hint/javascript-hint.js');
        wp_register_script('codemirror_dialog_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/dialog/dialog.js');
        wp_register_script('codemirror_scroll_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/scroll/annotatescrollbar.js');
        wp_register_script('codemirror_search_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/search.js');
        wp_register_script('codemirror_search_cursor_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/searchcursor.js');
        wp_register_script('codemirror_search_match_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/match-highlighter.js');
        wp_register_script('codemirror_search_matches_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/matchesonscrollbar.js');
        wp_register_script('codemirror_search_line_js', plugin_dir_url(dirname(__FILE__)) . 'js/codemirror/addon/search/jump-to-line.js');
        wp_register_script('codemirror_panel_js', plugin_dir_url(dirname(__FILE__)).'js/codemirror/addon/display/panel.js');
        wp_register_script('codemirror_adv_search_js', plugin_dir_url(dirname(__FILE__)).'js/codemirror/addon/adv-dialog/revised-search.js');
        wp_register_script('codemirror_adv_dialog_js', plugin_dir_url(dirname(__FILE__)).'js/codemirror/addon/adv-dialog/advanced-dialog.js');
        wp_register_script('wpse_velocity', plugin_dir_url(dirname(__FILE__)) . 'js/velocity.min.js');
        wp_register_script('wpse_waves', plugin_dir_url(dirname(__FILE__)) . 'js/waves.js');
        wp_register_script('wpse_tabs', plugin_dir_url(dirname(__FILE__)) . 'js/tabs.js');
        wp_register_script('wpse_qtip', plugin_dir_url(dirname(__FILE__)) . 'js/jquery.qtip.min.js');
        wp_register_script('admin_scripts', plugin_dir_url(dirname(__FILE__)) . 'js/admin_scripts.js');
        wp_deregister_script( 'quicktags' );
        wp_register_script('quicktags', plugin_dir_url(dirname(__FILE__)) . 'js/custom_quicktags.js');
        wp_localize_script('quicktags', 'quicktagsL10n', array(
            'closeAllOpenTags'      => __( 'Close all open tags', 'wp-smart-editor' ),
            'closeTags'             => __( 'close tags', 'wp-smart-editor' ),
            'enterURL'              => __( 'Enter the URL', 'wp-smart-editor' ),
            'enterImageURL'         => __( 'Enter the URL of the image', 'wp-smart-editor' ),
            'enterImageDescription' => __( 'Enter a description of the image', 'wp-smart-editor' ),
            'textdirection'         => __( 'text direction', 'wp-smart-editor' ),
            'toggleTextdirection'   => __( 'Toggle Editor Text Direction', 'wp-smart-editor' ),
            'dfw'                   => __( 'Distraction-free writing mode', 'wp-smart-editor' ),
            'strong'                => __( 'Bold', 'wp-smart-editor' ),
            'strongClose'           => __( 'Close bold tag', 'wp-smart-editor' ),
            'em'                    => __( 'Italic', 'wp-smart-editor' ),
            'emClose'               => __( 'Close italic tag', 'wp-smart-editor' ),
            'link'                  => __( 'Insert link', 'wp-smart-editor' ),
            'blockquote'            => __( 'Blockquote', 'wp-smart-editor' ),
            'blockquoteClose'       => __( 'Close blockquote tag', 'wp-smart-editor' ),
            'del'                   => __( 'Deleted text (strikethrough)', 'wp-smart-editor' ),
            'delClose'              => __( 'Close deleted text tag', 'wp-smart-editor' ),
            'ins'                   => __( 'Inserted text', 'wp-smart-editor' ),
            'insClose'              => __( 'Close inserted text tag', 'wp-smart-editor' ),
            'image'                 => __( 'Insert image', 'wp-smart-editor' ),
            'ul'                    => __( 'Bulleted list', 'wp-smart-editor' ),
            'ulClose'               => __( 'Close bulleted list tag', 'wp-smart-editor' ),
            'ol'                    => __( 'Numbered list', 'wp-smart-editor' ),
            'olClose'               => __( 'Close numbered list tag', 'wp-smart-editor' ),
            'li'                    => __( 'List item', 'wp-smart-editor' ),
            'liClose'               => __( 'Close list item tag', 'wp-smart-editor' ),
            'code'                  => __( 'Code', 'wp-smart-editor' ),
            'codeClose'             => __( 'Close code tag', 'wp-smart-editor' ),
            'more'                  => __( 'Insert Read More tag', 'wp-smart-editor' ),
        ) );
        wp_register_style('quirk', plugin_dir_url(dirname(__FILE__)).'css/quirk.css');
        wp_register_style('wpse_qtip_css', plugin_dir_url(dirname(__FILE__)).'css/jquery.qtip.css');
        wp_register_style('admin_styles', plugin_dir_url(dirname(__FILE__)) . 'css/admin_styles.css');

        wp_enqueue_style('codemirror_css');
        wp_enqueue_style('codemirror_hint_style');
        wp_enqueue_script('codemirror_js');
        wp_enqueue_script('codemirror_hint');

        // Load editor
        $current_screen = get_current_screen();
        $saved_config = get_option('wpse_config');
        global $file;
        $fileArr = explode('.', $file);
        $fileExt = end($fileArr);

        if ($saved_config['active_post_editor'] == 1) {
            if ($current_screen->base == 'post') {
                if ($current_screen->post_type == 'post' || $current_screen->post_type == 'page') {
                    wp_enqueue_style('codemirror_search_style');
                    wp_enqueue_style('codemirror_dialog_style');
                    wp_enqueue_style('codemirrror_adv_dialog_css');
                    wp_enqueue_style('wpse_qtip_css');
                    wp_enqueue_script('wpse_qtip');
                    wp_enqueue_script('codemirror_mode_xml');
                    wp_enqueue_script('codemirror_hint_xml');
//                wp_enqueue_script('codemirror_search_js');
                    wp_enqueue_script('codemirror_dialog_js');
                    wp_enqueue_script('codemirror_panel_js');
                    wp_enqueue_script('codemirror_adv_search_js');
                    wp_enqueue_script('codemirror_adv_dialog_js');
                    wp_enqueue_script('codemirror_scroll_js');
                    wp_enqueue_script('codemirror_search_cursor_js');
                    wp_enqueue_script('codemirror_search_match_js');
                    wp_enqueue_script('codemirror_search_matches_js');
                    wp_enqueue_script('codemirror_search_line_js');
                    wp_enqueue_script('post_js', plugin_dir_url(dirname(__FILE__)) . 'js/post_editor.js');
                    wp_localize_script('post_js', 'user', array('id' => get_current_user_id()));
                }
            }
        }

        if ($saved_config['active_file_editor'] == 1) {
            if ($current_screen->base == 'theme-editor' || $current_screen->base == 'plugin-editor') {
                switch ($fileExt) {
                    case 'php' :
                        wp_enqueue_script('codemirror_mode_clike');
                        wp_enqueue_script('codemirror_mode_php');
                        wp_enqueue_script('codemirror_mode_xml');
                        break;
                    case 'css' :
                        wp_enqueue_script('codemirror_mode_css');
                        wp_enqueue_script('codemirror_hint_css');
                        break;
                    case 'js' :
                        wp_enqueue_script('codemirror_mode_js');
                        wp_enqueue_script('codemirror_hint_js');
                        break;
                    case 'html' :
                        wp_enqueue_script('codemirror_mode_xml');
                        wp_enqueue_script('codemirror_hint_xml');
                        break;
                }
                wp_enqueue_script('theme_js', plugin_dir_url(dirname(__FILE__)) . 'js/theme_editor.js');
                wp_localize_script('theme_js', 'edt', array(
                    'modes' => $fileExt
                ));
            }
        }

        // Check if user can use WPFD or WPTM buttons
        if ($this->active_post_id) {
            $config_extra_btns = get_post_meta($this->active_post_id, 'active_extra_btns', true);
            if ($config_extra_btns['active_wpfdl'] != 1) {
                remove_action('media_buttons_context', 'wpfd_button');
                remove_menu_page('wpfd');
            }
            if ($config_extra_btns['active_wptml'] != 1) {
                remove_action('media_buttons_context', 'wptm_button');
                remove_menu_page('wptm');
            }
        } else {
            remove_action('media_buttons_context', 'wpfd_button');
            remove_action('media_buttons_context', 'wptm_button');
            remove_menu_page('wpfd');
            remove_menu_page('wptm');
        }
    }

    // Load styles for profile pages
    public function admin_css() {
        wp_enqueue_style('dashicons');
        wp_enqueue_style('quirk');
        wp_enqueue_style('admin_styles');
        wp_enqueue_style('wpse_qtip_css');
    }

    // Load JS for profile pages
    public function admin_js() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui');
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-sortable');

        wp_enqueue_script('wpse_velocity');
        wp_enqueue_script('wpse_waves');
        wp_enqueue_script('wpse_tabs');
        wp_enqueue_script('wpse_qtip');
        wp_enqueue_script('admin_scripts');
    }

    // Register new meta box
    public function wpse_meta_box() {
        remove_meta_box('authordiv', 'wpse_profiles', 'core');
        remove_meta_box('slugdiv', 'wpse_profiles', 'core');

        // Make WPSE profile only have one column layout
        function set_screen_layout_columns( $columns ) {
            $columns['wpse_profiles'] = 1;
            return $columns;
        }
        add_filter( 'screen_layout_columns', 'set_screen_layout_columns' );

        function set_screen_layout_wpse_profiles() {
            return 1;
        }
        add_filter( 'get_user_option_screen_layout_wpse_profiles', 'set_screen_layout_wpse_profiles' );

        add_meta_box(
            'wpse_meta_box',
            __('WP Smart Editor Profiles', 'wp-smart-editor'),
            array($this, 'wpse_profiles'),
            'wpse_profiles',
            'normal',
            'core'
        );
    }

    // Add sub menu
    public function wpse_sub_menu() {
        add_submenu_page(
            'edit.php?post_type=wpse_profiles',
            __('WPSE Configuration', 'wp-smart-editor'),
            __('Configuration', 'wp-smart-editor'),
            'activate_plugins',
            'wpse-config',
            array($this, 'wpse_configuration')
        );
        add_submenu_page(
            'admin.php?',
            __('Insert Button', 'wp-smart-editor'),
            __('Insert Button', 'wp-smart-editor'),
            'edit_posts',
            'wpse-button',
            array($this, 'wpse_insert_button_window')
        );
        add_submenu_page(
            'admin.php?',
            __('Insert Bullet', 'wp-smart-editor'),
            __('Insert Bullet', 'wp-smart-editor'),
            'edit_posts',
            'wpse-bullet',
            array($this, 'wpse_insert_bullet_window')
        );
        add_submenu_page(
            'admin.php?',
            __('Insert Columns', 'wp-smart-editor'),
            __('Insert Columns', 'wp-smart-editor'),
            'edit_posts',
            'wpse-columns',
            array($this, 'wpse_insert_column_window')
        );
    }

    // Display the content in WPSE profiles
    public function wpse_profiles() {
        include_once (plugin_dir_path(dirname(__FILE__)).'inc/wpse-profiles.php');
    }

    // Display the content for Configuration submenu
    public function wpse_configuration() {
        wp_enqueue_script('wpse_velocity');
        wp_enqueue_script('wpse_waves');
        wp_enqueue_script('wpse_tabs');
        wp_enqueue_script('wpse_qtip');

        wp_enqueue_script('less_js');
        wp_enqueue_script('codemirror_mode_css');
        wp_enqueue_style('codemirror_hint_css');
        wp_enqueue_style('quirk');
        wp_enqueue_style('wpse_qtip_css');

        wp_enqueue_style('admin_styles');
        wp_enqueue_script('config_js', plugin_dir_url(dirname(__FILE__)).'js/config_scripts.js');
        include_once (plugin_dir_path(dirname(__FILE__)).'inc/wpse-configuration.php');
    }

    // Display window to insert buttons for editor plugin
    public function wpse_insert_button_window() {
        include_once (plugin_dir_path(dirname(__FILE__)).'plugins/button/button.php');
    }

    // Display window to insert bullets for editor plugin
    public function wpse_insert_bullet_window() {
        include_once (plugin_dir_path(dirname(__FILE__)).'plugins/bulletedmanager/bulletmngr.php');
    }

    // Display window to insert columns for editor plugin
    public function wpse_insert_column_window() {
        include_once (plugin_dir_path(dirname(__FILE__)).'plugins/columns/columns.php');
    }

    // Method to save configuration settings
    public function save_settings(){
        if (isset($_POST['save_config'])) {
            if (!wp_verify_nonce($_POST['wpse_config_nonce_field'], 'wpse_config_nonce')) {
                return false;
            }

            if (isset($_POST['disable_autop'])) {
                $save_config['disable_autop'] = 1;
            } else {
                $save_config['disable_autop'] = 0;
            }

            if (isset($_POST['active_post_editor'])) {
                $save_config['active_post_editor'] = 1;
            } else {
                $save_config['active_post_editor'] = 0;
            }

            if (isset($_POST['active_file_editor'])) {
                $save_config['active_file_editor'] = 1;
            } else {
                $save_config['active_file_editor'] = 0;
            }
            update_option('wpse_config', $save_config);

            if (!empty($_REQUEST['_wp_http_referer'])) {
                wp_redirect($_REQUEST['_wp_http_referer'] . '&save=success#tabs-1');
                exit;
            }
        }

        if (isset($_POST['save_custom_styles'])) {
            if (!wp_verify_nonce($_POST['wpse_cstyles_nonce_field'], 'wpse_cstyles_nonce')) {
                return false;
            }
            // Save Custom Styles to a css file
            $get_custom_styles = get_option('wpse_custom_styles');
            if ($get_custom_styles != false) {
                $css_file = fopen(plugin_dir_path(dirname(__FILE__)). 'css/customstyles/custom_styles.css', 'w');
                $content = '';
                foreach ($get_custom_styles as $styles) {
                    $content .= "." . $styles['name'] . " {\n";
                    $content .= $styles['css'] . "\n} \n";
                }
                fwrite($css_file, $content);
                fclose($css_file);
            }

            if (!empty($_REQUEST['_wp_http_referer'])) {
                wp_redirect($_REQUEST['_wp_http_referer'] . '&save=success#tabs-2');
                exit;
            }
        }
    }

    public function tinymce_before_init($init) {
        if (!isset($init['valid_children'])) {
            $init['valid_children'] = '+body[style]';
        } else {
            $init['valid_children'] .= ',+body[style]';
        }

        if (!isset($init['custom_elements'])) {
            $init['custom_elements'] = 'style';
        } else {
            $init['custom_elements'] .= ',style';
        }

        if (!isset( $init['extended_valid_elements'])) {
            $init['extended_valid_elements'] = 'style[*],a[*]';
        } else {
            $init['extended_valid_elements'] .= ',style[*],a[*]';
        }

        $px_size = '6px 8px 9px 10px 11px 12px 13px 14px 15px 16px 18px 20px 22px 24px 28px 32px 48px 72px';
        if(isset($init['fontsize_formats'])) {
            $init['fontsize_formats'] = $init['fontsize_formats'].' '.$px_size;
        } else {
            $init['fontsize_formats'] = $px_size;
        }

        // Disable autop
        $saved_config = get_option('wpse_config');
        if ($saved_config['disable_autop'] == 1) {
            $init['wpautop'] = false;
            $init['indent'] = true;
        }

        return $init;
    }

    // Format content if disable wpautop
    public function disable_autop($content) {
        $saved_config = get_option('wpse_config');
        if ($saved_config['disable_autop'] == 1) {
            $content = str_replace( array('&amp;', '&lt;', '&gt;'), array('&', '<', '>'), $content );
            $content = wpautop( $content );
            $content = preg_replace( '/^<p>(https?:\/\/[^<> "]+?)<\/p>$/im', '$1', $content );
            $content = htmlspecialchars( $content, ENT_NOQUOTES, get_option( 'blog_charset' ) );
        }
        return $content;
    }

    // Setup WPSE editor
    public function wpse_tinymce() {
        // Add style for our editor
        add_editor_style(plugin_dir_url(dirname(__FILE__)) . 'css/custom_editor_style.css');

        // Load extra plugins
        add_filter('mce_external_plugins', array($this, 'wpse_tinymce_external'));

        $current_user = wp_get_current_user();
        $current_user_id = $current_user->ID;
        $current_user_role = $current_user->roles[0];

        // Get all ID of WPSE profiles
        $args = array( 'post_type' => 'wpse_profiles');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            $post_id = get_the_ID();
            $user_id_access = get_post_meta($post_id, 'users_access', true);
            $user_role_access = get_post_meta($post_id, 'roles_access', true);

            // Check which profiles that current user has permission to use and take that ID
            // the ID of the profiles published most recently will be taken
            if (is_array($user_role_access) && is_array($user_id_access)) {
                if (in_array($current_user_id, $user_id_access) || in_array($current_user_role, $user_role_access)) {
                    // Populate the ID
                    $this->active_post_id = get_the_ID();
                    $saved_buttons = get_post_meta($this->active_post_id, 'saved_buttons', true);
                    foreach ($saved_buttons as $toolbar => $button) {
                        if ($button != '') {
                            if ($toolbar == 'toolbar1') {
                                add_filter('mce_buttons', array($this, 'wpse_tinymce_add_toolbar_1'));
                            }
                            if ($toolbar == 'toolbar2') {
                                add_filter('mce_buttons_2', array($this, 'wpse_tinymce_add_toolbar_2'));
                            }
                            if ($toolbar == 'toolbar3') {
                                add_filter('mce_buttons_3', array($this, 'wpse_tinymce_add_toolbar_3'));
                            }
                            if ($toolbar == 'toolbar4') {
                                add_filter('mce_buttons_4', array($this, 'wpse_tinymce_add_toolbar_4'));
                            }
                        }
                    }
                    return;
                }
            }
        endwhile;
    }

    // Load data for Custom Styles button
    public function load_custom_styles_data() {
        add_editor_style(plugin_dir_url(dirname(__FILE__)) . 'css/customstyles/custom_styles.css');
        wp_enqueue_script('custom_styles_plg', plugin_dir_url(dirname(__FILE__)) . 'plugins/customstyles/data.js');
        $custom_styles_data = get_option('wpse_custom_styles');
        wp_localize_script('custom_styles_plg', 'cStyle', $custom_styles_data);
        wp_localize_script('custom_styles_plg', 'data', array(
            'pluginurl' => plugin_dir_url(dirname(__FILE__)),
            'confirmText' => __('Choose a single element pls!', 'wp-smart-editor')
        ));
    }

    // Register external buttons for TinyMCE
    public function wpse_tinymce_external($plgs) {

        $plgs['directionality'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/directionality/plugin.min.js';
        $plgs['anchor'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/anchor/plugin.min.js';
        $plgs['print'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/print/plugin.min.js';
        $plgs['preview'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/preview/plugin.min.js';
        $plgs['searchreplace'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/searchreplace/plugin.min.js';
        $plgs['visualblocks'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/visualblocks/plugin.min.js';
        $plgs['columns'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/columns/plugin.js';
        $plgs['summary'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/summary/plugin.js';
        $plgs['bulletmngr'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/bulletedmanager/plugin.js';
        $plgs['wpsebutton'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/button/plugin.js';
        $plgs['customstyles'] = plugin_dir_url(dirname(__FILE__)) . 'plugins/customstyles/plugin.js';

        return $plgs;
    }

    // WP Smart Editor buttons
    public function wpse_tinymce_add_toolbar_1($btns) {
        return $this->add_tinymce_toolbar($btns,'toolbar1');
    }

    public function wpse_tinymce_add_toolbar_2($btns) {
        return $this->add_tinymce_toolbar($btns,'toolbar2');
    }

    public function wpse_tinymce_add_toolbar_3($btns) {
        return $this->add_tinymce_toolbar($btns,'toolbar3');
    }

    public function wpse_tinymce_add_toolbar_4($btns) {
        return $this->add_tinymce_toolbar($btns,'toolbar4');
    }

    public function add_tinymce_toolbar($buttons, $toolbar_id) {
        if ($this->active_post_id) {
            $saved_buttons = get_post_meta($this->active_post_id, 'saved_buttons', true);
            $toolbar_buttons = $saved_buttons[$toolbar_id];
            $toolbar_buttons = explode(' ', $toolbar_buttons);
            if ($toolbar_id == 'toolbar1') {
                array_push($toolbar_buttons, 'wp_adv');
            }

            return $toolbar_buttons;
        } else { // If user does not have permission they will use the default buttons
            return $buttons;
        }
    }
}