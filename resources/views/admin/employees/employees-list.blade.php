@extends('layouts.admin')
@section('title','Employee List')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1>Employees</h1> --}}
                </div>
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
        
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employees</h3>
                            <a class="btn btn-sm btn-success" href="{{ route('add-employees') }}" style="float: right; margin-left: 10px;">Add Employee</a>
                        </div>

                        <div class="card-body table-responsive">
                            {{-- class="table table-striped table-bordered dt-responsive nowrap" style="width:100%"> --}}
                            <table class="table table-bordered user_datatable" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Employee id</th>
                                        <!-- <th>Joining Date</th>
                                        <th>Date Of Birth</th>
                                        <th>Personal email</th> -->
                                        <th>Official email</th>
                                        <th>Contact Number</th>
                                        <!-- <th>Present Address</th>
                                        <th>Permanent Address</th>
                                        <th>Skills</th>
                                        <th>Emergency Number</th>
                                        <th>Gurdain Name</th> -->
                                        <!-- <th>Gender</th> -->
                                        <!-- <th>Merital Status</th>
                                        <th>PAN Number</th>
                                        <th>Aadhaar Number</th>
                                        <th>UAN Number</th>
                                        <th>ESIC Number</th>
                                        <th>Gross Salery</th>
                                        <th>Status</th> -->
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('datatable')
<script type="text/javascript">
    $(function () {
      var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        ajax: "{{ route('employees') }}",
        columns: [
            //   22
            {data: 'name', name: 'name',width: '200px'},
            {data: 'designation', name: 'designation', width: '50px'},
            {data: 'employee_id', name: 'employee_id', width: '80px'},
            // {data: 'joining_date', name: 'joining_date', width: '150px'},
            // {data: 'date_of_birth', name: 'date_of_birth', width: '150px'},
            // {data: 'personal_email', name: 'personal_email', width: '150px'},
            {data: 'official_email', name: 'official_email', width: '150px'},
            {data: 'phone_no', name: 'phone_no', width: '96px'},
            // {data: 'present_address', name: 'present_address', width: '550px'},
            // {data: 'permanent_address', name: 'permanent_address', width: '550px'},
            // {data: 'skills', name: 'skills', width: '50px'},
            // {data: 'emergency_phone_no', name: 'emergency_phone_no', width: '150px'},
            // {data: 'name_of_guardian', name: 'name_of_guardian', width: '250px'},
            // {data: 'gender', name: 'gender', width: '50px'},
            // {data: 'marital_status', name: 'marital_status', width: '150px'},
            // {data: 'pan_number', name: 'pan_number', width: '150px'},
            // {data: 'aadhaar_number', name: 'aadhaar_number', width: '150px'},
            // {data: 'uan_number', name: 'uan_number', width: '150px'},
            // {data: 'esic_number', name: 'esic_number', width: '150px'},
            // {data: 'gross_salery', name: 'gross_salery', width: '150px'},
            // {data: 'status', name: 'status', width: '50px'},
            {data: 'action', name: 'action', orderable: false, searchable: false, width: '100px'},
        ]
        // ,
        // columnDefs: [
        //     // { width: 200, targets: 0 }
        //     { "width": "335px", "targets": [0] },
        //     { "width": "450px", "targets": [1] },
        //     { "width": "450px", "targets": [2] },
        //     { "width": "450px", "targets": [3] },
        //     { "width": "450px", "targets": [4] },
        //     { "width": "450px", "targets": [5] },
        //     { "width": "450px", "targets": [6] },
        //     { "width": "450px", "targets": [7] },
        //     { "width": "500px", "targets": [8] },
        //     { "width": "500px", "targets": [9] },
        //     { "width": "450px", "targets": [10] },
        //     { "width": "450px", "targets": [11] },
        //     { "width": "450px", "targets": [12] },
        //     { "width": "450px", "targets": [13] },
        //     { "width": "450px", "targets": [14] },
        //     { "width": "450px", "targets": [15] },
        //     { "width": "450px", "targets": [16] },
        //     { "width": "450px", "targets": [17] },
        //     { "width": "450px", "targets": [18] },
        //     { "width": "450px", "targets": [19] },
        //     { "width": "450px", "targets": [20] },
        //     { "width": "450px", "targets": [21] },
        // ]
      });
    });
</script>
@endsection