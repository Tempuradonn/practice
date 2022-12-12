<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
// Categoryに対するリレーション

//「1対多」の関係なので単数系に
public function category()
{
    return $this->belongsTo(Category::class);
    
}
protected $fillable = [
    'title',
    'body',
    'category_id'
];
function getTaginateByLimit(int $limit_count=5)
{
    return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
}
}