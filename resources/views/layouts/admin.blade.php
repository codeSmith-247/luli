<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-head/>

    <title>NGO</title>

    <link rel="stylesheet" href="{{asset('styles/dashboard.css')}}">

    @yield('styles')

</head>
<body>


    <section>
        <div class = 'menu'>
            <div class="close-btn flex-row flex-end mobile" onclick = 'toggle("section")'>
                <i class="bi bi-x-lg"></i>
            </div>
            <div class="top flex-center">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" alt="" class="obj-fit">
                </div>
            </div>

            @php($menu_items = [
                [
                    'name' => 'Home',
                    'link' => route('home_settings'),
                    'icon' => 'bi bi-house'
                ],

                [
                    'name' => 'About Us',
                    'link' => route('about_settings'),
                    'icon' => 'bi bi-people'
                ],

                [
                    'name' => 'Programmes',
                    'link' => route('program_settings'),
                    'icon' => 'bi bi-tree'
                ],

                [
                    'name' => 'Contact Us',
                    'link' => route('contact_settings'),
                    'icon' => 'bi bi-telephone'
                ],
            ])

            {{-- @php(
                $page_name = $page_name ?? ''
            ) --}}

            <div class="menu-items">
                @foreach ($menu_items as $menu_item)
                    <div @class(["menu-item flex-row $page_name", 'active' => $menu_item['name'] == $page_name]) onclick = 'location.href = "{{$menu_item["link"]}}";'>
                        <div class="icon flex-center">
                            <i class="{{$menu_item['icon']}}"></i>
                        </div>
                        <div class="text">{{$menu_item['name']}}</div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-area">
            <nav class = 'flex-row flex-between'>
                <div class="menu-btn flex-center" onclick = 'toggle("section")'>
                    <i class="bi bi-list"></i>
                </div>
            </nav>

            <form method = 'post' enctype="multipart/form-data" class="screen">
                @csrf

                @yield('contents')

                <button type="submit" class = 'p-fix'>Update Content</button>
                
            </div>
        </div>
    </section>


</body>
</html>

@yield('scripts')

<script>
    @if(isset($message))
        Swal.fire({
            icon: 'success',
            title: 'Content Updated',
        });
    @endif
</script>