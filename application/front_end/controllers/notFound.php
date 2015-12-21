<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class NotFound extends CI_Controller {

    public function index() {
        
        $return['first_content'] = $this->load->view('404','',TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }

}
