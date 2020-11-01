<?php

namespace App\Controllers;

class About extends BaseController
{

    public function index()
    {

        $data = [
            'title'        => 'About Us | dNezast',
            'category'     => $this->category,
        ];

        return view('blog/about', $data);
    }

    //--------------------------------------------------------------------

}
