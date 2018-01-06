<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\P4D;
use App\Http\Requests;
use Input, Redirect;

class P4DDataController extends Controller
{

    public function p4d_dataForm(){
      return view('components.P4DDataForm');
    }

    public function p4ddata(){
      $p4d = P4D::all();
      return view('components.P4DData')
      ->with('services',$p4d);
    }

    public function p4d_dataSubmit(Request $request){
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 600);

      //return $request->all();

      $d4d = new P4D();
      if($request->input('obs_id')) $d4d->obs_id = $request->input('obs_id');
      if($request->input('country_code')) $d4d->country_code = $request->input('country_code');
      if($request->input('country')) $d4d->country = $request->input('country');
      if($request->input('date')) $d4d->date = $request->input('date');
      if($request->input('policy_title')) $d4d->policy_title = $request->input('policy_title');
      if($request->input('policy_instrument')) $d4d->policy_instrument = $request->input('policy_instrument');
      if($request->input('policy1')) $d4d->policy1 = $request->input('policy1');
      if($request->input('policy2')) $d4d->policy2 = $request->input('policy2');
      if($request->input('policy3')) $d4d->policy3 = $request->input('policy3');
      if($request->input('indicator_value')) $d4d->indicator_value = $request->input('indicator_value');
      if($request->input('gender_responsive')) $d4d->gender_responsive = $request->input('gender_responsive');
      if($request->input('main_area')) $d4d->main_area = $request->input('main_area');
      if($request->input('sector')) $d4d->sector = $request->input('sector');
      if($request->input('admin1')) $d4d->admin1 = $request->input('admin1');
      if($request->input('admin2')) $d4d->admin2 = $request->input('admin2');
      if($request->input('admin3')) $d4d->admin3 = $request->input('admin3');
      if($request->input('location')) $d4d->location = $request->input('location');
      if($request->input('latitude')) $d4d->latitude = $request->input('latitude');
      if($request->input('longitude')) $d4d->longitude = $request->input('longitude');
      if($request->input('source')) $d4d->source = $request->input('source');

      if($d4d->save())
      {
        return redirect(route('all.p4d'));
      }

    /*  if( $request->hasFile('file') ) {
          $imageName = $request->input('policy_title').'.'.$request->file->extension();

          $imageName = str_replace(' ', '_', $imageName);
          if($path = $request->file->move(public_path().'/cache_uploads/', $imageName)){
              $user->profile_picture = $imageName;

          if($d4d->save())
          {
            $destinationPath = '/uploads';
            $$imageName->move($destinationPath,$imageName);
            return redirect(route('all.p4d'));
          }
      }else {
        if($d4d->save())
        {
          return redirect(route('all.p4d'));
        }
      }*/
    }


}
