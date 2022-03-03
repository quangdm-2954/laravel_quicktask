<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <link rel="stylesheet" as="style" type="text/css" media="screen" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/animate-css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/template_package/assets/css/light-bootstrap-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('components/template_package/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('components/components-font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/toastr/toastr.css/') }}" />
</head>

<body>

    <div class="wrapper">
        @include('layouts.slidebar')
        <div class="main-panel">
            @include('layouts.navbar')
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('components/template_package/assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/template_package/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('components/template_package/assets/js/light-bootstrap-dashboard.js') }}"></script>
    <script src="{{ asset('components/template_package/assets/js/demo.js') }}"></script>
    <script src="{{ asset('components/toastr/toastr.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    @if (Session::has('success'))
        <script>
            toastr.success("{{ session('success') }}")
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            toastr.error("{{ session('error') }}")
        </script>
    @endif
    <script src='https://cdn.tiny.cloud/1/lmcwwu69xgm60zan5ye3y876o5jddkjhws6fwv5pale92yzt/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
      tinymce.init({
        height: 400,
        selector: 'textarea.tinymce-editor'
      });
    </script>

</body>

</html>
