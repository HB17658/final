<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    public function emp(){
        return $this->belongsTo(Emp::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
