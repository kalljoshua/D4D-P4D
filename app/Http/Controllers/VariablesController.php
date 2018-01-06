<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicator;
use App\SubIndicator;
use Redirect;

class VariablesController extends Controller
{
    public function indicatorForm(){
      return view('components.new_indicator');
    }

    public function indicatorSubmit(Request $request){
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 600);

      $indicator = new Indicator();
      if($request->input('name')) $indicator->name = $request->input('name');
      if($indicator->save()){
        return redirect(route('home'));
      }
    }

    public function subIndicatorSubmit(Request $request){
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 600);

      $indicator = new SubIndicator();
      if($request->input('name')) $indicator->name = $request->input('name');
      if($request->input('indicator_id')) $indicator->indicator_id = $request->input('indicator_id');
      if($indicator->save()){
        return redirect(route('home'));
      }
    }

    public function policySubmit(){

    }
}
