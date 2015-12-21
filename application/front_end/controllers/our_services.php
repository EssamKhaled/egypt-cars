<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class our_services extends CI_Controller {

    public function index()
    {
        $this->load->helper('text');
        
        $query = $this->db->get_where('our_service', array('publish' => 1));
        $data['services'] = $query->result();

        $return['first_content'] = $this->load->view('our_services/index',$data,TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }

    public function more()
    {
        $query = $this->db->get_where('our_service', array('id' => $this->uri->segment(3), 'publish' => 1));
        $data['services'] = $query->result();

        $return['first_content'] = $this->load->view('our_services/more',$data,TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }    
}
