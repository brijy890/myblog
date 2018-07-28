<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MyBlog | My Awesome Blog')</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="web/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/custom.css">

    @stack('css')

</head>
<body>

	@include('web.layouts.partials.header')

	<div class="container">
        <div class="row">
        	@yield('content')

        	@include('web.layouts.partials.sidebar')
        </div>
    </div>

 	@include('web.layouts.partials.footer')

</body>
</html>