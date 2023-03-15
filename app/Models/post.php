<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['icon',
                            'title',
                            'content',
                            'user_id'];
    
    function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
