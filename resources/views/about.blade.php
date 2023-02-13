@extends('layouts.default')

@section('styles')
    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/about.css")}}'>
@endsection

@section('contents')

@foreach ($cards as $card)
    @if($card['name'] == 'second_section')
        <div class = 'split'>

            <div class = "right">
                <h1>{{$card['title']}}</h1>

                <p>
                    {{$card['content']}}
                </p>

                <h2>{{$card['sub_title']}}</h2>

                <p>
                    {{$card['sub_content']}}
                </p>

            </div>

            <div class = 'left'>
                <img src="{{asset("images/about/" . ($card['image'] ?? "luli_2.jpeg"))}}" alt="" class="obj-fit">
            </div>
        </div>
    @else 
        <div class = 'split'>
            <div class = 'left'>
                <img src="{{asset("images/about/" . ($card['image'] ?? "luli_5.jpeg"))}}" alt="" class="obj-fit">
            </div>
            <div class = "right">
                <h1>{{$card['title']}}</h1>

                <p>
                    {{$card['content']}}
                </p>

                <h2>{{$card['sub_title']}}</h2>

                <p>
                    {{$card['sub_content']}}
                </p>
            </div>
        </div>
    @endif
@endforeach
    {{-- <div class = 'split'>
        <div class = 'left'>
            <img src="{{asset("images/luli_5.jpeg")}}" alt="" class="obj-fit">
        </div>
        <div class = "right">
            <h1>About Luli Champions</h1>

            <p>
                The Luli-Champions of Hope Charity was founded in June 2022 with a mission to empower the future of Nigeria's youth through education. Our goal is to provide quality, affordable education to all children, regardless of their socio-economic status or background. To achieve this, we partner with stakeholders in the education sector
            </p>

            <h2>Our Mission</h2>

            <p>
                Our mission is to care for the future of the Nigerian youth through education and empowerment. We believe that quality, affordable education should be accessible to all children, regardless of socio-economic background.
            </p>
        </div>
    </div>

    <div class = 'split'>

        <div class = "right">
            <h1>What Is Our Objectives?</h1>

            <p>
                Our objectives include partnering with educational institutions to provide necessary resources for sustainable learning environments. This includes donating books, uniforms, and teaching materials. We aim to continually assess our performance and make changes as needed to achieve our goals.
            </p>

            <h2>Our Impact</h2>

            <p>
                So far, we have partnered with six schools, both private and public, to explore collaboration opportunities. We have also provided 236 school uniforms and over 1,000 textbooks for the 2022-2023 academic year. We have installed water pumps at two schools to address water shortages and have provided audio-visual aids to improve learning and comprehension.
            </p>

        </div>

        <div class = 'left'>
            <img src="{{asset("images/luli_2.jpeg")}}" alt="" class="obj-fit">
        </div>
    </div>

    <div class = 'split'>
        <div class = 'left'>
            <img src="{{asset("images/luli_5.jpeg")}}" alt="" class="obj-fit">
        </div>
        <div class = "right">
            <h1>Join the Movement for Educational Empowerment</h1>

            <p>
                The government efforts alone are insufficient to meet local needs, and the level of need is desperate. Without meaningful steps, the educational futures of these children will be greatly compromised, leading to poverty and lack. We need your help through donations to make a meaningful impact.
            </p>

            <h2>Empower the Future</h2>

            <p>
                Be a Champion of Hope and help shape the future of the Nigerian youth. Your support can make a real difference in the lives of children in need. Join us in our mission to provide quality education and empower the future generation.
            </p>
        </div>
    </div> --}}

    <section>
        <h1 class="text-center">Our Champions</h1>

        <div class = 'cards'>
            @php($champs = [
                [
                    'title' => 'President',
                    'name' => 'Dr. Adedeji ADEFUYE, MD'
                ],

                [
                    'title' => 'Chairman',
                    'name' => 'Evangelist John Maforikan'
                ],

                [
                    'title' => 'Treasurer and Secretary',
                    'name' => 'Evangelist S. Olalekan Gbadamosi'
                ],

                [
                    'title' => 'Deputy Treasurer',
                    'name' => 'Mr. Edward Elendu'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Ms. Temitope Odunfa-Jones'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Mr. Femi Lawson'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Mr. Jide Kotun'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Mr. Diran Fatokun'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Mr. Tunde Sonubi'
                ],

                [
                    'title' => 'Member',
                    'name' => 'Mr. Oluwaseun Olawunmi'
                ],
            ])
            @foreach($heros as $hero)
            
                <div class="card">
                    <div class="image" style = 'background: transparent;'>
                        <img src="{{asset("images/about/" . ($hero['image'] ?? "luli_2.jpeg"))}}" alt="" class="obj-fit" style = 'object-fit: contain;'>

                    </div>
                    <div class="name text-center">
                        <b>
                            {{$hero['title']}}
                        </b>

                        <br>

                        <span>
                            {{$hero['content']}}
                        </span>
                    </div>
                </div>
                
            @endforeach
        </div>

    </section>
@endsection