<?php
    /*
    Plugin Name: OWT List Table
    Plugin URI:
    Description: List Table Class
    Version: 1.0.0
    Author: Clobi Technologies
    Author URI: https://clobi.online/
    Text Domain: vclobi
    */

    add_action("admin_menu", "wpl_owt_list_table_menu");

    function wpl_owt_list_table_menu()
    {
        add_menu_page("OWT List Table", 'OWT List Table', "manage_options", "owt-list-table", "wpl_owt_list_table_fn");
    }

    function wpl_owt_list_table_fn()
    {   
        //print_r($action);die;
        $action = isset($_GET['action']) ? $_GET['action'] : "";


        if($action == "owt-edit"){
            $post_id = isset($_GET['post_id']) ? $_GET['post_id'] : "";

            ob_start();

            include plugin_dir_path(__FILE__). 'views/owt-edit-fn.php';

            $template = ob_get_contents();

            ob_end_clean();

            echo $template;

        }else if($action == "owt-delete"){
            //Eliminando elemento
            $post_id = isset($_GET['post_id']) ? $_GET['post_id'] : "";
        
            include plugin_dir_path(__FILE__). 'views/owt-delete-fn.php';

            //volviendo a renderizar lista
            ob_start();

            include plugin_dir_path(__FILE__). 'views/owt-table-list.php';

            $template = ob_get_contents();

            ob_end_clean();

            echo $template;
            
        }else{
            ob_start();

            include plugin_dir_path(__FILE__). 'views/owt-table-list.php';

            $template = ob_get_contents();

            ob_end_clean();

            echo $template;
        }
    }
