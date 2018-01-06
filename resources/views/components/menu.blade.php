<!--/sidebar-menu-->
<div class="sidebar-menu"> <header class="logo1"> <a href="#" class="sidebar-icon">
<span class="fa fa-bars"></span> </a> </header>
<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
<div class="menu">
  <ul id="menu" >
    <li><a href="/home"><i class="fa fa-tachometer"></i> <span>HOME</span>
      <div class="clearfix"></div>
      </a></li>
    <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>SECTIONS</span>
      <span class="fa fa-angle-right" style="float: right"></span>
      <div class="clearfix"></div>
      </a>
      <ul>
        <li><a href="{{route('D4DForm')}}">D4D</a></li>
        <li><a href="{{route('P4DForm')}}">P4D</a></li>
      </ul>

    <li id="menu-academico" ><a href="charts.html"><i class="fa fa-bar-chart"></i><span>CHARTS</span>
      <div class="clearfix"></div>
      </a></li>
    <li><a href="tabels.html"><i class="fa fa-table"></i> <span>TABLES</span>
      <div class="clearfix"></div>
      </a></li>
    <li><a href="maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i>
      <span>MAPS</span>
      <div class="clearfix"></div>
      </a></li>
    <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>
      <span>Add Variables</span> <span class="fa fa-angle-right" style="float: right"></span>
      <div class="clearfix"></div>
      </a>
      <ul id="menu-academico-sub" >
        <li id="menu-academico-avaliacoes" >
          <a href="#" data-toggle="modal"
                  data-target="#indicator">Add Indicators</a></li>
        <li id="menu-academico-avaliacoes" >
          <a href="#" data-toggle="modal"
                  data-target="#sub_indicator">Add Sub Indicator</a></li>
        <li id="menu-academico-avaliacoes" >
          <a href="#" data-toggle="modal"
                  data-target="#policy">Add Policy</a></li>
      </ul>
    </li>
  </ul></li>
  </ul> </div>
</div>

<div class="modal fade" id="indicator">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('indicator.submit') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Indicator</h4>
                </div>
                <div class="modal-body col-md-12">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">Indicator Name</label>
                        <div class="input-icon">
                            <input name="name" class="form-control"
                                   placeholder="Add Indicator Name" type="text" required/>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-warning pull-left"
                            data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn-sm btn-primary">Submit Order</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="sub_indicator">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('sub-indicator.submit') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Sub-Indicator</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label">Sub-Indicator Name</label>
                      <input type="text" name="name" style="border-radius: 4px"
                      placeholder="Enter Sub-Indicator name"class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label">Category</label>
                      <select class="form-control" name="indicator_id" style="border-radius: 4px">
                        <option value="">Select Indicator</option>
                        @foreach(App\Indicator::all() as $indicator)
                          <option value="{{$indicator->id}}">{{$indicator->name}}</option>
                        @endforeach
                        </select>
                  </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-warning pull-left"
                            data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn-sm btn-primary">Submit Order</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="policy">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('policy.submit') }}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add New Policy</h4>
                </div>
                <div class="modal-body col-md-12">
                    <div class="form-group">
                        <div class="input-icon">
                            <input name="title" class="form-control"
                                   placeholder="Add your Policy Title" type="text" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <input name="file" class="form-control" type="file" required/>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-warning pull-left"
                            data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn-sm btn-primary">Submit Order</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
