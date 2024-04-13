# Welcome to the RESTAPI plugin for Spider Web Engine JSON Data Handling! 🚀📊

> The RESTAPI plugin, part of the 'Interface' namespace, is tailored for developers aiming to streamline the process of managing JSON data within web applications. This Spider`s plugin enhances your server-side logic, making it perfect for AJAX requests and REST API integrations.

## Key Features:
- Full integration with Spider engine features, allowing you to flexibly manage the content displayed on the request page
- Lightweight: Due to easy integration into the environment, simple logic and elementary mechanism for encoding arrays into JSON format, the plugin has less than a hundred lines of code and only a few functions. 
- High-level: The plugin influences the behavior of the displayed page and can control the engine logic.

## Installation 📦
Copy the `restapi.php` file unzipped from the archive, go to the root section of the Spider project, then select folders `/private/plugins/interface` (create an `/interface` folder if necessary) and paste the copied file

## Usage Example 💻

Basic example with using all functions, to output array in JSON for REST API services. Using Spider Web Engine, this plugin can be used very easy:
```
use Interface\RESTAPI;

$api = new RESTAPI();
$api->set_header();
$data = ['name' => 'John', 'age' => 30];
$api->display_data($data);
$api->kill_page();
```

## Conclusion 🌟
This RESTAPI class library is a robust tool for PHP developers working with JSON data in web applications. Its straightforward methods facilitate the handling of HTTP headers, output buffering, JSON data output, and script termination, making it indispensable for efficient web development.
