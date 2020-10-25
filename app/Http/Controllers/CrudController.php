<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{

    public function __construct()
    {

    }


    public function create(){

        return view('offers.create');

    }

    public function store(OfferRequest $request){

//        //validate rules
//        $rules = $this->getRules();
//
//        //validate messages
//        $messages = $this->getMessage();
//        //validation with virtual messages
//        //$validator = Validator::make($request ->all(),$rules);
//
//        //virtual messages
//        $validator = Validator::make($request ->all(),$rules,$messages);

//        if ($validator -> fails()){
//            return redirect() ->back() ->withErrors($validator) ->withInputs($request ->all());
//        }
//        else{
            Offer::create([
                'name' => $request -> name,
                'price'=> $request -> price,
                'image'=> $request -> image,
                'details' => $request -> details,
            ]);
            return redirect() ->back() ->with(['success' => ' تمت الإضافة بنجاح']);

        }



//    }
//
//    protected function getRules(){
//      return  $rules =[
//            'name' => 'required|max:100|unique:offers,name',
//            'price' => 'required|numeric',
//            'image',
//            'details' => 'required|max:100',
//        ];
//    }
//    protected function getMessage(){
//        return $messages =[
//            'name.unique' => trans('messages.offer name unique'),
//            'name.required' => trans('messages.offer name required'),
//            'price.required' => trans('messages.offer price required'),
//            'details.required' => trans('messages.offer details required'),
//        ];
//    }

    public function offers(){

        return view('offersService');

    }

    public function update(){
        return view('offers.update');
    }
    public function getOffers(){

     return  Offer::get();
    }
}
