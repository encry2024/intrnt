<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Intranet</title>

    {{-- <link rel="stylesheet" href="{{ URL::to('/') }}/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"> --}}
    <link rel="stylesheet" href="{{ URL::to('/') }}/bootstrap-3.3.7-dist/css/bootstrap.css">
</head>

<body id="app-layout">

@yield('content')
<script>
    jQuery(document).ready(function($) {
        jQuery('#accordion').dcAccordion();
    });

    alertify.set('notifier','position', 'top-right');
</script>

<style>
    body {
        background-color: white;
        font-family: "Droid Sans","Droid Arabic Kufi","Helvetica Neue","Helvetica","Arial",sans-serif !important;
    }
</style>
</body>
</html>
