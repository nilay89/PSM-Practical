<?php
	class previewModel extends CI_Model {
		public function __construct()
		{
			parent::__construct();
	
			$this->db_master = $this->load->database('default', TRUE);
	
		}	
		function insert($data, $table)
		{
			$this->db_master->insert($table, $data);
			return $this->db_master->insert_id();
		}

		function select($table,$extra='')
		{
			$sql = "select * from `" . $table . "`  ".$extra."";
			$query = $this->db_slave->query($sql);
			return $query->result();
		}
		public function fetchData($limit)
		{
	
			$query = "select * from  page_scrap_data";
			if($limit !=0){
				$query .=  $limit ;
			}
			$db = $this->load->database();
			$result = $this->db->query($query);
			return $result->result_array();
			
		}

		public function fetchDataCount()
		{
	
			$query = "select * from  page_scrap_data";
			$db = $this->load->database();
			$result = $this->db->query($query);
			return $result->num_rows();
			
		}
	
    }

?>