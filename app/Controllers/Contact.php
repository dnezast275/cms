<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title'        => 'Contact Us | dNezast',
        ];

        return view('blog/contact', $data);
    }

    //--------------------------------------------------------------------

}
