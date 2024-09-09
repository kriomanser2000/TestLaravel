<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_news', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'id_news');
    }
}
