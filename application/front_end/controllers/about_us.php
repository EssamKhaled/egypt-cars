<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about_us extends CI_Controller {

    public function index()
    {
        $query = $this->db->get_where('about_us', array('default' => 1));
        $data['about_us'] = $query->result();

        $return['first_content'] = $this->load->view('about_us/index',$data,TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }    
}
