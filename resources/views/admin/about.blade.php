@extends('layouts.admin', ['page_name' => 'About Us'] )

@section('contents')
@foreach($cards as $card)
@if($card['name'] == 'first_section')
    <div class="input-group">
        <h1>First Section</h1>
        <div class="input flex-col">
            <label for="first_section_title"> Section Title</label>
            <input type="text" name = 'first_section_title' value = '{{$card['title']}}'>
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
            <label for="first_section_sub_title"> Section Sub Title</label>
            <input type="text" name = 'first_section_sub_title' value = '{{$card['sub_title']}}'>
            @error('first_section_sub_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="first_section_sub_text"> Section Sub Text</label>
            <textarea name = 'first_section_sub_text' >{{$card['sub_content']}}</textarea>
            @error('first_section_sub_text')
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


@if($card['name'] == 'second_section')
    <div class="input-group">
        <h1>Second Section</h1>
        <div class="input flex-col">
            <label for="second_section_title"> Section Title</label>
            <input type="text" name = 'second_section_title' value = '{{$card['title']}}'>
            @error('second_section_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_text"> Section Text</label>
            <textarea name = 'second_section_text' >{{$card['content']}}</textarea>
            @error('second_section_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_sub_title"> Section Sub Title</label>
            <input type="text" name = 'second_section_sub_title' value = '{{$card['sub_title']}}'>
            @error('second_section_sub_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_sub_text"> Section Sub Text</label>
            <textarea name = 'second_section_sub_text' >{{$card['sub_content']}}</textarea>
            @error('second_section_sub_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="second_section_image"> Section Image</label>
            <input type="file" accept="images/*" name = 'second_section_image'>
            @error('second_section_image')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@if($card['name'] == 'third_section')

    <div class="input-group">
        <h1>Third Section</h1>
        <div class="input flex-col">
            <label for="third_section_title"> Section Title</label>
            <input type="text" name = 'third_section_title' value = '{{$card['title']}}'>
            @error('third_section_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_text"> Section Text</label>
            <textarea name = 'third_section_text' >{{$card['content']}}</textarea>
            @error('third_section_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_sub_title"> Section Sub Title</label>
            <input type="text" name = 'third_section_sub_title' value = '{{$card['sub_title']}}'>
            @error('third_section_sub_title')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_sub_text"> Section Sub Text</label>
            <textarea name = 'third_section_sub_text' >{{$card['sub_content']}}</textarea>
            @error('third_section_sub_text')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="input flex-col">
            <label for="third_section_image"> Section Image</label>
            <input type="file" accept="images/*" name = 'third_section_image'>
            @error('third_section_image')
                <div class="error">
                    {{$message}}
                </div>
            @enderror
        </div>    
    </div>
@endif

@endforeach

    <div class="input-group">
        <h1>Our Heros Section</h1>

        <div class="heros">
            @foreach ($heros as $hero)
                <div class="card">

                    <h3>Hero</h3>
                    <div class="input flex-col">
                        <label for="position"> Position</label>
                        <input type="text" name = "heros[{{$loop->index}}][position]" value = '{{$hero->title}}'>
                        @error('position')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="input flex-col">
                        <label for="name"> Name</label>
                        <input type="text" name = "heros[{{$loop->index}}][name]" value = '{{$hero->content}}'>
                        @error('name')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
            
                    <div class="input flex-col">
                        <label for="image"> Card Image</label>
                        <input type="file" accept="images/*" name = "heros[{{$loop->index}}][image]">
                        @error('image')
                            <div class="error">
                                {{$message}}
                            </div>
                        @enderror
                        <a style = 'color: blue; text-decoration: underline;' onclick = 'this.closest(".card").remove();'>Remove Hero</a>
                    </div> 

        
                </div>
            @endforeach
        </div>

        <div class="input">
            <div class = 'button' onclick = 'event.preventDefault(); new_hero();'>New Hero</div>
        </div>
    
    </div>


@endsection


@section('scripts')

    <script>
        let card_blueprint = `
        <div class="card">

            <h3>Hero</h3>
            <div class="input flex-col">
                <label for="position"> Position</label>
                <input type="text" name = "heros[{index}][position]" >
                @error('heros.*.position')
                    <div class="error">
                        please provide the position of your hero
                    </div>
                @enderror
            </div>

            <div class="input flex-col">
                <label for="name"> Name</label>
                <input type="text" name = "heros[{index}][name]" >
                @error('heros.*.name')
                    <div class="error">
                        please provide the name of your hero
                    </div>
                @enderror
            </div>

            <div class="input flex-col">
                <label for="image"> Card Image</label>
                <input type="file" accept="images/*" name = "heros[{index}][image]">
                @error('heros.*.image')
                    <div class="error">
                        {{$message}}
                    </div>
                @enderror

                <a style = 'color: blue; text-decoration: underline;' onclick = 'this.closest(".card").remove();'>Remove Hero</a>
            </div> 


        </div>
        `;


        function new_hero() {
            select('.heros').insertAdjacentHTML('beforeend', card_blueprint.replaceAll('{index}', selectAll('.card').length));
            select('.screen').scrollTop = select('.screen').scrollHeight;
        }

        
    </script>
@endsection

