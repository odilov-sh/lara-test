<?php

namespace App\Models;

use App\Observers\PostObserver;
use App\Traits\Blameable;
use App\Traits\SlugGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SlugGenerator;
    use Blameable;

    protected static function boot()
    {
        parent::boot();
        static::observe(PostObserver::class);
    }


}
