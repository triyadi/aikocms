<?php
class Home extends CI_Controller {

        public function view($page = 'home')
        {
			echo $page;
			$this->load->view('home');
        }
}