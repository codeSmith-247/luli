<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LargeCard;
use App\Models\Card;
use App\Models\GroupCard;


class About extends Controller
{
    //
    public function index() {
        $cards = LargeCard::where('location', 'about')->get();
        $heros = GroupCard::where('name', 'hero')->get();

        return view('about', [
            'cards' => $cards,
            'heros' => $heros
        ]);
    }


    public function admin() {
        $cards = LargeCard::where('location', 'about')->get();
        $heros = GroupCard::where('name', 'hero')->get();

        return view('admin.about', [
            'cards' => $cards,
            'heros' => $heros
        ]);
    }

    public function create() {
 
        // dd(request());

        $attributes = request()->validate([
            'first_section_title'  => 'required',
            'first_section_text'   => 'required',
            'first_section_sub_title'  => 'required',
            'first_section_sub_text'   => 'required',

            'second_section_title'  => 'required',
            'second_section_text'   => 'required',
            'second_section_sub_title'  => 'required',
            'second_section_sub_text'   => 'required',

            'third_section_title'  => 'required',
            'third_section_text'   => 'required',
            'third_section_sub_title'  => 'required',
            'third_section_sub_text'   => 'required',

            'heros.*.position' => 'required',
            'heros.*.name'     => 'required',
            // 'image'   => 'required',

        ]);

        $loop_array = [
            [
                'first_section',
                'first_section_title',
                'first_section_text' ,
                'first_section_sub_title',
                'first_section_sub_text' ,
                'first_section_image' ,
            ],

            [
                'second_section',
                'second_section_title',
                'second_section_text' ,
                'second_section_sub_title',
                'second_section_sub_text' ,
                'second_section_image' ,
            ],

            [
                'third_section',
                'third_section_title',
                'third_section_text' ,
                'third_section_sub_title',
                'third_section_sub_text' ,
                'third_section_image' ,
            ],

        ];

        foreach($loop_array as $key => $property) {
            // dd(Card::where('name', $property[0])->count());
            if(LargeCard::where('name', $property[0])->count() !== 0)
                $card = LargeCard::where('name', $property[0])->update([
                    'name'  => $property[0],
                    'title' => $attributes[$property[1]],
                    'content' => $attributes[$property[2]],
                    'sub_title' => $attributes[$property[3]],
                    'sub_content' => $attributes[$property[4]],
                ]);
            else
                $card = LargeCard::create([
                    'name'  => $property[0],
                    'title' => $attributes[$property[1]],
                    'content' => $attributes[$property[2]],
                    'sub_title' => $attributes[$property[3]],
                    'sub_content' => $attributes[$property[4]],
                    'location' => 'about',
                ]);

            if(request($property[5]) != null) {

                $imageName = time(). '_about.' . request($property[5])->getClientOriginalName();;
           
                if(request($property[5])->move(public_path('images/about'), $imageName)) {
                    LargeCard::where('name', $property[0])->update([
                        'image' => $imageName
                    ]);
                }
            }

  
        }


        $heros = request('heros');

        //delete deleted heros
        $cards = GroupCard::where('name', 'hero')->get();

        if($cards->isNotEmpty())

        foreach($cards as $card) {
            $check = false;

            if($heros != null)
            foreach($heros as $hero) {
                if($hero['name'] == $card->content) $check = true;
            }

           
            if($check == false)GroupCard::where('content', $card->content)->delete();
        }

        //create or update given heros
        if($heros != null)
        foreach ($heros as $hero) {

            // Extract values for each heros member
            $name       = $hero['name'] ?? null;
            $position   = $hero['position'] ?? null;
            $image      = $hero['image'] ?? null;
            
            // Save to database
            // ...
            if(GroupCard::where('content', $name)->count() !== 0)
                $card = GroupCard::where('content', $name)->update([
                    'title' => $position,
                    'content' => $name,
                ]);
            else
                $card = GroupCard::create([
                    'name'  => 'hero',
                    'title' => $position,
                    'content' => $name,
                    'location' => 'about',
                ]);

            if($image != null) {

                $imageName = time(). '_about_hero.' . $image->getClientOriginalName();
            
                if($image->move(public_path('images/about'), $imageName)) {
                    GroupCard::where('content', $name)->update([
                        'image' => $imageName
                    ]);
                }
            }
        }

        return redirect()->back()->with('message','Operation Successful !');

    }
}
