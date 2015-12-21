<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class top_cities extends CI_Controller {

    public function more()
    {
        $query = $this->db->get_where('top_cities', array('id' => $this->uri->segment(4), 'publish' => 1));
        $data['cities'] = $query->result();

        $return['first_content'] = $this->load->view('top_cities/more',$data,TRUE);
        $return['second_content'] = '';
        $this->load->view('mainlayout',$return);
    }    
}
