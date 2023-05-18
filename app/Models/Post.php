<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = 'id';

    protected $fillable = [
        'konten',
        'post_title',
        'slug',
        'post_subtitle',
        'sampul',
        'id_user'
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
