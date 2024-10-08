
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Robots extends CI_Controller {

    public function index() {
        // Define the content of the robots.txt file dynamically
        $content = "robots.txt generated by www.seoptimer.com\n";
        $content .= "User-agent: *\n";
        $content .= "Disallow: \n";
        $content .= "Disallow: /cgi-bin/\n";
        $content .= "Disallow: /uploads/\n";
        $content .= "Disallow: /assets/\n";
        $content .= "Disallow: /public/\n";
        $content .= "Sitemap: " . base_url("sitemap.xml") . "\n";

        $file_path = FCPATH . 'robots.txt';
        file_put_contents($file_path, $content);
        // $res = array("res" => "success", "msg" => "Sitemap updated successfully.");
        // Set the content type to text/plain and output the content
        // $this->output
        //      ->set_content_type('Content-Type: application/json')
        //      ->set_output($res);
        header('Content-Type: application/json');
        $res = array("res" => "success", "msg" => "Robot updated successfully.");
        echo json_encode($res);

             
    }
}
