<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntitySeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'es_entity',
        'es_url',
    ];

    protected $table = 'entity_seo';
}
