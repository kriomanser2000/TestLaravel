<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    //protected $fillable = ['summary', 'short_description', 'full_text'];
    protected $table = 'news';
    protected $fillable = ['header', 'short_text', 'article'];
}
