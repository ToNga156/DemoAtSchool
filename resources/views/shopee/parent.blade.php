<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | E-Shopper</title>
    <link href="eshopper/eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="eshopper/eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="eshopper/eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="eshopper/eshopper/css/price-range.css" rel="stylesheet">
    <link href="eshopper/eshopper/css/animate.css" rel="stylesheet">
	<link href="eshopper/eshopper/css/main.css" rel="stylesheet">
	<link href="eshopper/eshopper/css/responsive.css" rel="stylesheet">   
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    @include('shopee.header');
    <div class="container">
        @yield('shopee.content')
    </div>
    @include('shopee.footer');
    @include('shopee.script');
</body>
</html>