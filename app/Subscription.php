<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'id_subscription',
            'subscriber_id',
            'author_id',
        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            
        ];
}
