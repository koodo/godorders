<?php

class reservation extends CI_Controller {
    public function index() {
        $this->load->view('i/reservation/i.php');
    }

    public function website(){
        $data = array();
        if(isset($_GET['from']) && $_GET['from'] == 1){
            $data['from'] = 1;
        } else $data['from'] = 0;
        $this->load->view('i/reservation/res_website.php',$data);
    }

    public function models(){
        $data = array();
        if(isset($_GET['from']) && $_GET['from'] == 1){
            $data['from'] = 1;
        } else $data['from'] = 0;
        $this->load->view('i/reservation/res_models.php',$data);
    }
}