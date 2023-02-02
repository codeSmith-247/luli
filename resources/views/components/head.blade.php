@props([
    'title' => 'LULI'
])

<title>{{$title}}</title>
<link rel = 'stylesheet' href = '{{asset("styles/general.css")}}'>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src = '{{asset("js/general.js")}}' defer></script>

<meta property="og:title" content="Luli Champions of Hope">
<meta property="og:site_name" content="Luli Champions of Hope">
<meta property="og:url" content="https://lulichampionsofhope.org">
<meta property="og:description" content="To care for our kids and young ones, indeed the future of the Nigerian youth through education and empowerment! " >
<meta property="og:type" content="Books">
<meta property="og:image" content="{{asset('/images/logo.png')}}">
<link rel="icon" type="image/x-icon" href="{{asset('/images/logo.png')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>


<meta property="twitter:card" content="{{asset('/images/logo.png')}}">
<meta property="twitter:url" content="https://lulichampionsofhope.org">
<meta property="twitter:title" content="Luli Champions of Hope">
<meta property="twitter:description" content="To care for our kids and young ones, indeed the future of the Nigerian youth through education and empowerment!">
<meta property="twitter:image" content="{{asset('/images/logo.png')}}">
