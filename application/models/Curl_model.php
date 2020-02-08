<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl_model extends CI_Model {

    public function get_artikel()
    {
        $url = 'https://jurnalismuda.com/wp-json/wp/v2/posts?author=1&per_page=3&_embed';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        $output = json_decode($output, true);
        curl_close($ch);

        return $output;
    }

    // public function get_feature_image($id)
    // {
    //     $url = 'https://jurnalismuda.com/wp-json/wp/v2/media?id='.$id;;
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $output = curl_exec($ch);
    //     $output = json_decode($output, true);
    //     curl_close($ch);

    //     return $output;
    // }
}