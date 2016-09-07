<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'text'];

    public function translations()
    {
    	return $this->hasMany(ArticleTranslation::class);
    }
}
