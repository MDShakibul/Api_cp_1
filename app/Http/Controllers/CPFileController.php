<?php

namespace App\Http\Controllers;

use App\Models\CPFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CPFileController extends Controller
{
    public function save(Request $request){

      $info = new CPFile();

        $info -> noc_status = request()->get('noc_status'); //query string
        $info -> noc_appication_number = request()->get('application_number');
        $info -> noc_applicant_name = request()->get('applicant_name');
        $info -> noc_applicant_contact_no = request()->get('contact_no');
        $info -> noc_applicant_mausa_name = request()->get('applicant_mausa_name');
        $info -> noc_applicant_address = request()->get('noc_applicant_address');
        $info -> noc_issue_date = request()->get('noc_issue_date');
        $info -> noc_issued_files = request()->get('noc_issued_files');
        //$noc_issue_date = request()->get('noc_issued_files');
        //dd($noc_status, $application_number,$noc_issue_date,$contact_no,$applicant_mausa_name,$noc_issue_date);
        //dd($noc_issue_date);

        /* $noc_issued_files = request()->get('noc_issued_files');
        $document_full_name = $noc_issued_files;
        $upload_path = 'image/';
        $document_url = $upload_path . $document_full_name;
        $noc_issued_files->move($upload_path, $document_full_name);
        $info->noc_issued_files = $document_url; */
        $info -> save();


    }

    public function index(){
        $info = CPFile::get();
        dd($info);

        return view('index',compact('info'));
    }
}
