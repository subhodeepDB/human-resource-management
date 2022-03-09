<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRMS | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->

  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <body class="hold-transition login-page">
        @include('layouts.partials.header')
        @include('layouts.partials.sidebar')

        @yield('content')
        
        @include('layouts.partials.footer')
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>


<!-- Main row -->
<div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart"
                      style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Direct Chat</h3>

              <div class="card-tools">
                <span title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fas fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    I would love to.
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date float-right">2/28/2015</small>
                        </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Sarah Doe
                          <small class="contacts-list-date float-right">2/23/2015</small>
                        </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nadia Jolie
                          <small class="contacts-list-date float-right">2/20/2015</small>
                        </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nora S. Vans
                          <small class="contacts-list-date float-right">2/10/2015</small>
                        </span>
                        <span class="contacts-list-msg">Where is your new...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          John K.
                          <small class="contacts-list-date float-right">1/27/2015</small>
                        </span>
                        <span class="contacts-list-msg">Can I take a look at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Kenneth M.
                          <small class="contacts-list-date float-right">1/4/2015</small>
                        </span>
                        <span class="contacts-list-msg">Never mind I found...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contacts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->

          <!-- TO DO List -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                To Do List
              </h3>

              <div class="card-tools">
                <ul class="pagination pagination-sm">
                  <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                  <li class="page-item"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <ul class="todo-list" data-widget="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <!-- checkbox -->
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                    <label for="todoCheck1"></label>
                  </div>
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
                <li>
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                    <label for="todoCheck2"></label>
                  </div>
                  <span class="text">Make the theme responsive</span>
                  <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
                <li>
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                    <label for="todoCheck3"></label>
                  </div>
                  <span class="text">Let theme shine like a star</span>
                  <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
                <li>
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                    <label for="todoCheck4"></label>
                  </div>
                  <span class="text">Let theme shine like a star</span>
                  <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
                <li>
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                    <label for="todoCheck5"></label>
                  </div>
                  <span class="text">Check your messages and notifications</span>
                  <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
                <li>
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo6" id="todoCheck6">
                    <label for="todoCheck6"></label>
                  </div>
                  <span class="text">Let theme shine like a star</span>
                  <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map card -->
          <div class="card bg-gradient-primary">
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Visitors
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                  <i class="far fa-calendar-alt"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <div id="sparkline-1"></div>
                  <div class="text-white">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-2"></div>
                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="text-white">Sales</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

          <!-- solid sales graph -->
          <div class="card bg-gradient-info">
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Sales Graph
              </h3>

              <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                          data-fgColor="#39CCCC">

                  <div class="text-white">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                          data-fgColor="#39CCCC">

                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                          data-fgColor="#39CCCC">

                  <div class="text-white">In-Store</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

          <!-- Calendar -->
          <div class="card bg-gradient-success">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->



===== Employees List ====


<table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Employee ID</th>
            {{-- <th>Skills</th> --}}
            {{-- <th>Date of joining</th> --}}
            {{-- <th>Date of birth</th> --}}
            {{-- <th>Date of conf.</th> --}}
            <th>Contact Number</th>
            {{-- <th>Alternetive Number</th> --}}
            {{-- <th>Personal Email</th> --}}
            <th>Official Email</th>
            {{-- <th>Present Address</th> --}}
            {{-- <th>Permanent Address</th> --}}
            {{-- <th>Name of Guardian</th> --}}
            {{-- <th>Emergency Number</th> --}}
            {{-- <th>Marital Status</th> --}}
            {{-- <th>Pan Number</th> --}}
            {{-- <th>Aadher Number</th> --}}
            {{-- <th>Status</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td style="text-align: center; vertical-align: middle;">Abhishek Das</td>
            <td style="text-align: center; vertical-align: middle;">HR Manager</td>
            <td style="text-align: center; vertical-align: middle;">MM852-18</td>
            {{-- <td style="text-align: center; vertical-align: middle;">
                <span class="badge badge-skills">HR</span><span class="badge badge-skills">Recruitment</span>
            </td>
            <td style="text-align: center; vertical-align: middle;" data-order="19-11-2018">19-11-2018</td>
            <td style="text-align: center; vertical-align: middle;" data-order="25-04-1988">25-04-1988</td>
            <td style="text-align: center; vertical-align: middle;" data-order="15-05-2019">15-05-2019</td> --}}
            <td style="text-align: center; vertical-align: middle;">9883500099</td>
            {{-- <td style="text-align: center; vertical-align: middle;">8240944300</td>
            <td style="text-align: center; vertical-align: middle;">abhishekdas257@gmail.com</td>
            <td style="text-align: center; vertical-align: middle;">abhishek.das@maxmobility.in</td>
            <td style="text-align: center; vertical-align: middle;">Flat No. - 6ZZ, 5th Floor, Block - K, SD Tower, Prafulla Kanan, Kolkata - 700101, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">E - 6/22, Milon Pally, Kururia Danga, P.O. - Amrai, Durgapur - 713203, Burdwan, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td>
            <td style="text-align: center; vertical-align: middle;">8927006871 (Wife)</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td> --}}
            <!-- <td style="text-align: center; vertical-align: middle;">Adita Das</td> -->
            {{-- <td style="text-align: center; vertical-align: middle;">Married</td> --}}
            {{-- <td style="text-align: center; vertical-align: middle;">ASBPD3558P</td> --}}
            <td style="text-align: center; vertical-align: middle;">nutan.panda@maxmob.com</td>
            <td style="text-align: center; vertical-align: middle;">
                <div class="table-data-feature">
                    <a href="javascript:void(0);" class="item padding-left-custom emp_status" data-employee=15 data-id="187" title="Change Status">
                        <i class="fas fa-clock" style="padding: 0 5px; color: #777;"></i>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            <td style="text-align: center; vertical-align: middle;">Rakhi DasGupoa</td>
            <td style="text-align: center; vertical-align: middle;">HR Manager</td>
            <td style="text-align: center; vertical-align: middle;">MM852-18</td>
            {{-- <td style="text-align: center; vertical-align: middle;">
                <span class="badge badge-skills">HR</span><span class="badge badge-skills">Recruitment</span>
            </td>
            <td style="text-align: center; vertical-align: middle;" data-order="19-11-2018">19-11-2018</td>
            <td style="text-align: center; vertical-align: middle;" data-order="25-04-1988">25-04-1988</td>
            <td style="text-align: center; vertical-align: middle;" data-order="15-05-2019">15-05-2019</td>
            <td style="text-align: center; vertical-align: middle;">9883500099</td> --}}
            <td style="text-align: center; vertical-align: middle;">8240944300</td>
            {{-- <td style="text-align: center; vertical-align: middle;">abhishek.das@maxmobility.in</td>
            <td style="text-align: center; vertical-align: middle;">Flat No. - 6ZZ, 5th Floor, Block - K, SD Tower, Prafulla Kanan, Kolkata - 700101, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">E - 6/22, Milon Pally, Kururia Danga, P.O. - Amrai, Durgapur - 713203, Burdwan, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td>
            <td style="text-align: center; vertical-align: middle;">8927006871 (Wife)</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td>
            <!-- <td style="text-align: center; vertical-align: middle;">Adita Das</td> -->
            <td style="text-align: center; vertical-align: middle;">Married</td>
            <td style="text-align: center; vertical-align: middle;">ASBPD3558P</td>
            <td style="text-align: center; vertical-align: middle;">512991955556</td> --}}
            <td style="text-align: center; vertical-align: middle;">abhishekdas257@gmail.com</td>
            <td style="text-align: center; vertical-align: middle;">
                <div class="table-data-feature">
                    <a href="javascript:void(0);" class="item padding-left-custom emp_status" data-employee=15 data-id="187" title="Change Status">
                        <i class="fas fa-clock" style="padding: 0 5px; color: #777;"></i>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            {{-- <td style="text-align: center; vertical-align: middle;">
                <div class="table-data-feature">
                    <a href="javascript:void(0);" class="item padding-left-custom emp_status" data-employee=15 data-id="187" title="Change Status">
                        <i class="fas fa-clock" style="padding: 0 5px; color: #777;"></i>
                    </a>
                </div>
            </td> --}}
            <td style="text-align: center; vertical-align: middle;">Abhishek Das</td>
            <td style="text-align: center; vertical-align: middle;">HR Manager</td>
            <td style="text-align: center; vertical-align: middle;">MM852-18</td>
            {{-- <td style="text-align: center; vertical-align: middle;">
                <span class="badge badge-skills">HR</span><span class="badge badge-skills">Recruitment</span>
            </td>
            <td style="text-align: center; vertical-align: middle;" data-order="19-11-2018">19-11-2018</td>
            <td style="text-align: center; vertical-align: middle;" data-order="25-04-1988">25-04-1988</td>
            <td style="text-align: center; vertical-align: middle;" data-order="15-05-2019">15-05-2019</td> --}}
            <td style="text-align: center; vertical-align: middle;">9883500099</td>
            {{-- <td style="text-align: center; vertical-align: middle;">8240944300</td>
            <td style="text-align: center; vertical-align: middle;">abhishekdas257@gmail.com</td>
            
            <td style="text-align: center; vertical-align: middle;">Flat No. - 6ZZ, 5th Floor, Block - K, SD Tower, Prafulla Kanan, Kolkata - 700101, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">E - 6/22, Milon Pally, Kururia Danga, P.O. - Amrai, Durgapur - 713203, Burdwan, West Bengal</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td>
            <td style="text-align: center; vertical-align: middle;">8927006871 (Wife)</td>
            <td style="text-align: center; vertical-align: middle;">Ajoy Krishna Das</td>
            <!-- <td style="text-align: center; vertical-align: middle;">Adita Das</td> -->
            <td style="text-align: center; vertical-align: middle;">Married</td>
            <td style="text-align: center; vertical-align: middle;">ASBPD3558P</td>
            <td style="text-align: center; vertical-align: middle;">512991955556</td> --}}
            <td style="text-align: center; vertical-align: middle;">abhishek.das@maxmobility.in</td>
            <td style="text-align: center; vertical-align: middle;">
                <div class="table-data-feature">
                    <a href="javascript:void(0);" class="item padding-left-custom emp_status" data-employee=15 data-id="187" title="Change Status">
                        <i class="fas fa-clock" style="padding: 0 5px; color: #777;"></i>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Employee</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select 2 Plugin -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/select2/css/select2.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/datatables/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/datatables/buttons.dataTables.min.css" />
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!---------for the use of multiple selection date:31/dec/2020-------->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
  <!---------for the use of multiple selection date:31/dec/2020-------->
  <!-- Toster CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- HRMS Custom CSS Created 18-01-2021 for apply manual styles -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/hrms_custom.css">

  <!-- HRMS Custom Responsive CSS Created 09-04-2021 for apply more advance styles -->
  <link rel="stylesheet" href="https://hrms.maxmobility.in/admin/assets/custom_hrms_advance.css">
  
  <!-- jQuery -->
  <script src="https://hrms.maxmobility.in/admin/assets/plugins/jquery/jquery.min.js"></script>
  <script> var perpage=10; var base_url='https://hrms.maxmobility.in'; </script>
</head>
<style type="text/css">
  .badge-notification { color: #fdfdfd; background-color: #dc3545; font-size: 10px !important; font-weight: 800 !important; }

  /*---- For Logo Added By Soubhik Bhattacharjee 08-04-2021 16:03 PM ----*/
  .brand-image.img-circle{ display: none; }
  .sidebar-collapse .brand-image.img-circle{ display: block !important; box-shadow: none !important; }
  .sidebar-collapse .brand-image{ display: none; }
  .hrms-dashboard .main-footer{
        position: fixed;
    left: 0!important;
}
</style>

<!-- On load this page add class in body by default.(Hide Sidebar By default for all page) -->
<script type="text/javascript">
  $(document).ready(function(){
    /*---- Dynamic Image Script Start ----*/
    $('body').addClass('sidebar-collapse');
  });
</script>
<body class="hold-transition sidebar-mini layout-fixed ">
 <div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" id="hrms-coppaps-checker"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://hrms.maxmobility.in" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none  d-sm-inline-block">
        <a href="#" class="nav-link"> Contact </a>
      </li> -->
    </ul>

    <!-- SEARCH  FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
        <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="far fa-bell" style="font-size: 17px;"></i>
          <span class="badge badge-notification navbar-badge" style="right: 6px; top: 6px;">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
                                                                            <a href="https://hrms.maxmobility.in/requisition?req_no=MM-0222-103" class="dropdown-item"> Requisition Number : MM-0222-103 </a>
                  <span class="badge badge-success" style="margin-left: 18px;"> Interview Done </span>
                                                                                                <div class="dropdown-divider"></div>
                                                                <a href="https://hrms.maxmobility.in/requisition?req_no=MM-1221-69" class="dropdown-item"> Requisition Number : MM-1221-69 </a>
                  <span class="badge badge-info" style="margin-left: 18px;"> Schedule Interview </span>
                                                                                                                <div class="dropdown-divider"></div>
                                                                                <a href="https://hrms.maxmobility.in/requisition?req_no=MM-0222-102" class="dropdown-item"> Requisition Number : MM-0222-102 </a>
                  <span class="badge badge-success" style="margin-left: 18px;"> Interview Done </span>
                                                                                                <div class="dropdown-divider"></div>
                          <a href="https://hrms.maxmobility.in/requisition" class="dropdown-item dropdown-footer"> See All </a>
                          <!-- <a href="#" class="dropdown-item"> No Notifications </a><div class="dropdown-divider"></div> -->
                    </div>
      </li>

      <li class="nav-item dropdown" style="margin-right: 4px;">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Human Resource          <!-- <i class="far fa-bell"></i> -->
          <!-- <i class="fas fa-angle-down"></i> -->
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="drop_user_name">
              <div class="user_icon_div">
                <h4>H</h4>
              </div>
             <span class="dropdown-item dropdown-header">
              <h6>Human Resource</h6>
              admin@gmail.com             </span>
          </div>
          
          <div class="dropdown-divider"></div>
          <a href="https://hrms.maxmobility.in/change-password" class="dropdown-item">
            <i class="fas fa-cogs"></i> Change Password
            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="https://hrms.maxmobility.in/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
          </a>
        </div>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  
  <!-- Main Sidebar Container  -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div style="background:#fff; width:100%" align="center">
    <a href="https://hrms.maxmobility.in" align="center" style="display: block;">
      <img src="https://hrms.maxmobility.in/admin/assets/max-logo-sidebar.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" id="collapsed-logo" style="opacity: 1; width: 50px; display: none;    margin-left: 6px;">
      <img src="https://hrms.maxmobility.in/admin/assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" id="non-collapsed-logo" style="opacity: .8">
      <!-- <span class="brand-text font-weight-light">HRMS</span> -->
    </a>
  </div>
    <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="user_icon_div sidebar_user_icon">
        <h4>H</h4>
        <!-- <img src="" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="https://hrms.maxmobility.in/profile" class="d-block">
          Human Resource        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="https://hrms.maxmobility.in" class="nav-link " title="Dashboard">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard </p>
          </a>
        </li>
        
                <li class="nav-item has-treeview">
          <!-- <a href="#" class="nav-link"> -->
          <a href="https://hrms.maxmobility.in/requisition" class="nav-link " title="Requisition">
            <i class="fas fa-layer-group" style="padding: 4px; padding-right: 10px;"></i>
            <p> Requisition ( 9 ) </p>
          </a>
          <!--  -->
        </li>
        
                <li class="nav-item has-treeview">
          <!-- <a href="#" class="nav-link"> -->
          <a href="https://hrms.maxmobility.in/resource-list" class="nav-link " title="Candidate">
            <i class="fas fa-street-view" style="padding: 4px; padding-right: 10px;"></i>
            <p> Candidate </p>
          </a>
        </li>
        
                <li class="nav-item has-treeview">
          <!-- <a href="#" class="nav-link"> -->
          <a href="https://hrms.maxmobility.in/interview" class="nav-link " title="Interview Schedule">
            <i class="far fa-comments" style="padding: 4px; padding-right: 9px;"></i>
            <p> Interview Schedule </p>
          </a>
        </li>
            

                <li class="nav-item has-treeview">
          <a href="https://hrms.maxmobility.in/employees" class="nav-link active" title="Employees">
            <i class="nav-icon far fas fa-user" style="padding: 4px; padding-right: 11px;"></i>
            <p> Employees </p>
          </a>
        </li>
                
        <!--           <li class="nav-item"> 
            <a href="https://hrms.maxmobility.in/leave-status/0" class="hrms-nav-img nav-link " title="leave">
              <img src="https://hrms.maxmobility.in/admin/assets/img/leave_icons/leave-icon-white.png" class="menu_icon nav-icon white_img">
              <img src="https://hrms.maxmobility.in/admin/assets/img/leave_icons/leave-icon-black.png" class="menu_icon nav-icon black_img">
              <p>Leave Status</p>
            </a>
          </li>
         -->

                <li class="nav-item has-treeview">
          <a href="https://hrms.maxmobility.in/freelancer" class="nav-link " title="Freelancer">
            <i class="fas fa-user-graduate" style="padding: 4px; padding-right: 10px;"></i>
            <p> Freelancer </p>
          </a>
        </li>
                
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link " title="Reports">
              <i class="fas fa-paste" style="padding: 4px; padding-right: 10px;"></i>
              <p> 
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display : ">
              <li class="nav-item">
                <a href="https://hrms.maxmobility.in/recruitment-cumulative" class="nav-link " title="Recruitment">
                  <i class="fas fa-clipboard-list nav-icon"></i> 
                  <p>Recruitment</p>
                </a>
              </li>
              
              <li class="nav-item"> 
                <a href="https://hrms.maxmobility.in/attendance-report-monthly?month=02" class="hrms-nav-img nav-link " title="Attendance">
                  <i class="fas fa-award nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="https://hrms.maxmobility.in/show-joinings" class="hrms-nav-img nav-link " title="Joining">
                  <!-- <i class="fas fa-award nav-icon"></i> -->
                  <img src="https://hrms.maxmobility.in/admin/assets/img/joining_icons/joining-white.png" class="menu_icon nav-icon white_img">
                  <img src="https://hrms.maxmobility.in/admin/assets/img/joining_icons/joining-black.png" class="menu_icon nav-icon black_img">
                  <p>Joining</p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="https://hrms.maxmobility.in/employee-leave-details?month=02" class="hrms-nav-img nav-link " title="leave">
                  <!-- <i class="fas fa-award nav-icon"></i> -->
                  <img src="https://hrms.maxmobility.in/admin/assets/img/leave_icons/leave-icon-white.png" class="menu_icon nav-icon white_img">
                  <img src="https://hrms.maxmobility.in/admin/assets/img/leave_icons/leave-icon-black.png" class="menu_icon nav-icon black_img">
                  <p>Leave Balance</p>
                </a>
              </li>
            </ul>
          </li>
        
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link " title="Masters">
              <i class="fas fa-bookmark" style="padding: 4px; padding-right: 10px;"></i>
              <p> 
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display : ">
                              <li class="nav-item has-treeview">
                  <a href="https://hrms.maxmobility.in/designation-list" class="hrms-nav-img nav-link " title="Designation">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <!-- <i class="fas fa-id-card-alt nav-icon"></i> -->
                    <img src="https://hrms.maxmobility.in/admin/assets/img/designation.png" class="menu_icon nav-icon white_img">
                    <img src="https://hrms.maxmobility.in/admin/assets/img/designation_2.png" class="menu_icon nav-icon black_img">
                    <!-- <i class="fas fa-pencil-ruler" style="padding: 4px; padding-right: 10px;"></i> -->
                    <p> Designation </p>
                  </a>
                </li>
              
                              <li class="nav-item has-treeview">
                  <a href="https://hrms.maxmobility.in/position-list" class="hrms-nav-img nav-link " title="Position">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <!-- <i class="far fa-id-card nav-icon"></i> -->
                    <!-- <i class="fas fa-parking nav-icon"></i> -->
                    <img src="https://hrms.maxmobility.in/admin/assets/img/position_icn.png" class="menu_icon nav-icon white_img">
                    <img src="https://hrms.maxmobility.in/admin/assets/img/position_icn_2.png" class="menu_icon nav-icon black_img">
                    <p> Position </p>
                  </a>
                </li>
              
                              <li class="nav-item has-treeview">
                  <a href="https://hrms.maxmobility.in/skills-list" class="hrms-nav-img nav-link " title="Skills">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <!-- <i class="fas fa-diagnoses nav-icon"></i> -->
                    <img src="https://hrms.maxmobility.in/admin/assets/img/skills.png" class="menu_icon nav-icon white_img">
                    <img src="https://hrms.maxmobility.in/admin/assets/img/skills_2.png" class="menu_icon nav-icon black_img">
                    <p> Skills </p>
                  </a>
                  <!--  -->
                </li>
              
                              <li class="nav-item has-treeview">
                  <a href="https://hrms.maxmobility.in/holiday-list" class="hrms-nav-img nav-link " title="Holiday">
                    <!-- <i class="fas fa-calendar-day nav-icon"></i> -->
                    <img src="https://hrms.maxmobility.in/admin/assets/img/beach-holiday.png" class="menu_icon nav-icon white_img">
                    <img src="https://hrms.maxmobility.in/admin/assets/img/beach-holiday_2.png" class="menu_icon nav-icon black_img">
                    <p> Holiday </p>
                  </a>
                </li>
                          </ul>
          </li>
        
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link " title="Configuration">
              <i class="fas fa-cogs" style="padding: 4px; padding-right: 10px;"></i>
              <p> 
                Configuration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display : ">
              <li class="nav-item">
                <a href="https://hrms.maxmobility.in/attendance-cycle" class="nav-link " title="Attendance Cycle">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Attendance Cycle</p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="https://hrms.maxmobility.in/send-mail-conf" class="hrms-nav-img nav-link " title="Send Mail">
                  <img src="https://hrms.maxmobility.in/admin/assets/img/send_mail_icons/Email_Configuration_White.png" class="menu_icon nav-icon white_img">
                  <img src="https://hrms.maxmobility.in/admin/assets/img/send_mail_icons/Email_Configuration.png" class="menu_icon nav-icon black_img">
                  <p> Send Mail </p>
                </a>
              </li>
              
            </ul>
          </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style> 
    .highlight-error {
        border-color: red;
    }
    .tick-right {
        display: inline-block;
        float: right;
    }
</style>

<div class="content-wrapper" style="min-height: 2107.81px;">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1>Add Employee</h1> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="https://hrms.maxmobility.in/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Add Employee</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
        <!-- left column -->
            <div class="col-md-12">
            <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Employee</h3>
                        <a class="btn btn-sm btn-success" href="https://hrms.maxmobility.in/employee-bulk-update" style="float: right;">Employee Bulk Upload</a>
                    </div>
                    class="h1-custom-frm"
                    <!-- /.card-header -->
                    <div class="card-body">
                    <!-- Show error if Employee ID, Personal Email and Official Email is same -->
                      <form role="form" method="post" enctype="multipart/form-data" id="employeeCreateForm" action="https://hrms.maxmobility.in/add-employee">
                        <div class="card-body">
                            <div class="form-figer">
                                <div class="col-md-12">
                                    <h1><span> Personal Details </span></h1>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="img_upload">
                                            <div class="form-group">
                                                <img id="blah" src="https://hrms.maxmobility.in/admin/assets/img/profile_pic.jpg" alt="your image" style="width: 156px; height: 156px;">
                                                <input type="file" name="file" id="imgInp" style="color: #fff0; position:absolute;bottom:17px;width: 158px;opacity:0;left: 9px;" >
                                                <span class="btn-profile" id='button'>Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="txtName">Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="txtName" class="form-control" id="txtName" placeholder="Enter Name" value="">
                                                    <input type="hidden" name="candidate_id" value="">
                                                    <input type="hidden" name="requisition_id" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="designation">Designation <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="designation" name="designation" required>
                                                      <option selected disabled>Select Designation</option>
                                                      <option value="1" >Sr. Project Leader</option>
                                                      <option value="2" >Sr. Manager-Presales</option>
                                                      <option value="3" >Project Leader</option>
                                                      <option value="4" >Technical Support Executive</option>
                                                      <option value="5" >Team Lead</option>
                                                      <option value="6" >Server Administrator</option>
                                                      <option value="7" >TL - DB & Systems</option>
                                                      <option value="8" >Software Engineer</option>
                                                      <option value="9" >Admin Executive</option>
                                                      <option value="10" >Jr. Software Engineer</option>
                                                      <option value="11" >Business Analyst</option>
                                                      <option value="12" >System Administrator</option>
                                                      <option value="13" >IT Support Executive</option>
                                                      <option value="14" >Sr. HR Executive</option>
                                                      <option value="15" >HR Manager</option>
                                                      <option value="16" >Jr. IT Support Engineer</option>
                                                      <option value="17" >VP - Sales, Enterprise Mobility</option>
                                                      <option value="18" >Accounts Executive</option>
                                                      <option value="19" >Jr Software Engineer</option>
                                                      <option value="20" >Sr. Web Developer &  Designer</option>
                                                      <option value="21" >Sr. Software Engineer</option>
                                                      <option value="22" >Jr. Accounts Executive</option>
                                                      <option value="23" >Front End Developer</option>
                                                      <option value="24" >HR Executive</option>
                                                      <option value="25" >Lead - Software Engineer</option>
                                                      <option value="26" >WordPress/CodeIgniter</option>
                                                      <option value="27" >Dot Net Developer</option>
                                                      <option value="28" >Magento Developer</option>
                                                      <option value="29" >Ionic Developer</option>
                                                      <option value="31" >CEO</option>
                                                      <option value="32" >MEAN Stack Developer</option>
                                                      <option value="33" >Full Stack Developer</option>
                                                      <option value="34" >Sr Online Bidder</option>
                                                      <option value="35" >Sr. Online Bidder</option>
                                                      <option value="36" >.Net Core Developer</option>
                                                      <option value="37" >Software Programmer</option>
                                                      <option value="38" >Business Development Manager</option>
                                                      <option value="39" >Database Administrator</option>
                                                      <option value="40" >Sr. Counsellor</option>
                                                      <option value="41" >Business Development Executive</option>
                                                      <option value="42" >Sr. Project Manager</option>
                                                      <option value="43" >Software Engineer Intern</option>
                                                      <option value="44" >UI/UX Designer</option>
                                                      <option value="45" >System & Server Administrator</option>
                                                      <option value="46" >Server & DevOps Engineer</option>
                                                      <option value="47" >Jr. Business Analyst</option>
                                                      <option value="48" >Sr. Server Administrator</option>
                                                      <option value="49" >Jr. Front End Developer</option>
                                                  </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                  <label for="primary_skills">Skills</label>
                                                  <select class="form-control selectpicker" id="primary_skills" name="primary_skills[]" multiple data-live-search="true">
                                                    <option value="5047">Accounts</option>
                                                    <option value="5081">Admin</option>
                                                    <option value="16">Android</option>
                                                    <option value="45">Angular</option>
                                                    <option value="14">Angular JS</option>
                                                    <option value="4">Asp. Net</option>
                                                    <option value="26">Bootstrap</option>
                                                    <option value="243">Business Analyst</option>
                                                    <option value="2412">Business Development</option>
                                                    <option value="5080">CEO</option>
                                                    <option value="5048">Client Servicing</option>
                                                    <option value="21">CodeIgniter</option>
                                                    <option value="5049">Content Writing </option>
                                                    <option value="5065">Cordova</option>
                                                    <option value="5071">Counselling</option>
                                                    <option value="5064">CSS</option>
                                                    <option value="5051">Database Administrator</option>
                                                    <option value="950">DBA</option>
                                                    <option value="5078">DevOps</option>
                                                    <option value="1309">Digital Commerce Executive</option>
                                                    <option value="446">Digital Marketing </option>
                                                    <option value="5046">Dot Net Core</option>
                                                    <option value="5">Dot Net MVC</option>
                                                    <option value="4854">Ecommerce</option>
                                                    <option value="30">Express JS</option>
                                                    <option value="17">Flutter</option>
                                                    <option value="2335">Fresher</option>
                                                    <option value="424">Frontend developer</option>
                                                    <option value="2806">Full Stack Developer</option>
                                                    <option value="447">Graphic Designer</option>
                                                    <option value="5054">HR</option>
                                                    <option value="23">HTML</option>
                                                    <option value="5074">Illustrator</option>
                                                    <option value="18">Ionic</option>
                                                    <option value="5075">iOS</option>
                                                    <option value="416">It Support</option>
                                                    <option value="5055">Java</option>
                                                    <option value="25">JavaScript</option>
                                                    <option value="32">jQuery</option>
                                                    <option value="28">Kotlin</option>
                                                    <option value="22">Laravel</option>
                                                    <option value="5077">Linux Server Administration</option>
                                                    <option value="10">Machine Learning</option>
                                                    <option value="19">Magento</option>
                                                    <option value="5059">Manual Testing</option>
                                                    <option value="5090">Marketing</option>
                                                    <option value="15">Mongo DB</option>
                                                    <option value="4873">Motion graphic designer</option>
                                                    <option value="27">MySQL</option>
                                                    <option value="13">Node JS</option>
                                                    <option value="5045">Online Bidding</option>
                                                    <option value="5084">Operations</option>
                                                    <option value="908">oracle</option>
                                                    <option value="489">Phonegap</option>
                                                    <option value="5073">Photoshop</option>
                                                    <option value="29">PHP</option>
                                                    <option value="9">Python</option>
                                                    <option value="11">React JS</option>
                                                    <option value="12">React Native</option>
                                                    <option value="5070">Recruitment</option>
                                                    <option value="37">Sales</option>
                                                    <option value="2029">SEO</option>
                                                    <option value="5057">Software Testing</option>
                                                    <option value="247">SQL </option>
                                                    <option value="6">SQL Server</option>
                                                    <option value="5079">System Administration</option>
                                                    <option value="4141">telecaller</option>
                                                    <option value="5066">UI/UX</option>
                                                    <option value="2003">web designer</option>
                                                    <option value="5076">Windows Server Administration</option>
                                                    <option value="5089">Woocommerce</option>
                                                    <option value="20">WordPress</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <div class="form-group">
                                                    <label for="employee_id">Employee ID <span class="text-danger">*</span></label>
                                                    <input type="text" name="employee_id" class="form-control" id="employee_id" placeholder="Enter Employee ID" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-group">
                                                    <label for="phone_no">Phone Number <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter Phone no" value="" maxlength="10" required="required" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="form-group">
                                                    <label for="alt_phone_no">Alternative Phone Number </label>
                                                    <input type="text" name="alt_phone_no" class="form-control" id="alt_phone_no" placeholder="Enter Phone no" value="" maxlength="10" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- <input type="file" name="file" id="imgInp" style="color: #fff0;" > -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="doj">Date of Joining <span class="text-danger">*</span></label>
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" name="doj" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" readonly="" value="">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth </label>
                                            <div id="datepicker-doj" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" name="dob" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" readonly="" value="">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="personal_email_id">Personal Email <span class="text-danger">*</span></label>
                                            <input type="text" name="personal_email_id" class="form-control" id="personal_email_id" placeholder="Enter email address here" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oficial_email_id">Official Email <span class="text-danger">*</span></label>
                                            <input type="text" name="oficial_email_id" class="form-control" id="oficial_email_id" placeholder="Enter email address here" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="present_address">Present Address</label> 
                                            <textarea name="present_address" class="form-control" id="present_address" placeholder="Plaese enter present address"></textarea>
                                            <div class="tick-right"><input type="checkbox" id="same_as_permanent" name="same_as_permanent"> <small>Same as Permanent Address</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="permanent_address">Permanent Address</label>
                                            
                                            <textarea name="permanent_address" class="form-control" id="permanent_address" placeholder="Enter permanent address"></textarea>
                                            <div class="tick-right"><input type="checkbox" id="same_as_present" name="same_as_present"> <small >Same as Present Address</small></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name_of_guardian">Name of Guardian </label>
                                            <input type="text" id="name_of_guardian" name="name_of_guardian" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emergency_contact_number">Emergency Contact Number</label>
                                            <input type="text" class="form-control" name="emergency_contact_number" id="emergency_contact_number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="father_name">Father's Name </label>
                                            <input type="text" id="father_name" name="father_name" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mother_name">Mother's Name</label>
                                            <input type="text" class="form-control" name="mother_name" id="mother_name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group merital-status">
                                            <label for="marital_status">Marital Status</label><br>
                                            <div class="marital_status_div" style="justify-content: flex-start; margin-top:10px">
                                                <div class="col-md-3"><input type="radio" id="married" name="marital_status" value="married">
                                                <label for="married">Married</label></div>
                                                <div class="col-md-3"><input type="radio" id="single" name="marital_status" value="single">
                                                <label for="single">Single</label></div>
                                                <div class="col-md-3"><input type="radio" id="divorce" name="marital_status" value="divorce">
                                                <label for="divorce">Divorce</label></div>
                                                <div class="col-md-3"><input type="radio" id="separated" name="marital_status" value="separated">
                                                <label for="separated">Separated</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pan_number">Pan Number</label>
                                            <input type="text" class="form-control" name="pan_number" id="pan_number" value="" maxLength="10">
                                            <span style="color:red;display:none;" id="pan_error">Invalid Pan No!!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="aadhaar_number">Aadhar Number</label>
                                            <input type="text" id="aadhaar_number" name="aadhaar_number" class="form-control" data-inputmask='"mask": "9999-9999-9999"' data-mask value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pf_number">PF Number </label>
                                            <input type="text" class="form-control" name="pf_number" id="pf_number" value="">
                                            <span style="color:red;display:none;" id="pan_error">Invalid Pan No!!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="uan_number">UAN Number </label>
                                            <input type="text" id="uan_number" name="uan_number" class="form-control" data-type="uan_number" maxLength="19" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="esic_number">ESIC Number</label>
                                            <input type="text" class="form-control" name="esic_number" id="esic_number" value="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ctc">CTC </label>
                                            <input type="text" id="ctc" name="ctc" class="form-control" data-type="ctc" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="grass_salary">In Hand Salary </label>
                                            <input type="text" class="form-control" name="grass_salary" id="grass_salary" value="">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- <div class="upload_div" id="cv_btn"> 
                                            <i class="fa fa-upload" aria-hidden="true"></i> Upload Empppployee CV
                                        </div> -->
                                        <label for="employee_cv">Upload CV (.doc and .pdf only)</label>
                                        <input type="file" name="employee_cv" id="empCV" style="" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="is_pl_tl">PL & TL Access <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="is_pl_tl" name="is_pl_tl" required>
                                            <option selected disabled>Select Access</option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="pms_access">PMS Access <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="pms_access" name="pms_access" required>
                                            <option disabled>Select Access</option>
                                            <option selected value="1">Yes</option>
                                            <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tech_dept"> Technical Depertment <span class="text-danger">*</span></label>
                                            <select class="form-control" id="tech_dept" name="tech_dept" required>
                                            <option disabled selected>Select Depertment</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-figer">
                                <div class="col-md-12">
                                    <h1><span> Education Details </span></h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="collage_name"> Qualification </label>
                                            <input type="text" id="collage_name" name="collage_name" class="form-control" data-type="collage_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="board_university"> Institution Name (University/ Board) </label>
                                            <input type="text" id="board_university" name="board_university" class="form-control" data-type="board_university" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="passing_year"> Year </label>
                                                <input type="text" class="form-control" name="passing_year" id="passing_year" value="" placeholder="eg. 1990 - 1991">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="specialization"> Specialization </label>
                                                <input type="text" class="form-control" name="specialization" id="specialization" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="form-figer">
                                    <div class="col-md-12">
                                        <h1><span> Project Highlights </span></h1>
                                    </div>
                                    
                                    <div class="best-project-details">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="project_title"> Project Name </label>
                                                    <input type="text" id="project_title" name="project_title[]" class="form-control" data-type="project_title" value="" placeholder="Enter project name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="technology_used"> Technology Used </label>
                                                    <input type="text" id="technology_used" name="technology_used[]" class="form-control" data-type="technology_used" value="" placeholder="eg. php,jQuery etc.">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="your_role"> Your Role </label>
                                                    <input type="text" class="form-control" name="your_role[]" id="your_role" value="" placeholder="eg. Developer">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="project_overview"> Project Overview </label>
                                                    <textarea class="form-control" name="project_overview[]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="best-project-details">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="project_title"> Project Name </label>
                                                    <input type="text" id="project_title" name="project_title[]" class="form-control" data-type="project_title" value="" placeholder="Enter project name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="technology_used"> Technology Used </label>
                                                    <input type="text" id="technology_used" name="technology_used[]" class="form-control" data-type="technology_used" value="" placeholder="eg. php,jQuery etc.">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="your_role"> Your Role </label>
                                                    <input type="text" class="form-control" name="your_role[]" id="your_role" value="" placeholder="eg. Developer">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="project_overview"> Project Overview </label>
                                                    <textarea class="form-control" name="project_overview[]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="best-project-details">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="project_title"> Project Name </label>
                                                    <input type="text" id="project_title" name="project_title[]" class="form-control" data-type="project_title" value="" placeholder="Enter project name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="technology_used"> Technology Used </label>
                                                    <input type="text" id="technology_used" name="technology_used[]" class="form-control" data-type="technology_used" value="" placeholder="eg. php,jQuery etc.">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="your_role"> Your Role </label>
                                                    <input type="text" class="form-control" name="your_role[]" id="your_role" value="" placeholder="eg. Developer">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="project_overview"> Project Overview </label>
                                                    <textarea class="form-control" name="project_overview[]"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" name="submit" value="Create" class="btn btn-primary" id="submit_btn">
                            <a href="https://hrms.maxmobility.in/employees" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-circle-left" style="padding-right: 5px;"></i> Go Back</a>
                        </div>
                    </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        <!--/.col (left) -->
        </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script type="text/javascript">
$(document).ready(function() {
    
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    $('#button').click(function () {
        $("#imgInp").trigger('click');
    });

    $('#cv_btn').click(function () {
        $("#empCV").trigger('click');
    });
    
    $( "#datepicker" ).datepicker({ 
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose:true,
        weekStart: 1
    });

    $( "#datepicker-doj" ).datepicker({ 
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose:true,
        weekStart: 1
    });

    /*-- Same as Permanent On Click --*/
    $('#same_as_permanent').click(function(){
        if ($(this).prop('checked')==true){ 
            $('#permanent_address').val($('#present_address').val());
            $('#same_as_present').attr("disabled", true);
            $('#permanent_address').attr("readonly", true);
        } else {
            $('#permanent_address').val('');
            $("#same_as_present").removeAttr("disabled");
            $('#permanent_address').removeAttr("readonly");
        }
    });

    /*-- Same as Present On Click --*/
    $('#same_as_present').click(function(){
        if ($(this).prop('checked')==true){
            $('#present_address').val($('#permanent_address').val());
            $('#same_as_permanent').attr("disabled", true);
            $('#present_address').attr("readonly", true);
        } else {
            $('#present_address').val('');
            $("#same_as_permanent").removeAttr("disabled");
            $('#present_address').removeAttr("readonly");
        }
    });

  /*-- Inputmaks Inicialised --*/
  $('[data-mask]').inputmask();

  /*-- Employee Form Validation --*/
  $('#employeeCreateForm').validate({
    rules: {
      
      txtName: {
        required: true,
      },
      employee_id: {
        required: true,
      },
      phone_no: {
        required: true,
      },
      doj: {
        required: true,
      },
      personal_email_id: {
        required: true,
        email: true,
      },
      oficial_email_id: {
        required: true,
        email: true,
      },
      is_pl_tl: {
        required:true,
      },
      pms_access:{
        required:true,
      },
      tech_dept: {
        required: true,
      },
      employee_cv:{
        extension: "pdf|doc|docx"
      }
    },
    messages: {
      txtName: {
        required: "Please enter candidate name"
      },
      employee_id: {
        required: "Please enter employee ID"
      },
      phone_no: {
        required: "Please enter Phone Number"
      },
      doj: {
        required: "Please enter a date of Joining",
      },
      personal_email_id: {
        required: "Please enter a email address",
        personal_email_id: "Please enter a vaild email address"
      },
      oficial_email_id: {
        required: "Please enter official email address",
        oficial_email_id: "Please enter a vaild email address"
      },
      is_pl_tl: {
        required: "Select employee PL,TL or not" 
      },
      pms_access: {
        required: "Please select pms access" 
      },
      tech_dept: {
        required: "Please select technical depetment" 
      },
      employee_cv:{
        extension: "Please select only pdf and doc files"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
   });
 });

 function fileValidation() {
    var fileInput =  document.getElementById('imgInp');
    var filePath = fileInput.value;
    // Allowing file type
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        
    if (!allowedExtensions.exec(filePath)) {
        // alert('Invalid file type');
        fileInput.value = '';
        return false;
    } 
}
</script>
  <footer class="main-footer" >
   <strong>Copyright &copy; 2022 <a href="https://www.maxmobility.in/" target="_blank">Maxmobility</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block" style=" position: absolute;right: 114px;">
      <b>Version</b> 1.0.0    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/moment/moment.min.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/summernote/summernote-bs4.js"></script>
<!-- overlayScrollbars -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://hrms.maxmobility.in/admin/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://hrms.maxmobility.in/admin/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- DataTables -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/dist/js/demo.js"></script>
<!---------for the use of multiple selection date:31/dec/2020-------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/js/admin_custom.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- Select2 -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap - date picker -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<!-- InputMask -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/moment/moment.min.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="https://hrms.maxmobility.in/admin/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Toster JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
  
  $('#timepicker').datetimepicker({
    format: 'LT'
  });

  $('#betweentime').datetimepicker({
    format: 'LT'
  });

  $('#start_date').datepicker({
    autoclose: true,
    dateFormat: 'dd-mm-yyyy'
  });
  
  $('#end_date').datepicker({
    autoclose: true,
    dateFormat: 'dd-mm-yyyy'
  });

  /*---- Date range as a button Added By Subhodeep Bhattacharjee ----*/
  $('input[name="datefilter"]').daterangepicker({
    autoUpdateInput: false,
    locale: {
        cancelLabel: 'Clear'
    }
  });

  /*---- Search Custom Date Range and AJAX API For shoe data in dashboard ----*/
  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    
    var startDate = picker.startDate.format('YYYY-MM-DD');
    var endDate = picker.endDate.format('YYYY-MM-DD');
    
    $.ajax({
      url: 'https://hrms.maxmobility.in/requisition-details',
      type: 'POST',
      dataType:'json',
      data: {
        startDate,
        endDate
      },
      success: function(data) {
        if(data!= 1) {
          $('#total-requisition').text(data.total_requisition);
          $('#total-close-requisition').text(data.total_closed);
        }
      }
    });
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
  });

</script>
<!---------for the use of multiple selection date:09/dec/2020-------->
<script type="text/javascript">
  var base_url = 'https://hrms.maxmobility.in';
  $(document).ready(function() {
    
    const filterPosition = '';
    if(filterPosition) {
      $('#sortBy').val(filterPosition);
      $('#sortBy-skills').val(filterPosition);
    }

    $("#interview_date").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });
    $('input[name="daterange"]')
    .daterangepicker({
      autoUpdateInput: false,
    })
    .on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + '-' + picker.endDate.format('MM/DD/YYYY'));
        $('#filterForm').submit();
      });

    $('#exampleInputPassword2').change(function(){
      var password1 = $('#exampleInputPassword1').val();
      var password2 = $('#exampleInputPassword2').val();
      
      $.ajax({
        url: 'https://hrms.maxmobility.in/confirm_password',
        type: 'POST',
        dataType:'json',
        data: {
          password1,
          password2
        },
        success: function(data) {
          if(data == 0) {
            $("#exampleInputPassword2").addClass("is-invalid");
            $('#exampleInputPassword2-error').show();
          } else if(data == 1){
            $("#exampleInputPassword2").removeClass("is-invalid");
            $("#exampleInputPassword2").addClass("is-valid");
          }
        }
      });
    });

    $('.fa-bell').click(function(){
      var is_seen = 1
      $.ajax({
        url: 'https://hrms.maxmobility.in/is_seen_notification',
        type: 'POST',
        dataType:'json',
        data: {
          is_seen
        },
        success: function(data) {
          if(data == 1) {
            $('.badge-notification').html('0');
          } 
          /*else if(data == 1){
            
          }*/
        }
      }); 
    });

    $('#currentPassword').change(function(){
      var current_password = $('#currentPassword').val();
      $.ajax({
        url: 'https://hrms.maxmobility.in/metch_password',
        type: 'POST',
        dataType:'json',
        data: {
          current_password,
        },
        success: function(data) {
          if(data == 1) {
            $("#currentPassword").removeClass("is-invalid");
            $("#currentPassword").addClass("is-valid");
            $("#changePasswordBtn").removeAttr("disabled");
          } else if(data == 0) {
            $("#currentPassword").addClass("is-invalid");
            $('#exampleInputName1-error').show();
            $('#changePasswordBtn').attr("disabled", true);
          }
        }
      });
    });
  });
</script>
</body>
</html>