<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafiles</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/frontend-custom.css" rel="stylesheet">
</head>
<body>
@include('frontend.partials.nav')
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/frontend.js"></script>

</body>
</html>