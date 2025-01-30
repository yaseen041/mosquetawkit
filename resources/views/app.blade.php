<!DOCTYPE html>
<html lang='SA'>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>@yield('title') &#8211; {{ get_section_content('project', 'site_title') }}</title>
    @include('common.styles')
    <script src="{{ asset('assets/ayats7.js') }}"></script>
    <script src="{{ asset('assets/admin/wtimes/1-data52b7.js') }}"></script>
</head>

<body onload='_cadro();' onresize='_cadro();'>
    @include('common.header')
    @yield('content')
    @include('common.footer')
    @include('common.scripts')

</body>
</html>

