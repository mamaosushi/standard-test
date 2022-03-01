<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
        $genders = Contact::$genders;
        return view('index', compact('genders'));
    }
    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
        return view('confirm', compact('contact'));
    }
    public function complete(ContactRequest $request)
    {
        $inputs = $request->except('action');
        if($request->action === '送信') {
            Contact::create($request->all());
            return view('complete');
        } else {
            return redirect()->route('form.index')->withInput($inputs);
        }
    }
    public function delete(ContactRequest $request)
    {
        $contact = Contact::find($request->id)->delete();
        return redirect()->route('form.find');
    }
    public function find()
    {
        return view('find');
    }

    public function search(Request $request)
    {
        $keyword_fullname = $request->fullname;
        $keyword_gender = $request->gender;
        $keyword_created_at = $request->created_at;
        $keyword_email = $request->email;
  
        if(!empty($keyword_fullname)) {
            $query = Contact::query();
            $contacts = $query->where('fullname', 'LIKE', '%' .$keyword_fullname. '%')->get();
            return view('find')->with(['contacts' => $contacts]);
        }
        elseif(!empty($keyword_gender)) {
            $query = Contact::query();
            $contacts = $query->where('gender', 'LIKE', '%' .$keyword_gender. '%')->get();
            return view('find')->with(['contacts' => $contacts]);
        }
        elseif(!empty($keyword_created_at)) {
            $query = Contact::query();
            $contacts = $query->where('created_at', 'LIKE', '%' .$keyword_created_at. '%')->get();
            return view('find')->with(['contacts' => $contacts]);
        }
        elseif(!empty($keyword_email)) {
            $query = Contact::query();
            $contacts = $query->where('email', 'LIKE', '%' .$keyword_email. '%')->get();
            return view('find')->with(['contacts' => $contacts]);
        }
        else {
            return view('find');
        }
    }
}

