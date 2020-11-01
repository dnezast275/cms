<?php

namespace App\Controllers;

class Category extends BaseController
{
    public function index($slug)
    {

        $postByCategory = $this->categoryModel->getByCategory($slug);
        $breadcumb      = $this->categoryModel->getCategoryBySlug($slug);

        $data = [
            'title'         => 'Category | dNezast',
            'allPost'       => $postByCategory,
            'category'      => $this->category,
            'breadcumb'     => $breadcumb['category_name'],
        ];

        return view('blog/category', $data);
    }

    //--------------------------------------------------------------------

}
