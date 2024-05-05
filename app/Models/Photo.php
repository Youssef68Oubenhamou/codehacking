<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    use HasFactory;

    protected $uploads = "/uploads/" ;

    protected $fillable = [

        "path"

    ] ;

    public function user() {

        return $this->hasOne(\App\Models\User::class) ;

    }

    public function getPathAttribute($photo) {

        return $this->uploads . $photo ;

    }

}
