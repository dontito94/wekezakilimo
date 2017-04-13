<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Farmer extends Model
{
    use HasApiTokens,Notifiable;

    protected $fillable=['product_grow' ];


    public function user(){
        return $this->belongsTo(User::class);

    }
}
