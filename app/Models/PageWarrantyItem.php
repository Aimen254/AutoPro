<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageWarrantyItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'banner',
        'status',
        'seo_title',
        'seo_meta_description'
    ];
}
