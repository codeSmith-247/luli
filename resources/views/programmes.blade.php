@extends('layouts.default')

@section('styles')
    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/programmes.css")}}'>
@endsection

@section('contents')

    <h1 class = 'title'>Our Programs</h1>

    <section class = 'cards p-rel'>

        @foreach ($programmes as $programme )
            <div class = 'card p-rel'>
                <div class="image full-hw p-rel">
                    <img src="{{asset("images/luli_3.jpeg")}}" alt="" class="obj-fit">
                    <div class = 'overlay p-abs top-left full-hw'></div>
                </div>

                <div class = 'content p-abs btm-left full-w'>
                    <h1>{{$programme['title']}}</h1>
                    <p>
                        {{$programme['content']}}
                    </p>

                    <button>Donate</button>
                </div>
            </div>
        @endforeach
        
        {{-- <div class = 'card p-rel'>
            <div class="image full-hw p-rel">
                <img src="{{asset("images/luli_3.jpeg")}}" alt="" class="obj-fit">
                <div class = 'overlay p-abs top-left full-hw'></div>
            </div>

            <div class = 'content p-abs btm-left full-w'>
                <h1>School Supplies Drive</h1>
                <p>
                    Collection of educational materials such as books, stationeries, and backpacks for underprivileged students.
                </p>

                <button>Donate</button>
            </div>
        </div>

        <div class = 'card p-rel'>
            <div class="image full-hw p-rel">
                <img src="{{asset("images/luli_2.jpeg")}}" alt="" class="obj-fit">
                <div class = 'overlay p-abs top-left full-hw'></div>
            </div>

            <div class = 'content p-abs btm-left full-w'>
                <h1>Financial Aid Program</h1>
                <p>
                    Providing monetary assistance to families in need to pay for school fees and other educational expenses.
                </p>

                <button>Donate</button>
            </div>
        </div>
        
        <div class = 'card p-rel'>
            <div class="image full-hw p-rel">
                <img src="{{asset("images/luli.jpeg")}}" alt="" class="obj-fit">
                <div class = 'overlay p-abs top-left full-hw'></div>
            </div>

            <div class = 'content p-abs btm-left full-w'>
                <h1>Teacher Training Initiative</h1>
                <p>
                    Offering training and support to educators in underfunded schools to improve the quality of education.
                </p>

                <button>Donate</button>
            </div>
        </div>

        <div class = 'card p-rel'>
            <div class="image full-hw p-rel">
                <img src="{{asset("images/luli_3.jpeg")}}" alt="" class="obj-fit">
                <div class = 'overlay p-abs top-left full-hw'></div>
            </div>

            <div class = 'content p-abs btm-left full-w'>
                <h1>School Supplies Drive</h1>
                <p>
                    Collection of educational materials such as books, stationeries, and backpacks for underprivileged students.
                </p>

                <button>Donate</button>
            </div>
        </div> --}}
    </section>
@endsection