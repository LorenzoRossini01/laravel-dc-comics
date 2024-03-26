<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ["title","image","price","series","sale_date","description"] ;

    public function getPrice(){
        return $this->price." $";
    }
}
