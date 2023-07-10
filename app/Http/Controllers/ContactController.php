<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(Request $request){
        $con = new Contact();
        $con->name = $request->name;
        $con->email = $request->email;
        $con->subject = $request->subject;
        $con->massage = $request->massage;
        $con->save();
        alert()->success('Successfully','ทางร้านได้รับข้อมูลของท่านเรียบร้อยแล้ว');
        return redirect('/');
    }
}
