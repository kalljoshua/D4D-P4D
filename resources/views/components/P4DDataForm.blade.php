@extends('layouts.app_layout')

@section('content')

@include('layouts.header')

	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="grid-form1">
            <form action="{{route('P4DForm.submit')}}"
						method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
                <div class="tab-content">
                    <div class="tab-pane active col-md-12" role="tabpanel" id="step1">

                        <h2>Basic Form</h2>
													<div class="form-group col-md-12">
														<label for="exampleInputEmail1" class="col-sm-2">Obs ID</label>
														<input type="text" class="form-control" name="obs_id" placeholder="Obs Id">
													</div>
													<div class="form-group col-md-12">
														<label for="exampleInputPassword1">Policy Title</label>
														<input type="text" class="form-control" name="policy_title" placeholder="Policy Title">
													</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Policy Instrument</label>
													<input type="text" class="form-control" name="policy_instrument" placeholder="Policy Instrument">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Main Area</label>
													<input type="text" class="form-control" name="main_area" placeholder="Main Area">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Date</label>
													<input type="text" class="form-control" name="date" placeholder="Date">
												</div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Step 2</h3>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Policy 1</label>
													<input type="text" class="form-control" name="policy1" placeholder="Policy 1">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Policy 2</label>
													<input type="text" class="form-control" name="policy2" placeholder="Policy 2">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Policy 3</label>
													<input type="text" class="form-control" name="policy3" placeholder="Policy 3">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Sector</label>
													<input type="text" class="form-control" name="sector" placeholder="sector">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Gender Responsive</label>
													<select type="text" class="form-control" name="gender_responsive">
														<option value="1">YES</option>
														<option value="2">NO</option>
													</select>
												</div>
												
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>

												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Admin 1</label>
													<input type="text" class="form-control" name="admin1" placeholder="Admin 1">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Admin 2</label>
													<input type="text" class="form-control" name="admin2" placeholder="Admin 2">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Admin 3</label>
													<input type="text" class="form-control" name="admin3" placeholder="Admin 3">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Location</label>
													<input type="text" class="form-control" name="location" placeholder="Location">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Latitude</label>
													<input type="text" class="form-control" name="latitude" placeholder="Latitude">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Longitude</label>
													<input type="text" class="form-control" name="longitude" placeholder="Longitude">
												</div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>

												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">Country Code</label>
													<input type="text" class="form-control" name="country_code" placeholder="Country Code">
												</div>
                        <div class="form-group col-md-12">
													<label for="exampleInputPassword1">Country</label>
													<input type="text" class="form-control" name="country" placeholder="Country">
												</div>
                        <div class="form-group col-md-12">
													<label for="exampleInputPassword1">Source</label>
													<input type="text" class="form-control" name="source" placeholder="Source">
												</div>
												<div class="form-group col-md-12">
													<label for="exampleInputPassword1">File</label>
													<input type="file" class="form-control" name="uploaded">
												</div>
												<ul class="list-inline pull-right">
														<li>
																<button type="button" class="btn btn-warning prev-step">Previous
																</button>
														</li>
														<li>
																<button type="submit"
																				class="btn btn-primary btn-info-full next-step">Complete
																</button>
														</li>
												</ul>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </form>
          </div>
        </div>
    </section>
   </div>
  <script src="/includes/js/jquery-2.1.4.min.js"></script>
 <script>
   $(document).ready(function () {
       //Initialize tooltips
       $('.nav-tabs > li a[title]').tooltip();

       //Wizard
       $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

           var $target = $(e.target);

           if ($target.parent().hasClass('disabled')) {
               return false;
           }
       });

       $(".next-step").click(function (e) {

           var $active = $('.wizard .nav-tabs li.active');
           $active.next().removeClass('disabled');
           nextTab($active);

       });
       $(".prev-step").click(function (e) {

           var $active = $('.wizard .nav-tabs li.active');
           prevTab($active);

       });
   });

   function nextTab(elem) {
       $(elem).next().find('a[data-toggle="tab"]').click();
   }
   function prevTab(elem) {
       $(elem).prev().find('a[data-toggle="tab"]').click();
   }
 </script>
@endsection
