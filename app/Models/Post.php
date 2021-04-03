<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'cover_image', 'user_id', 'category'
    ];

    public function  user(){
        return $this->belongsTo('App\Models\User');
    }
}