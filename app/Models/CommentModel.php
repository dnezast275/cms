<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $allowedFields = ['slug_post', 'parent_comment', 'comment', 'author_comment', 'created_at'];

    public function getCommentBySlug($slug)
    {
        return $this->db->table('comment')->where(['slug_post' => $slug])->get()->getResultArray();
    }

    public function getChildComment($parentComment)
    {
        return $this->db->table('child_comment')->where(['parent_comment' => $parentComment])->get()->getResultArray();
    }
}
