<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GroupCard;

class Program extends Controller
{
    //
    public function index() {
        $programmes = GroupCard::where('name', 'programmes')->orderBy('id', 'desc')->get();

        return view('programmes', [
            'programmes' => $programmes
        ]);
    }


    public function admin() {
        $programmes = GroupCard::where('name', 'programmes')->get();

        return view('admin.programmes', [
            'programmes' => $programmes
        ]);
    }

    public function create() {
 
        // dd(request());

        $attributes = request()->validate([

            'programmes.*.title' => 'required',
            'programmes.*.text'     => 'required',
            // 'image'   => 'required',

        ]);

        $programmes = request('programmes');

        //delete deleted programmes
        $cards = GroupCard::where('name', 'programmes')->get();

        if($cards->isNotEmpty())

        foreach($cards as $card) {
            $check = false;

            if($programmes != null)
            foreach($programmes as $programme) {
                if($programme['text'] == $card->content) $check = true;
            }

           
            if($check == false)GroupCard::where('content', $card->content)->delete();
        }

        //create or update given programmes
        if($programmes != null)
        foreach ($programmes as $programme) {

            // Extract values for each programmes member
            $title       = $programme['title'] ?? null;
            $text   = $programme['text'] ?? null;
            $image      = $programme['image'] ?? null;
            
            // Save to database
            // ...
            if(GroupCard::where('content', $text)->count() !== 0)
                $card = GroupCard::where('content', $text)->update([
                    'title' => $title,
                    'content' => $text,
                ]);
            else
                $card = GroupCard::create([
                    'name'  => 'programmes',
                    'title' => $title,
                    'content' => $text,
                    'location' => 'programmes',
                ]);

            if($image != null) {

                $imageName = time(). '_programme.' . $image->getClientOriginalName();
            
                if($image->move(public_path('images/program'), $imageName)) {
                    GroupCard::where('content', $text)->update([
                        'image' => $imageName
                    ]);
                }
            }
        }

        return redirect()->back()->with('message','Operation Successful !');
    }
}
