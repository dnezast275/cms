<?php

namespace App\Controllers;

class Post extends BaseController
{

    public function index($slug = 'temuan-mutakhir-dari-karya-anak-bangsa')
    {
        $postData = $this->postModel->getPost($slug);

        $data = [
            'title'         => $postData['title'] . ' | dNezast',
            'breadcumb'     => 'Post',
            'postData'      => $postData,
            'category'    => $this->category,
        ];

        return view('blog/post', $data);
    }

    //--------------------------------------------------------------------

}
