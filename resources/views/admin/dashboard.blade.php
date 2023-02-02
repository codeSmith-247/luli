@extends('layouts.admin', ['page_name' => 'Home'] )



@section('contents')

@foreach ($cards as $card)
    
@if ($card['name'] == 'header')
    <div class="input-group">
        <h1>Header</h1>
        <div class="input flex-col">
            <label for="header_title"> Title</label>
            <input type="text" name = 'header_title' value = '{{$card['title']}}' >
            @error('header_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="header_text"> Text</label>
            <textarea name = 'header_text' >{{$card['content']}}</textarea>
            @error('header_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="header_image"> Image</label>
            <input type="file" accept="images/*" name = 'header_image'>
            @error('header_image')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@if ($card['name'] == 'first_section')
    <div class="input-group">
        <h1>First Section</h1>
        <div class="input flex-col">
            <label for="first_section_title"> Section Title</label>
            <input type="text" name = 'first_section_title' value = '{{$card['title']}}' >
            @error('first_section_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="first_section_text"> Section Text</label>
            <textarea name = 'first_section_text' >{{$card['content']}}</textarea>
            @error('first_section_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="first_section_image"> Section Image</label>
            <input type="file" accept="images/*" name = 'first_section_image'>
            @error('first_section_image')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@if ($card['name'] == 'second_section_card_one')
    <div class="input-group">
        <h1>Second Section</h1>

        <h3>Card One</h3>
        <div class="input flex-col">
            <label for="second_section_title_card_one"> Card Title</label>
            <input type="text" name = 'second_section_title_card_one' value = '{{$card['title']}}' >
            @error('second_section_title_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">title
            <label for="second_section_text_card_one"> Card Text</label>
            <textarea name = 'second_section_text_card_one' >{{$card['content']}}</textarea>
            @error('second_section_text_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_image_card_one"> Card Image</label>
            <input type="file" accept="images/*" name = 'second_section_image_card_one'>
            @error('second_section_image_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div> 

    @endif

    @if ($card['name'] == 'second_section_card_two')

        <h3>Card Two</h3>
        <div class="input flex-col">
            <label for="second_section_title_card_two"> Card Title</label>
            <input type="text" name = 'second_section_title_card_two' value = '{{$card['title']}}'>
            @error('second_section_title_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_text_card_two"> Card Text</label>
            <textarea name = 'second_section_text_card_two' >{{$card['content']}}</textarea>
            @error('second_section_text_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_image_card_two"> Card Image</label>
            <input type="file" accept="images/*" name = 'second_section_image_card_two'>
            @error('second_section_image_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div> 
    @endif

    @if ($card['name'] == 'second_section_card_three')

        <h3>Card Three</h3>
        <div class="input flex-col">
            <label for="second_section_title_card_three"> Card Title</label>
            <input type="text" name = 'second_section_title_card_three' value = '{{$card['title']}}' >
            @error('second_section_title_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_text_card_three"> Card Text</label>
            <textarea name = 'second_section_text_card_three' >{{$card['content']}}</textarea>
            @error('second_section_text_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_image_card_three"> Card Image</label>
            <input type="file" accept="images/*" name = 'second_section_image_card_three'>
            @error('second_section_image_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@if ($card['name'] == 'third_section_card_one')

    <div class="input-group">
        <h1>Third Section</h1>

        <h3>Card One</h3>
        <div class="input flex-col">
            <label for="third_section_title_card_one"> Card Title</label>
            <input type="text" name = 'third_section_title_card_one' value = '{{$card['title']}}'>
            @error('third_section_title_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_text_card_one"> Card Text</label>
            <textarea name = 'third_section_text_card_one' >{{$card['content']}}</textarea>
            @error('third_section_text_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_image_card_one"> Card Image</label>
            <input type="file" accept="images/*" name = 'third_section_image_card_one'>
            @error('third_section_image_card_one')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div> 
@endif

@if ($card['name'] == 'third_section_card_two')

        <h3>Card Two</h3>
        <div class="input flex-col">
            <label for="third_section_title_card_two"> Card Title</label>
            <input type="text" name = 'third_section_title_card_two' value = '{{$card['title']}}'>
            @error('third_section_title_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_text_card_two"> Card Text</label>
            <textarea name = 'third_section_text_card_two' >{{$card['content']}}</textarea>
            @error('third_section_text_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_image_card_two"> Card Image</label>
            <input type="file" accept="images/*" name = 'third_section_image_card_two'>
            @error('third_section_image_card_two')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div> 

@endif


@if ($card['name'] == 'third_section_card_three')

        <h3>Card Three</h3>
        <div class="input flex-col">
            <label for="third_section_title_card_three"> Card Title</label>
            <input type="text" name = 'third_section_title_card_three' value = '{{$card['title']}}'>
            @error('third_section_title_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_text_card_three"> Card Text</label>
            <textarea name = 'third_section_text_card_three' >{{$card['content']}}</textarea>
            @error('third_section_text_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_image_card_three"> Card Image</label>
            <input type="file" accept="images/*" name = 'third_section_image_card_three'>
            @error('third_section_image_card_three')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>  
@endif


@if ($card['name'] == 'third_section_card_four')

        <h3>Card Four</h3>
        <div class="input flex-col">
            <label for="third_section_title_card_four"> Card Title</label>
            <input type="text" name = 'third_section_title_card_four' value = '{{$card['title']}}'>
            @error('third_section_title_card_four')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_text_card_four"> Card Text</label>
            <textarea name = 'third_section_text_card_four' >{{$card['content']}}</textarea>
            @error('third_section_text_card_four')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_image_card_four"> Card Image</label>
            <input type="file" accept="images/*" name = 'third_section_image_card_four'>
            @error('third_section_image_card_four')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>  
    </div>
@endif

@if ($card['name'] == 'fourth_section')

    <div class="input-group">
        <h1>Fourth Section</h1>
        <div class="input flex-col">
            <label for="fourth_section_title"> Section Title</label>
            <input type="text" name = 'fourth_section_title' value = '{{$card['title']}}'>
            @error('fourth_section_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="fourth_section_text"> Section Text</label>
            <textarea name = 'fourth_section_text' >{{$card['content']}}</textarea>
            @error('fourth_section_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="fourth_section_video"> Section Video</label>
            <input type="file" accept="video/*" name = 'fourth_section_video'>
            @error('fourth_section_video')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@endforeach

@endsection