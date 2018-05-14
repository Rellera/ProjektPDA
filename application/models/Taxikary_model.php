<?php
		class  taxikary_model extends CI_Model{
			public function __construct(){
				$this->load->database();
			}
			public function get_taxikary($id= FALSE){
				if($id === FALSE){
					$query = $this->db->get('taxikary');
					return $query->result_array();
				}
				$query = $this->db->get_where('taxikary',array('id' => $id));
				return $query->row_array();

			}
		}
