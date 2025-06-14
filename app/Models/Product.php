<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_name',
        'description',
        'cover_img',
        'notes',
        'is_topup',
        'ready_stock',
        'category_id',
        'is_deleted',
    ];

    protected $casts = [
        'is_topup' => 'boolean',
        'ready_stock' => 'boolean',
        'is_deleted' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
