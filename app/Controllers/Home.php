<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'title'		=> 'dNezast',
			'category'	=> $this->category,
		];

		return view('blog/index', $data);
	}

	//--------------------------------------------------------------------

}
