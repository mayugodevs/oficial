<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswersPost extends Model
{
    use HasFactory;
    protected $table = 'answers_posts';

    protected $fillable = [
        'user_id',
        'post_id',
        'answer',
        'estado',
    ];

    public function likes(){
        return $this -> morphMany(Like::class,'likeable');
    }
}
