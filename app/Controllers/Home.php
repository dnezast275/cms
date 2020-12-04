<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$postData = $this->postModel->findAll();
		$data = [
			'title'		=> 'dNezast',
			'category'	=> $this->category,
			'postData'	=> $postData,
		];

		return view('blog/index', $data);
	}

	//--------------------------------------------------------------------

}
