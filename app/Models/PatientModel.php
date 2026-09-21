<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    //the table this model is used for
    protected $table = 'patient';

    //primary key
    protected $primaryKey = 'patient_id';

    protected $allowedFields = ['patient_name', 'patient_contact', 'status'];

    // fields to store timestamps in the db 
    // protected $useTimestamps = true;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';

    //validation rules to add using CodeIgniter4
    protected $validationRules = [
        //a NOT NULL field & the min-max length
        'patient_name' => 'required|min_length[2]|max_length[100]',
        'patient_contact' => 'min_length[3]|max_length[12]',
        'status' => 'required|max_length[1]'

    ];

    protected $validationMessages = [
        'patient_name' => ['required' => 'Patient Name is required'],
        'status' => ['required' => 'Status is required'],
        'patient_contact' => ['max_length' => 'Maximum character length for contact 10']

    ];
}
