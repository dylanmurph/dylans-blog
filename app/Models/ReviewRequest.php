<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'product_type',
        'product_brand',
        'product_name',
        'request_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
