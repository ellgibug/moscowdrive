<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="robots" content="all">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="assets/img/icon-point.png">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
<link rel="stylesheet" href="assets/css/preload.min.css">
<link rel="stylesheet" href="assets/css/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.pink-300.min.css">
<link rel="stylesheet" href="assets/css/width-boxed.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto+Condensed:300,400&amp;subset=cyrillic" rel="stylesheet">
<style>
*{font-family:'Roboto Condensed', sans-serif;font-weight:300}h1,h2,h3,h4,h5,h6{font-family:Oswald,sans-serif;color:#212529}p,a,li{font-size:18px;line-height:1.8em}p,li{color:#212529}.ms-site-container{background-color:#fff!important;}.color-light{color:#f5f5f5}.table-error-container{color:#323232}.table-error-container tr td{border-color:#757575!important}.fw-700{font-weight:700!important;}.fw-500{font-weight:500!important;}.bg-white{background:white!important;}.fs-16{font-size:16px !important;}span{font-family:inherit!important;}body{background-attachment:fixed;background-repeat:no-repeat;background-image:url(public/assets/img/bg-04.png);background-color:rgba(255,255,255,0.5)}
</style>
@yield('styles')
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>