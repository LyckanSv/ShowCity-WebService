<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'id_article',
            'title',
            'description',
            'image_article',
            'score',
            'double',
            
        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            
        ];
}
