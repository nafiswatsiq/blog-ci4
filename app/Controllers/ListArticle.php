<?php

namespace App\Controllers;

use App\Models\Article;

class ListArticle extends BaseController
{
    public function index()
    {
        $model = new Article();
        $data = [
            'articles' => $model->findAll(),
            // 'title' => 'Article List',
        ];

        return view('list-articles', $data);
    }
}