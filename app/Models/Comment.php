<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'article_id',
        'content',
    ];

    // Mối quan hệ với bảng Article
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    // Mối quan hệ với bảng User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
