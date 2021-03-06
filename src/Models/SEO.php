<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    protected $table = 'seo';

    protected $fillable = ['title', 'keywords', 'description', 'link'];
}
