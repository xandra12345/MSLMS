<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class CompanyController extends Controller
{
    //
    public function index() {
      $companys = Company::all();
      return view('wagon.maintenance.client', ['companys' => $companys]);
    }
}
