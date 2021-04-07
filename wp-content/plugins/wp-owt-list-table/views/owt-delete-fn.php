
<?php

    $post_detail = get_post($post_id);
    global $wpdb;
    
    $action = isset($_GET['action']) ? trim($_GET['action']) : "";
    //update
    
    $wpdb->delete($wpdb->posts,array(
        "id" => $post_id
    ));
    

?>
