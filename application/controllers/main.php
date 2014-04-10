<?php

class main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
    }

    public function index() {
        /*if (FALSE === self::is_bot()) {
            $this->load->view('main_flash');
        } else {
            $this->load->view('main');
        }*/
        $this->load->view('main');
    }

    /*
    public function index() {
        if (FALSE === $this->input->cookie('flash_loaded', TRUE) && FALSE === self::is_bot()) {
            $cookie = array(
                'name' => 'flash_loaded',
                'value' => '1',
                'expire' => '86500',
                'domain' => '.godorders.com',
            );
            $this->input->set_cookie($cookie);

            $this->load->view('main_flash');
        } else {
            $this->load->view('main');
        }
    }
     * */

    public static function is_bot() {
        $botlist = array("Teoma", "alexa", "froogle", "Gigabot", "inktomi",
            "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory",
            "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot",
            "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp",
            "msnbot", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz",
            "Baiduspider", "Feedfetcher-Google", "TechnoratiSnoop", "Rankivabot",
            "Mediapartners-Google", "Sogou web spider", "WebAlta Crawler", "TweetmemeBot",
            "Butterfly", "Twitturls", "Me.dium", "Twiceler");
        foreach ($botlist as $bot) {
            if (strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
                return true;
        }
        return false;
    }

}