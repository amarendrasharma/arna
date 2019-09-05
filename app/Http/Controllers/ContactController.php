<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function contact()
    {
      return view('contact');
    } 

    public function contactPost (Request $request) 
    {
        $this->validate($request,[
            'name' =>  ['required','string'],
            'contact' => [
                'required', 
                'regex:/^[6789]\d{9} $/'
            ],
            'query' => ['required'],
            'address' => ['required','string','max:255'],
        ]);
       $contact = DB::table('contacts')->insert([
            'name' => $request->name,
            'contact' => $request->contact,
            'query' => $request->query,
            'address' => $request->address,
        ]);
      
        if($contact) {
            return back();
        }
    }

}
