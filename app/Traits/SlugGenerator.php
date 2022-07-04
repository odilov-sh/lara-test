<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugGenerator
{

    protected $slugSource = 'title';

    protected $slugAttribute = 'slug';

    public static function bootSlugGenerator()
    {
        static::saving(function ($model) {
            $model->generateSlug();
        });
    }

    public function generateSlug()
    {
        $source = $this->{$this->slugSource};
        $slug = $this->generateSlugFromSource($source);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $this->{$this->slugAttribute} = $count ? "{$slug}-{$count}" : $slug;;
    }

    public function generateSlugFromSource(string $source): string
    {
        $source = strtr($source, [
           'Ҳ' => 'h',
        ]);
        return Str::slug($source);
    }

}
