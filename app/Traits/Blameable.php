<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait Blameable
{
    protected $createdByAttribute = 'created_by';

    public static function bootBlameable()
    {
        static::creating(function ($model) {
            if (!Auth::guest()){
                $model->{$model->createdByAttribute} = Auth::id();
            }
        });
    }
}
