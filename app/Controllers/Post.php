<?php

namespace App\Controllers;

class Post extends BaseController
{

    public function index($slug)
    {
        $postData       = $this->postModel->getPost($slug);
        $postComment    = $this->commentModel->getCommentBySlug($slug);
        $breadCat       = $this->categoryModel->getCategoryBySlug($postData['category_slug']);

        $data = [
            'title'         => $postData['title'] . ' | dNezast',
            'breadcat'      => $breadCat['category_name'],
            'breadcumb'     => $postData['title'],
            'postData'      => $postData,
            'category'      => $this->category,
            'comment'       => $postComment,
        ];

        return view('blog/post', $data);
    }

    //--------------------------------------------------------------------

}
