<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $return['first_content'] = '';
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }
}
