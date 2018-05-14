<?php
/**
 * Created by PhpStorm.
 * User: berac
 * Date: 14-May-18
 * Time: 06:18 PM
 */
class pages extends CI_Controller{
	public function view($page ='home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
