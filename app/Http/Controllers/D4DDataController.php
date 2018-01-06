<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\D4D;
use App\Http\Requests;

class D4DDataController extends Controller
{
    //
    public function d4d_dataForm(){
      return view('components.D4DDataForm');
    }

    public function d4ddata(){
      $p4d = D4D::all();
      return view('components.D4DData')
      ->with('services',$p4d);
    }

    public function d4d_dataSubmit(Request $request){
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 600);

      $d4d = new D4D();
      if($request->input('obs_id')) $d4d->obs_id = $request->input('obs_id');
      if($request->input('country_code')) $d4d->country_code = $request->input('country_code');
      if($request->input('country_name')) $d4d->country = $request->input('country_name');
      if($request->input('date')) $d4d->date = $request->input('date');
      if($request->input('month')) $d4d->month = $request->input('month');
      if($request->input('year')) $d4d->year = $request->input('year');
      if($request->input('indicator1')) $d4d->indicator1 = $request->input('indicator1');
      if($request->input('indicator2')) $d4d->indicator2 = $request->input('indicator2');
      if($request->input('indicator3')) $d4d->indicator3 = $request->input('indicator3');
      if($request->input('indicator_value')) $d4d->indicator_value = $request->input('indicator_value');
      if($request->input('gender_disa')) $d4d->gender_disa = $request->input('gender_disa');
      if($request->input('gender')) $d4d->gender = $request->input('gender');
      if($request->input('admin1')) $d4d->admin1 = $request->input('admin1');
      if($request->input('admin2')) $d4d->admin2 = $request->input('admin2');
      if($request->input('admin3')) $d4d->admin3 = $request->input('admin3');
      if($request->input('location')) $d4d->location = $request->input('location');
      if($request->input('latitude')) $d4d->latitude = $request->input('latitude');
      if($request->input('longitude')) $d4d->longitude = $request->input('longitude');
      if($request->input('source')) $d4d->source = $request->input('source');
      if($request->input('notes')) $d4d->notes = $request->input('notes');

      if($d4d->save())
      {
        return redirect(route('all.d4d'));
      }
      return $request->all();
    }
}
