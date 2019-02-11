<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class category extends Model{

    protected $fillable = [
        "name",
        "description"
    ];




    public function articles(){
        return $this->hasMany(Article::class);

    }

}
