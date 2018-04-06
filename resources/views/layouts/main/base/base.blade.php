<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.main.base.link_bootstrap')
</head>

<body>
@include('layouts/main/base/navigation')
<div class="container">
    <div class=" check1 col-md-12">
        <div class=" check2 col-md-9">
            @yield('body')
        </div>
        @include('layouts/main/base/sidebar')
    </div>
</div>
@include('layouts/main/base/footer')
<script src={{asset('js/form.js')}}></script>
</body>
@include('layouts.main.base.link_js')
</html>
