@extends('layouts.admin', ['page_name' => 'Contact Us'] )

@section('contents')

<div class="input-group">
        <h1>Contact Us</h1>

        @foreach ($contacts as $contact)
            @if ($contact['title'] == 'location')
                <div class="input flex-col">
                    <label for="location"> Location</label>
                    <input type="text" name = 'location' value = '{{$contact["content"]}}'>
                    @error('location')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            @endif

            @if ($contact['title'] == 'phone')
                <div class="input flex-col">
                    <label for="phone"> Phone Number</label>
                    <input type="text" name = 'phone' value = '{{$contact["content"]}}'>
                    @error('phone')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            @endif

            @if ($contact['title'] == 'email')
                <div class="input flex-col">
                    <label for="email"> Email</label>
                    <input type="email" name = 'email' value = '{{$contact["content"]}}'>
                    @error('email')
                        <div class="error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            @endif
        @endforeach

        
    </div>


@endsection

