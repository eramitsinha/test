<?php
/* 
Plugin Name: Simple Contact Form 
Description: A basic contact form that saves name and email. 
Version: 1.0 
Author: Siva
*/ 

// Action Hook

function myfun()
{
	add_menu_page('Contact Form','Contact Form',4,'contact-form','abc');
	// add_menu_page('Page Title','Menu Title',4,'slug','functionName');
}
add_action('admin_menu','myfun');

function abc()
{
	echo "<h1>Contact Form Data</h1>";
	// Code to Display Data from contact_form table $wpdb->select()
}



// Automatically Create a table when plugin is activated
function scf_create_table() { 
global $wpdb; // This is WordPress’s database object 
// Table name will look like: wp_contact_form 
$table_name = $wpdb->prefix . 'contact_form'; 
// SQL code to create the table 
$sql = "CREATE TABLE $table_name ( 
id mediumint(9) NOT NULL AUTO_INCREMENT, 
name varchar(100) NOT NULL, 
        email varchar(100) NOT NULL, 
        created_at datetime DEFAULT CURRENT_TIMESTAMP, 
        PRIMARY KEY (id) 
    );"; 
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); 
    dbDelta($sql); // Creates or updates the table 
} 

function scf_display_form() { 
    global $wpdb; 
    $table_name = $wpdb->prefix . 'contact_form'; 
    $message = ''; // Blank message by default 
 
    //    Check if form is submitted 
    if (isset($_POST['scf_submit'])) { 
        $name  = sanitize_text_field($_POST['scf_name']); // Clean user input 
        $email = sanitize_email($_POST['scf_email']); 
 
        //    Check if both fields are filled 
        if (!empty($name) && !empty($email)) { 
 
            //    Insert data into table 
            $wpdb->insert($table_name, array( 
                'name'  => $name, 
                'email' => $email 
            )); 
 
            $message = "   Thank you, $name! Your details have been saved."; 
 
        } else { 
            $message = "    Please fill all fields."; 
        } 
    } 
 
    //    HTML form 
    ob_start(); // Start buffering output 
    ?> 
    <form method="post"> 
        <label>Name:</label><br> 
        <input type="text" name="scf_name" required><br><br> 
 
        <label>Email:</label><br> 
        <input type="email" name="scf_email" required><br><br> 
 
        <input type="submit" name="scf_submit" value="Submit"> 
    </form> 
 
    <p style="color:green;"><?php echo $message; ?></p> 
    <?php 
    return ob_get_clean(); // Return form HTML 
} 
 
// Register shortcode 
add_shortcode('simple_contact_form', 'scf_display_form');

// add_sho