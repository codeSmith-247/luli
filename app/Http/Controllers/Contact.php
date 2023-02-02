<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GroupCard;


class Contact extends Controller
{
    //
    public function index() {
        $contacts = GroupCard::where('name', 'contacts')->get();

        return view('contact', [
            'contacts' => $contacts
        ]);
    }


    public function admin() {
        $contacts = GroupCard::where('name', 'contacts')->get();

        return view('admin.contact', [
            'contacts' => $contacts
        ]);
    }

    public function create() {
 
        // dd(request());

        $attributes = request()->validate([

            'location' => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            // 'image'   => 'required',

        ]);

        GroupCard::where('name', 'contacts')->delete();

        GroupCard::create([
            'title' => 'location',
            'content' => $attributes['location'],
            'name' => 'contacts',
            'location' => 'contact'
        ]);

        GroupCard::create([
            'title' => 'phone',
            'content' => $attributes['phone'],
            'name' => 'contacts',
            'location' => 'contact'
        ]);

        GroupCard::create([
            'title' => 'email',
            'content' => $attributes['email'],
            'name' => 'contacts',
            'location' => 'contact'
        ]);

        return redirect()->back()->with('message','Operation Successful !');

    }
}
