
    

    <nav class = 'p-fix top-left full-w z-5 flex-row flex-between'>
        <div class = 'left flex-row'>
            <div class="logo">
                <img src = '{{asset("images/logo_rm.png")}}' class = 'obj-fit'>
            </div>

            @php( $nav_items = [
                [
                    'name' => 'Home',
                    'link' => route('home'),
                ],

                [
                    'name' => 'Who we are',
                    'link' => route('about'),
                ],

                [
                    'name' => 'Programs',
                    'link' => route('programmes'),
                ],

                [
                    'name' => 'Contact Us',
                    'link' => route('contact'),
                ],
            ])

            <div class = 'nav flex-row desktop'>
                @foreach ($nav_items as $nav_item)
                    <div class="nav-item" onclick = 'location.href = "{{$nav_item["link"]}}"'>
                        {{$nav_item['name']}}
                    </div>
                @endforeach
            </div>

        </div>

        <div class="right flex-row">
            <button class = 'flex-row flex-center' onclick = 'donate();'>
                <i class="bi bi-heart-fill"></i>
                <span>Make a donation</span>
            </button>
            <div class = 'menu-btn flex-center' onclick="toggle('.menu');">
                <i class="bi bi-list"></i>
            </div>
        </div>

        <div class = 'menu p-fix top-right full-vhw flex-col flex-center'>

            <div class="top flex-center">
                <i class = 'bi bi-x-lg' onclick="toggle('.menu');"></i>
            </div>

            <div class="content flex-col flex-center">
                @foreach ($nav_items as $nav_item)
                    <div class="menu-item" onclick = 'location.href = "{{$nav_item["link"]}}"'>
                        {{$nav_item['name']}}
                    </div>
                @endforeach
            </div>
        </div>

    </nav>