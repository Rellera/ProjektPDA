<?php
		class Taxikary extends CI_Controller{
			public function index(){
				$data['title'] = 'Zoznam zamestnancov';
				$data['taxikary'] = $this->taxikary_model->get_texikary();

				$this->load->view('templates/header');
				$this->load->view('posts/index', $data);
				$this->load->view('templates/header');
			}
		}
