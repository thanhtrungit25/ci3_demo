<?php

class Site extends CI_Controller {

	function index() {
		echo 'This is index method';
	}

	function show() {
		$data['title'] = 'Home page';

		$this->load->view('site_header', $data);
		
		$this->load->view('site_nav');
		$this->load->view('content_home');

		$this->load->view('site_footer');
	}	

	function about() {
		$data['title'] = 'About page';

		$this->load->view('site_header', $data);

		$this->load->view('site_header');
		
		$this->load->view('site_nav');
		$this->load->view('content_about');

		$this->load->view('site_footer');
	}

	function getValue() {
		$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
		echo '<pre>';print_r($data['records']);die;
	}

	function insertOne() {
		$this->load->model('site_model');
		$newRow = array(
			'title' => 'Super man'
		);
		$this->site_model->insertOne($newRow);
		echo 'Insert new row to table site success';
	}
	function insertMany() {
		$this->load->model('site_model');
		$newRow = array(
			array(
				'title' => 'Iron man'
			),
			array(
				'title' => 'Captain america'
			)

		);
		$this->site_model->insertMany($newRow);
		echo 'Insert many rows to table site success';
	}
	
	function insert_one() {
		$this->load->model('site_model');
		$data = array(
			'title' => 'dragon ball'
		);
		$this->site_model->insert_one($data);
		echo 'insert one success';
	}
	function insert_many() {
		$this->load->model('site_model');
		$data = array(
			array('title' => 'khung long'),
			array('title' => 'rong')
		);
		$rows_inserted = $this->site_model->insert_many($data);
		echo 'insert many success. ' . ' Number rows inserted: ' . $rows_inserted;
	}

	function insert_helper() {
		$this->load->model('site_model');
		$this->site_model->insert_helper();
	}
	function update_helper() {
		$this->load->model('site_model');
		$this->site_model->update();
	}

}
