<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'lavel',
        'link',
        'menu_id'

    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
