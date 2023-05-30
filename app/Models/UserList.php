<?php

namespace App\Models;

use App\enums\ListStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => ListStatus::class,
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
