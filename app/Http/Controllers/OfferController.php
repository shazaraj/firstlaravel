<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Traits\OfferTraits;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use OfferTraits;
    //
    public function create(){
        //view form to add
        return view('ajaxoffers.create');
    }

    public function store(Request $request){
        //save form into db using ajax

        $file_name = $this ->saveImage($request ->image,'images/offers');


        Offer::create([
            'name' => $request -> name,
            'price'=> $request -> price,
            'image'=> $file_name,
            'details' => $request -> details,
        ]);
        return redirect('offers/data')->with(['create' => ' تمت الإضافة بنجاح']);

    }
}
