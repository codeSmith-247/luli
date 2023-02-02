<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;

class Home extends Controller
{
    //

    public function index() {
        $cards = Card::where('location', 'home')->get();

        return view('welcome', [
            'cards' => $cards,
        ]);
    }


    public function admin() {
        $cards = Card::where('location', 'home')->get();
        // dd($cards);

        return view('admin.dashboard', [
            'cards' => $cards,
        ]);
    }

    public function create() {
 

        $attributes = request()->validate([
            'header_title' => 'required',
            'header_text'  => 'required',

            'first_section_title'  => 'required',
            'first_section_text'  => 'required',

            'second_section_title_card_one'  => 'required',
            'second_section_text_card_one'  => 'required',

            'second_section_title_card_two'  => 'required',
            'second_section_text_card_two'  => 'required',

            'second_section_title_card_three'  => 'required',
            'second_section_text_card_three'  => 'required',

            'third_section_title_card_one'  => 'required',
            'third_section_text_card_one'  => 'required',

            'third_section_title_card_two'  => 'required',
            'third_section_text_card_two'  => 'required',

            'third_section_title_card_three'  => 'required',
            'third_section_text_card_three'  => 'required',

            'third_section_title_card_four'  => 'required',
            'third_section_text_card_four'  => 'required',

            'fourth_section_title'  => 'required',
            'fourth_section_text'  => 'required',

        ]);

        $loop_array = [
            [
                'header',
                'header_title' ,
                'header_text'  ,
                'header_image'  ,
            ],

            [
                'first_section',
                'first_section_title',
                'first_section_text',
                'first_section_image',
            ],

            [
                'second_section_card_one',
                'second_section_title_card_one',
                'second_section_text_card_one',
                'second_section_image_card_one',
            ],

            [
                'second_section_card_two',
                'second_section_title_card_two',
                'second_section_text_card_two',
                'second_section_image_card_two',
            ],

            [
                'second_section_card_three',
                'second_section_title_card_three',
                'second_section_text_card_three',
                'second_section_image_card_three',
            ],

            [
                'third_section_card_one',
                'third_section_title_card_one',
                'third_section_text_card_one',
                'third_section_image_card_one',
            ],

            [
                'third_section_card_two',
                'third_section_title_card_two',
                'third_section_text_card_two',
                'third_section_image_card_two',
            ],

            [
                'third_section_card_three',
                'third_section_title_card_three',
                'third_section_text_card_three',
                'third_section_image_card_three',
            ],

            [
                'third_section_card_four',
                'third_section_title_card_four',
                'third_section_text_card_four',
                'third_section_image_card_four',
            ],

            [
                'fourth_section',
                'fourth_section_title',
                'fourth_section_text',
                'fourth_section_video',
            ]

        ];

        foreach($loop_array as $key => $property) {
            // dd(Card::where('name', $property[0])->count());
            if(Card::where('name', $property[0])->count() !== 0)
                $card = Card::where('name', $property[0])->update([
                    'name'  => $property[0],
                    'title' => $attributes[$property[1]],
                    'content' => $attributes[$property[2]],
                    'location' => 'home',
                ]);
            else
                $card = Card::create([
                    'name'  => $property[0],
                    'title' => $attributes[$property[1]],
                    'content' => $attributes[$property[2]],
                    'location' => 'home',
                ]);

            if(request($property[3]) != null) {

                // dd(request($property[3]));

                $imageName = time(). '_home.' . request($property[3])->getClientOriginalName();;
           
                if(request($property[3])->move(public_path('images/home'), $imageName)) {
                    Card::where('name', $property[0])->update([
                        'image' => $imageName
                    ]);
                }
            }

  
        }

        return redirect()->back()->with('message','Operation Successful !');
    }
}
