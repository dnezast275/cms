<?php

namespace App\Controllers;

class Category extends BaseController
{
    public function index($slug = 'inovasi')
    {
        $postByCategory = $this->categoryModel->getByCategory($slug);


        $data = [
            'title'         => 'Category | dNezast',
            'allPost'       => $postByCategory,
            'category'      => $slug,
        ];

        return view('blog/category', $data);
    }

    //--------------------------------------------------------------------

}
