<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $allowedFields = ['title', 'slug', 'category_slug', 'content', 'author', 'head_img', 'bg_img', 'md_img', 'created_at', 'updated_at', 'watched', 'liked', 'comment', 'active'];

    public function getPost($slug)
    {
        return $this->where(['slug' => $slug])->first();
    }
}
