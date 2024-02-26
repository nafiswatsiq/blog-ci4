<?php

namespace App\Models;

use CodeIgniter\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $allowedFields = ['title', 'slug', 'content', 'author', 'image'];
}