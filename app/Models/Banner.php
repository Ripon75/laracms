<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'caption',
        'image_url',
        'banner_position_id',
        'status'
    ];

    public function position()
    {
        return $this->belongsTo(BannerPosition::class, 'banner_position_id');
    }
}
