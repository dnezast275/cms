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
            'category'      => $this->category,
        ];

        return view('blog/archive', $data);
    }

    //--------------------------------------------------------------------

}
