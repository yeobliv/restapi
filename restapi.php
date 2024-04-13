<?php
/**
 * This class library, part of the 'Interface' namespace, is designed to facilitate handling JSON data
 * in a web application context. It provides utilities to manage HTTP headers, output buffering,
 * and response generation, making it particularly suitable for AJAX requests or API integrations.
 *
 * The class 'RESTAPI' includes methods to flush output buffers, set HTTP content types, display data as JSON,
 * and terminate page execution effectively. These functionalities are essential for creating clean,
 * efficient server-side logic for web applications dealing with JSON data interchange.
 *
 * @package Interface
 * @class   RESTAPI
 * @author  Yehor Oblyvantsov
 * @version 1.0.0
 * @since   2024-04-12
 */
namespace Interface;

// Define a class 'RESTAPI' that contains methods for handling JSON data in a web context.
class RESTAPI
{
    // Method to clear the output buffer.
    // This is useful to prevent unwanted data from previous operations affecting the current output.
    public function buffer_flush()
    {
        ob_end_clean(); // Ends the current output buffer and cleans (erases) the output buffer content.
        // Note: ob_start() function is already pre-defined in Spider core file (spider.php)
        // and is not needed here, assuming it's called earlier in the execution.
    }

    // Method to set the HTTP Content-Type header. Default is 'application/json'.
    // This informs the client about the type of content being returned.
    public function set_header($content_type = "Content-Type: application/json")
    {
        // Sets the Content-Type header for the HTTP response to 'application/json' or a custom type if provided.
        header($content_type);
    }

    // Method to output the given data as a JSON string.
    // This is typically used to send a JSON response to an AJAX request or API call.
    public function display_data($data)
    {
        echo json_encode($data); // Encodes the specified data to a JSON string and outputs it.
    }

    // Method to terminate the execution of the script immediately.
    // This is used to stop the script after sending a response or when an error occurs.
    public function kill_page()
    {
        die; // Terminates the script execution immediately.
    }
}
