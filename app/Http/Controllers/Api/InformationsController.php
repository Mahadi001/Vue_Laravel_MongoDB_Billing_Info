<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Informations;
use Validator;

class InformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Informations::first();
        return response()->json($informations);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'email' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        }else{
            $information = new Informations;
            $information->fname = $request->fname;
            $information->lname = $request->lname;
            $information->username = $request->username;
            $information->email = $request->email;
            $information->address = $request->address;
            $information->country = $request->country;
            $information->state = $request->state;
            $information->zip = $request->zip;
            $information->save();

            return response()->json($information);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($_id)
    {
        $information = Informations::find($_id);
        return response()->json($information);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $_id)
    {
        $information = Informations::find($_id);
        $information->fname = $request->fname;
        $information->lname = $request->lname;
        $information->username = $request->username;
        $information->email = $request->email;
        $information->address = $request->address;
        $information->country = $request->country;
        $information->state = $request->state;
        $information->zip = $request->zip;
        $information->save();

        return response()->json($information);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($_id)
    {
        $information = Informations::find($_id);
        $information->delete();
        
        $response = array('response' => 'Item deleted', 'success' => true);
            return $response;
    }
}
