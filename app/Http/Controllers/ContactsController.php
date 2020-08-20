<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // 問い合わせフォーム
    public function getContactForm(){
        return view('/contact_form');
    }

    // 問い合わせ内容確認
    public function postContactCheck(Request $request){
        $contact_data = $request->all();
        return view('contact_form_check', compact('contact_data'));
    }

    // 問い合わせ完了
    public function postContactDone(){
        return view('/contact_form_done');
    }
}
