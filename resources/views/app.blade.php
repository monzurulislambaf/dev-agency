
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Techie Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @include('partials.style')

<body class="index-page">
@include('partials.navbar')
<main class="main">
    <!-- Hero Section -->
@yield('content')
    @include('partials.footer')
</main>
<!-- Scroll Top -->
<a href="{{ url("#") }}" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
{{--<div id="preloader"></div>--}}
@include('partials.script')
</body>
</html>
