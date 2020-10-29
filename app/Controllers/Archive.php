<?php

namespace App\Controllers;

class Archive extends BaseController
{
    public function index()
    {
        $allPost = $this->archiveModel->findAll();

        $data = [
            'title'         => 'Archive | dNezast',
            'allPost'       => $allPost,
        ];

        return view('blog/archive', $data);
    }

    //--------------------------------------------------------------------

}
