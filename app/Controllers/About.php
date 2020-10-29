<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title'        => 'About Us | dNezast',
        ];

        return view('blog/about', $data);
    }

    //--------------------------------------------------------------------

}
