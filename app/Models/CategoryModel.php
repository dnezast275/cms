<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $allowedFields = ['title', 'slug', 'category_slug', 'content', 'author', 'head_img', 'bg_img', 'md_img', 'created_at', 'updated_at', 'watched', 'liked', 'comment', 'active'];

    public function getByCategory($slug)
    {
        return $this->db->table('post')->where(['category_slug' => $slug])->get()->getResultArray();
    }

    public function getCategoryBySlug($slug)
    {
        return $this->db->table('category')->where(['category_slug' => $slug])->get()->getRowArray();
    }
}
