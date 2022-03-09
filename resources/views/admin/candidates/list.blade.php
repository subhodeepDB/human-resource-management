@extends('layouts.admin')

@section('title','Candidate List')

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
                            <h3 class="card-title">Candidates</h3>
                            <a class="btn btn-sm btn-success" href="{{ route('add-candidate') }}" style="float: right; margin-left: 10px;">Add Candidate</a>
                        </div>

                        <div class="card-body table-responsive">
                            {{-- class="table table-striped table-bordered dt-responsive nowrap" style="width:100%"> --}}
                            <table class="table table-bordered user_datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <!-- <th>Skills</th> -->
                                        <!-- <th>Total Experience</th> -->
                                        <th>Relevant Experience</th>
                                        <th>Present Salary</th>
                                        <th>Expected Salary</th>
                                        <!-- <th>Notice Period</th> -->
                                        <!-- <th>Remarks</th> -->
                                        <th>Status</th>
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
        ajax: "{{ route('candidates') }}",
        columns: [
            //   12
            {data: 'candidate_name', name: 'candidate_name',width: '50px'},
            {data: 'email_id', name: 'email_id', width: '50px'},
            {data: 'phone_no', name: 'phone_no', width: '150px'},
            // {data: 'skills', name: 'skills', width: '150px'},
            // {data: 'total_experience', name: 'total_experience', width: '150px'},
            {data: 'relevant_experience', name: 'relevant_experience', width: '150px'},
            {data: 'present_salary', name: 'present_salary', width: '150px'},
            {data: 'expected_salary', name: 'expected_salary', width: '150px'},
            // {data: 'notice_period', name: 'notice_period', width: '550px'},
            // {data: 'comment', name: 'comment', width: '550px'},
            {data: 'status', name: 'status', width: '50px'},
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