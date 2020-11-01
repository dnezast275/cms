<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title'        => 'Contact Us | dNezast',
            'category'     => $this->category,
        ];

        return view('blog/contact', $data);
    }

    //--------------------------------------------------------------------

}
