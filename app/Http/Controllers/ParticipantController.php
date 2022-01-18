<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
   public function participantUserList()
   {
       return view('backend.contest_participant');
   }
   public function enquiry()
   {
    $showEnquiryTable = DB::select('select * from table_enquiry');
       return view('backend.enquiry', compact('showEnquiryTable'));
   }
}
