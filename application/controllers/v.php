<?php

class V extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function model($id) {
        $id = (int) $id;
        $query = $this->db->query('SELECT * FROM models WHERE id = ' . $id . ';');
        $res = $query->result_array();
        $res = $res[0];
        $data['info'] = $res;
        $data['id'] = $id;
        $data['next_model'] = $this->_get_model_id($id, true);

        if ($data['next_model'])
            $data['next_model'] = $data['next_model'][0];
            #$this->smarty->assign('next_model', $next_model[0]);
        else $data['next_model'] = NULL;

        if ($res['distyle'] == 0) {
            $this->load->view('v/view_model',$data);
        } else {
            $this->load->view('v/view_model_h',$data);
        }
    }

    private function _get_model_id($curId, $isNext = true) {
        $curId = (int) addslashes($curId);
        $SQL = $isNext ? sprintf("SELECT `id`,`name` FROM models WHERE id > %s AND `show` = 1 LIMIT 1;", $curId) : sprintf("SELECT `id`,`name` FROM models WHERE id < %s AND `show` = 1 LIMIT 1;", $curId);
        $query = $this->db->query($SQL);
        return $query->result_array();
    }

}