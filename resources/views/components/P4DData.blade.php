@extends('layouts.app_layout')

@section('content')

@include('layouts.header')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="background:#ffffff">
          <div class="box-header">
            <h3 class="box-title">P4D Data</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Sector</th>
                <th>Source</th>
                <th>Country</th>
              </tr>
              </thead>
              <tbody>
              @foreach($services as $service)
              <tr>
                <td><span class="label label-info">{{$service->created_at->format('M-d-Y')}}</span></td>
                <td>{{ $service->policy_title }}
                </td>
                <td>{{$service->sector}}</td>
                <td>
                  {{$service->source}}
                </td>
                <td>
                  {{$service->country}}
                </td>

              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Sector</th>
                <th>Source</th>
                <th>Country</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<script src="/includes/js/jquery-2.1.4.min.js"></script>
<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
@endsection
