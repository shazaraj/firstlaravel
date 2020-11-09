<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

        class Video extends Model
        {
            protected $table = 'video';
            protected $fillable = [
                'video_name','viewer'
            ];
            public $timestamps = false;
        }
