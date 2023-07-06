<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function genre(){
        return $this->belongsTo(Genre::class,'genre_code','genre_code');
    }

    public function search($searchWord){
        return $this->where('title','like','%'.$searchWord.'%')
                    //->orWhere('author_name','like','%'.$searchWord.'%')
                    //->orWhere('ISBN','like','%'.$searchWord.'%')
                    //->orWhere('info','like','%'.$searchWord.'%')
                    ->get();
    }
    
    public function rentals(){
        return $this->hasMany(Rental::class);
    }
}


