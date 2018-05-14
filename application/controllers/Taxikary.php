<?php
		class Taxikary extends CI_Controller{
			public function index(){
				$data['title'] = 'Zoznam zamestnancov';
				$data['taxikary'] = $this->taxikary_model->get_taxikary();


				$this->load->view('templates/header');
				$this->load->view('taxikary/index', $data);
				$this->load->view('templates/footer');

			}
		}
