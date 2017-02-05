<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
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
		$this->data['pagebody'] = 'justone';

		// build the last author, to pass on to our view
		$record = $this->quotes->get(6);	
		$this->data = array_merge($this->data, $record);		
		$this->render();
	}
}
