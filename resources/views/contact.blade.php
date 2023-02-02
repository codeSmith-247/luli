@extends('layouts.default')

@section('styles')
    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/contact.css")}}'>
@endsection

@section('contents')

    <section class = 'full-w p-rel'>

        <div class="left-right p-rel z-2">
            <div class="left flex-col-center text-center">
                <h1 class = "text-center">Contact Us</h1>

                    @foreach ($contacts as $contact)
                        @if ($contact['title'] == 'location')
                            <p class = ''> 
                                <b>Location:</b> <br>
                                <span>
                                    {{$contact["content"]}}
                                </span>
                            </p>
                        @endif

                        @if ($contact['title'] == 'phone')
                            <p class = ''> 
                                <b>Phone Number:</b> <br>
                                <span>
                                    {{$contact["content"]}}

                                </span>
                            </p>
                        @endif

                        @if ($contact['title'] == 'email')
                            <p class = ''> 
                                <b>Email:</b> <br>
                                <span>
                                    {{$contact["content"]}}
                                </span>
                            </p>
                        @endif
                    @endforeach
            </div>
            
            <div class="right">
                <form action="">
                    <div class="input text-center">
                        <h2>Send A Message</h2>
                    </div>
                    <div class="input flex-col">
                        <label for="email"></label>
                        <input type="email" name = 'email' placeholder="e.g luli@gmail.com">
                    </div>

                    <div class="input flex-col">
                        <label for="email"></label>
                        <textarea name="" placeholder="Type your message here..."></textarea>
                    </div>

                    <div class="input flex-col">
                        <button>Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <div class = 'bg p-abs top-left full-hw z-1'>
            <img src = '{{asset('/images/map_outline.jpg')}}' class = 'obj-fit'>
        </div>
    </section>

@endsection