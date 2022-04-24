<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'like', 'user_id', 'status', 'image'];
    public function getDateCreatedAtAttribute()
    {
        return date_format(date_create($this->created_at), 'd-m-Y');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}