<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model

        {

           protected $table = 'offers';

           protected $fillable = [

               'name','price','image','details','created_at','updated_at'

           ];
           protected $hidden = [

               'id','added_at','created_at'

           ];
        }
