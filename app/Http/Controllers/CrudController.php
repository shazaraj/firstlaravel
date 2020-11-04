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


    public function getOffers(){

        $offers = Offer::all(['id','name','price','details','image']);
//        $offers = Offer::all();
        return  view('offers.data', compact('offers'));
//        return $offers;
    }



    public function offers(){

        return view('offersService');

    }

    public function UpdateOffer(){

        $id = Offer::get(['id']);
        return view('offers.update',compact('id'));

    }
    public function edit($offer_id){

        // Offer::findOrFail($offer_id);
        $offer = Offer::find($offer_id);  // search in given table id only
        if (!$offer)
            return redirect()->back()->with(['error' => __('messages.offer not exist')]);

        $offer = Offer::select('id', 'name', 'details', 'price','image')->find($offer_id);

        return view('offers.update', compact('offer'));


    }

    public function delete($offer_id){


            //check if offer id exists

            $offer = Offer::find($offer_id);   // Offer::where('id','$offer_id') -> first();

            if (!$offer)
                return redirect()->back()->with(['error' => __('messages.offer not exist')]);

            $offer->delete();

            return redirect()
                ->back()
                ->with(['success' => __('messages.offer deleted successfully')]);

    }
}
