<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		$record = $this->quotes->get(1);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] = 'justone';

		$this->render();
	}
	
	public function zzz()
	{
		$this->index();	
  	}

  	public function gimme($id)
  	{
  		$record = $this->quotes->get($id);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] = 'justone';

		$this->render();
  	}
}
