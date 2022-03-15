<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->library("pagination");
		$this->load->model('previewModel');
		$this->load->helper('url');

	 
	  }
	
	
	public function index()
	{
		$data = array(
			'ogs' => [],
		);
		$this->load->view('home',$data);
	}

	public function urlPreview(){

		$url=$this->input->post('url');
		$data = array(
			'ogs' => [],
		);
	
		if(isset($url)){
			$doc = new DOMDocument();
			@$doc->loadHTML(file_get_contents($url));
			$res['title'] = $doc->getElementsByTagName('title')->item(0)?$doc->getElementsByTagName('title')->item(0)->nodeValue:'';
		
			foreach ($doc->getElementsByTagName('meta') as $m){
				$tag = $m->getAttribute('name') ?: $m->getAttribute('property');
				if(in_array($tag,['description','keywords']) || strpos($tag,'og:')===0) $res[str_replace('og:','',$tag)] = $m->getAttribute('content');
			}

			$data['ogs'] =  $res;
		}
		$this->load->view('home',$data);

	}

	function save(){
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'image' => $this->input->post('image'),
			'url' => $this->input->post('url'),
		);
		
		$insert = $this->previewModel->insert($data, 'page_scrap_data');
		
		if ($insert) {
			echo "<script>alert('Record Added Successfully')</script>";
			redirect(base_url() . "showPreview");

		} else {
			echo "<script>alert('Somthing Went Worng')</script>";
	
		}
	}

	function showPreview(){
		$this->load->library('pagination');
		$data = array(
			'ogs' => [],
		);
			$per_page = 5;
			$offset = $this->input->get('per_page');
			$balance = $this->input->get('balance');

			if (!$offset)
			$offset = 0;
			$config['total_rows'] = $this->previewModel->fetchDataCount();
			$config['per_page'] = $per_page;
			$config['cur_tag_open'] = '<li class="paginate_button page-item active"><a class="page-link" href="javascript: void(0);">';
			$config['cur_tag_close'] = '</a> </li>';
			$config['num_tag_open'] = '<li class="page-link">'; 
			$config['num_tag_close'] = '</li>';
			$config['next_link'] = '<li class="page-link" href="javascript: void(0);">Next</li>';
			$config['next_tag_open'] = '<li class="paginate_button page-item">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '<li class="page-link previous disabled" href="javascript: void(0);">Previous</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$config['first_link'] = '';
			$config['last_link'] = '';
			$config['num_links']=10;
			$config['uri_segment'] = 3;
			$config['page_query_string'] = TRUE;
			$config['base_url'] = 'http://localhost/Nilay/showPreview';

			$this->pagination->initialize($config);
			$data['paginglinks'] = $this->pagination->create_links();
			$limit = " limit {$per_page} offset {$offset} ";
			$data['showPreview'] = $this->previewModel->fetchData($limit);
			$data['title'] = 'MetaDetails';
			$data['content'] = 'home';
			$this->load->view('showPreview', $data);
	}
	
	
}
