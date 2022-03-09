@extends('layouts.admin')

@section('title','Add Employee')

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

                        <form role="form" method="post" enctype="multipart/form-data" id="employeeCreateForm" action="{{ route('add-employees.store') }}">
                            <div class="card-body">
                                <div class="form-figer">
                                    <div class="col-md-12">
                                        <h1 class="h1-custom-frm"><span> Personal Details </span></h1>
                                    </div>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="img_upload">
                                                <div class="form-group">
                                                    <img id="blah" src="https://hrms.maxmobility.in/admin/assets/img/profile_pic.jpg" alt="your image" style="width: 156px; height: 156px;">
                                                    <input type="file" name="image" id="imgInp" style="color: #fff0; position:absolute;bottom:17px;width: 158px;opacity:0;left: 9px;" >
                                                    <span class="btn-profile" id='button'>Upload</span>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name">Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="">
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
                                                      </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                      <label for="primary_skills">Skills</label>
                                                        <select class="form-control selectpicker " id="primary_skills" name="primary_skills[]" multiple data-live-search="true">
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
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="doj">Date of Joining <span class="text-danger">*</span></label>
                                                <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                    <input class="form-control" type="text" name="doj" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" readonly="" value="">
                                                    {{-- <input type="text" class="form-control" id="input_from" placeholder="Start Date"> --}}
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth </label>
                                                <div id="datepicker-doj" class="input-group date" data-date-format="mm-dd-yyyy">
                                                    <input class="form-control" type="text" name="dob" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" readonly="" value="" >
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
                                        {{-- <div class="col-md-4"> --}}
                                            {{-- <div class="upload_div" id="cv_btn"> 
                                                <i class="fa fa-upload" aria-hidden="true"></i> Upload Empppployee CV
                                            </div> --}}
                                            {{-- <label for="employee_cv">Upload CV (.doc and .pdf only)</label>
                                            <input type="file" name="employee_cv" id="empCV" style="" class="form-control"> --}}
                                        {{-- </div> --}}
                                    </div>
    
                                    {{-- <div class="row">
                                        <div class="col-md-4">
                                            <div class="upload_div" id="cv_btn"> 
                                                <i class="fa fa-upload" aria-hidden="true"></i> Upload Empppployee CV
                                            </div>
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
                                    </div> --}}
                                    {{-- <input type="submit" name="submit" value="Create" class="btn btn-primary" id="submit_btn">
                                    <a href="https://hrms.maxmobility.in/employees" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-circle-left" style="padding-right: 5px;"></i> Go Back</a> --}}
                                </div>
    
                                {{-- <div class="form-figer">
                                    <div class="col-md-12">
                                        <h1 class="h1-custom-frm">
                                            <span> Education Details </span>
                                        </h1>
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
                                            <h1 class="h1-custom-frm">
                                                <span> Project Highlights </span>
                                            </h1>
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
                                    <input type="submit" name="submit" value="Create" class="btn btn-primary" id="submit_btn">
                                    <a href="https://hrms.maxmobility.in/employees" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-circle-left" style="padding-right: 5px;"></i> Go Back</a>
                                </div> --}}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" name="submit" value="Create" class="btn btn-primary" id="submit_btn">
                                <a href="https://hrms.maxmobility.in/employees" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-circle-left" style="padding-right: 5px;"></i> Go Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</div>
@endsection