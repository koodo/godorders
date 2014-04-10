<?php

class I extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('smarty');
    }

    /**
     * @desc 模特页面
     */
    public function model() {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM models WHERE `show` = 1;');
        $data['model_list'] = $query->result_array();
        $this->load->view('i/model',$data);
    }

    public function about() {
        $this->load->view('i/about');
    }

    public function contact() {
        $this->load->view('i/contact');
    }

    public function website($in = false) {
        if($in) {
            if($in == "view_tpl.php"){
                // todo
                // /sources/w_tpl/1/
                $data = array();
                $data['id'] = intval($this->input->get('id', TRUE));
                $data['src'] = sprintf("/sources/w_tpl/%s/",$data['id']);
                
                $this->load->view('i/website/' . $in);
            }
            $this->load->view('i/website/' . $in);
        } else {
            $this->load->view('i/website');
        }
    }

    public function lawconsult() {
    		// 法律资询
        $this->load->view('i/lawconsult');
    }

}