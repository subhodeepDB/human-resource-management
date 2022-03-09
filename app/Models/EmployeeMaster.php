<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeMaster extends Model
{
    use HasFactory;

    // public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'designation',
        'employee_id',
        'joining_date',
        'date_of_birth',
        'confirmation_date',
        'phone_no',
        'alternative_no',
        'personal_email',
        'official_email',
        'present_address',
        'skills',
        'permanent_address',
        'name_of_guardian',
        'emergency_phone_no',
        'father_name',
        'mother_name',
        'gender',
        'marital_status',
        'pan_number',
        'aadhaar_number',
        'pf_number',
        'uan_number',
        'esic_number',
        'gross_salery',
        'status',
        'resignation_date',
        'last_date'
    ];

    public function user() {
        return $this->hasOne(User::class,'id','employee_id');
    }

    public function enployee_resignation() {
        return $this->hasOne(EmployeeResignationDetails::class,'id','employee_id');
    }

    public function employee_attendance() {
        return $this->hasMany(EmployeeAttendanceMaster::class,'id','employee_id');
    }

    public function employee_leaves() {
        return $this->hasOne(EmployeeLeaveMaster::class,'id','employee_id');
    }
    
    public function leave_details() {
        return $this->hasMany(EmployeeLeaveDetails::class,'id','employee_id');
    }

    public function employee_designation() {
        
    }
}