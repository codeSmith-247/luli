@props([
    'title' => 'LULI'
])

<title>{{$title}}</title>
<link rel = 'stylesheet' href = '{{asset("styles/general.css")}}'>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src = '{{asset("js/general.js")}}' defer></script>