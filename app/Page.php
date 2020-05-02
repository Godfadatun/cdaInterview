<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Page extends Model
{
    use HasTrixRichText;

    protected $fillable = [
        'featured_image','title','heading','content','no_index','meta_title','meta_description'
    ];
}
