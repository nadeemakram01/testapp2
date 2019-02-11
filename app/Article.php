<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $fillable = [
        "name",
        "body"
    ];


    public function category(){
        return $this->belongsTo(Category::class);

    }

}
