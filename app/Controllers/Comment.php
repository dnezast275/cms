<?php

namespace App\Controllers;

class Comment extends BaseController
{

    public function addcomment()
    {
        if ($this->request->getVar('parent_comment') == NULL) {
            $data = [
                'slug_post'         => $this->request->getVar('slug_post'),
                'parent_comment'    => NULL,
                'comment'           => $this->request->getVar('message'),
                'author_comment'    => $this->request->getVar('name'),
                'liked'             => 5,
                'created_at'        => date('Y-m-d'),
            ];
            $this->commentModel->addComment($data);
            return redirect()->to('/post/' . $this->request->getVar('slug_post'));
        } else {
            $data = [
                'parent_comment'    => $this->request->getVar('parent_comment'),
                'comment'           => $this->request->getVar('message'),
                'author_comment'    => $this->request->getVar('name'),
                'liked'             => 5,
                'created_at'        => date('Y-m-d'),
            ];
            $this->commentModel->addChildComment($data);
            return redirect()->to('/post/' . $this->request->getVar('slug_post'));
        }
    }

    //--------------------------------------------------------------------

}
