<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'status', 'image', 'category_id', 'description', 'trailer', 'manufacturer', 'partNumber', 'color', 'cpu', 'chipset', 'ram', 'slotram', 'maxram', 'vga', 'hard_disk', 'security', 'screen', 'webcam', 'audio', 'wireless', 'ports', 'battery', 'size', 'weight', 'operating_system', 'accessory', 'price_old', 'price_new'];
    public function category_detail()
    {
        return $this->belongsTo(CategoryDetail::class, 'category_id', 'id');
    }
    public function scopeSearch($query)
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }
}