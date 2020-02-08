<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function email_to_me()
    {
        $this->load->library('email');
        
    }
}