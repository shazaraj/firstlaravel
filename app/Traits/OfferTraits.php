<?php

namespace App\Traits;

use PhpParser\Builder\Trait_;

        Trait OfferTraits{

             function saveImage($photo,$folder){
                $file= $photo -> getClientOriginalExtension();
                $file_name = time().'.'.$file ;
                $path = $folder;
                $photo -> move($path,$file_name);

                return $file_name;
            }
        }
