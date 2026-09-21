<?php

namespace App\Controllers;

use App\Models\PatientModel;

class PatientController extends BaseController
{
    protected $patientModel;

    //create a constructor to create an object of PatientController class
    public function __construct()
    {
        $this->patientModel = new PatientModel();
    }

    //GET(): access public data/methods stored in URL header // response received through header 
    //POST(): access private/protectd data stored in URL body 
    // request sent and response received through body

    // GET /patient 
    public function index()
    {
        $data['patients'] = $this->patientModel->findAll();
    }

    //GET /patient/create
    public function create()
    {
        //return empty form to enter patient info
        return view('patient/create');
    }

    // POST /patient/store
    public function store()
    {
        $data = [
            'patient_name' => $this->request->getPost('patient_name'),
            'patient_contact' => $this->request->getPost('patient_contact'),
            'status' => $this->request->getPost('status')
            // => get a value and assign it to the variable 
            // -> move to the next function. no assigning 
        ];

        if (! $this->patientModel->insert($data)) {
            return redirect()->back()->withInput()
                ->with('error', $this->patientModel->errors());
        }

        return redirect()->to('/patient')->with('success', 'Patient added successfully');
    }

    public function update() {}

    public function delete() {}
}
