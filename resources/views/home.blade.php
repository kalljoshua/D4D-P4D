@extends('layouts.app_layout')

@section('content')

@include('layouts.header')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a> <i class="fa fa-angle-right"></i></li>
  </ol>
  <!--four-grids here-->
  <div class="four-grids">
    <div class="col-md-3 four-grid">
      <div class="four-agileits">
        <div class="icon"> <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
        </div>
        <div class="four-text">
          <h3>Total Users Registered</h3>
          <h4>0</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3 four-grid">
      <div class="four-agileinfo">
        <div class="icon"> <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
        </div>
        <div class="four-text">
          <h3>Total Policies</h3>
          <h4>0</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3 four-grid">
      <div class="four-w3ls">
        <div class="icon"> <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
        </div>
        <div class="four-text">
          <h3>Projects Analyzed</h3>
          <h4>0</h4>
        </div>
      </div>
    </div>
    <div class="col-md-3 four-grid">
      <div class="four-wthree">
        <div class="icon"> <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
        </div>
        <div class="four-text">
          <h3>Monthly Visitors</h3>
          <h4>0</h4>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!--//four-grids here-->

  <!--w3-agileits-pane-->
  <div class="w3-agileits-pane">
    <div class="col-sm-4 wthree-crd">
      <div class="card">
        <div class="card-body">
          <div class="widget widget-report-table"> <header class="widget-header m-b-15">
            </header>
            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
              <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                <h3>Indicators</h3>
              </div>
            </div>
            <div class="widget-body p-15">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $y = 1;?>
                  @foreach(App\Indicator::all() as $indicator)
                  <tr>
                    <td>{{$y}}</td>
                    <td>{{$indicator->name}} </td>
                    <td>{{$indicator->created_at}}</td>
                  </tr>
                  <?php $y++;?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 agile-info-stat" style="margin-bottom:10px;">
      <div class="stats-info stats-last widget-shadow">
        <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
          <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
            <h3>Sub-Indicators</h3>
          </div>
        </div>
        <table class="table stats-table ">
          <thead>
            <tr>
              <th>NO</th>
              <th>Sub-Indicator</th>
              <th>Indicator</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php $x = 1;?>
            @foreach(App\SubIndicator::all() as $sub_indicator)
            <tr>
              <th scope="row">{{$x}}</th>
              <td>{{$sub_indicator->name}}</td>
              <td><span class="label label-success">
                {{$sub_indicator->indicator->name}}</span></td>
              <td><h5>{{$sub_indicator->created_at}} <i class="fa fa-level-up"></i></h5></td>
            </tr>
            <?php $x++;?>
            @endforeach
          </tbody>
        </table>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!--//w3-agileits-pane-->

@endsection
