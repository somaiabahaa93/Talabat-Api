<?php

namespace App\Models;

use App\Models\Model\Rating;
use App\Models\Model\Restaurant;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 

{
    use HasApiTokens, HasFactory, Notifiable;

    

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

     
    
}





