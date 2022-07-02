<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Ayo Donor</title>
    @include('layout.head')
</head>
<body>

@include('layout.navbar')

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mt-3 mx-5">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block mt-3 mx-5">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<div id="main" class="row">

    @yield('content')

</div>

<footer>
    @include('layout.footer')
</footer>

<script>
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
</script>

</body>
</html>
