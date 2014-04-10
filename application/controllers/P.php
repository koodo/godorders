<?php

class P extends CI_Controller {

    public function smReservation() {

        $name = $this->input->post('name', true);
        $qq = intval($this->input->post('qq', true));
        $address = $this->input->post('address', true);
        $phone = intval($this->input->post('phone', true));

        $this->load->database();

        $SQL = sprintf("INSERT INTO `reservation` (`name`,`qq`,`phone`,`address`) VALUES ('%s',%s,%s,'%s');", $name, $qq, $phone, $address);

        $query = $this->db->query($SQL);

        if ($query) {
            // send email
            $this->load->library('email');
            $this->load->library('parser');

            $data = array('name' => $name, 'qq' => $qq, 'address' => $address, 'phone' => $phone);
            $message = $this->parser->parse('i/reservation/reservation-tpl', $data, TRUE);

            $this->email->from('system@godorders.com', '天旨公司');
            #$this->email->to(array('koodo@qq.com', '550303850@qq.com'));
            $this->email->to(array('koodo@qq.com'));

            $this->email->subject('有一份网站建设预约申请');
            $this->email->message($message);

            $this->email->send();
            echo 1;
        } else {
            echo 0;
        }
    }

}