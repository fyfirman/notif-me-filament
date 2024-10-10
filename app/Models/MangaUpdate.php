<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class MangaUpdate extends Model
{
    use HasUuids;

    protected $table = 'manga_updates';

    protected $fillable = [
        'name',
        'raw_url',
        'last_chapter',
        'last_checked_at',
        'negative_identifier',
        'chat_id',
    ];

    protected $casts = [
        'last_chapter' => 'integer',
        'last_checked_at' => 'datetime',
        'chat_id' => 'integer',
    ];
}