<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'dNezast',
		];

		return view('blog/index', $data);
	}

	//--------------------------------------------------------------------

}
