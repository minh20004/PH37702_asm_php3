<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'menu_id',
        'description',
    ];
    //moi quan he bang menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    // Mối quan hệ với bảng Article
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
