<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <!-- Title -->
        <title>Casa Ronald | @yield('title')</title>
        <!-- Meta content -->
        <meta content="@yield('description-page')" name='description'>
        <meta content="Allegue" name="author" />
        <meta content='Casa Ronald McDonald México' name='keywords'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta property="og:title" content="@yield('titule-og')">
        <meta property="og:type" content="website">
        <meta property="og:description" content="@yield('description-og')">
        <!--meta property="og:image" content="images/og.png"-->
        <meta property="og:site_name" content="Expediente electrónico | Casa Ronald McDonald ">
        <!--meta name="twitter:image:src" content="https://omri.org.mx/images/og.png"-->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Favicon -->
        <link rel='shortcut icon' href="{{ asset('public/favicon.ico') }}"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" media="print" onload="this.media='all'">
        <!-- Style Sheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
        <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet'>

        <!-- FAVICON AND APPLE TOUCH -->
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel='shortcut icon' href="{{asset('favicon.ico')}}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.ico')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <!-- BEGIN SCRIPTS -->
        <script language="JavaScript" type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery.slides.js') }}" defer></script>

        <!-- Bootstrap crazy things -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- DataTable Stuff -->
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <!-- toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
        
        <!-- estilos prrones -->
        <link href="{{asset('css/style.css')}}" rel='stylesheet'>
        <link href="{{asset('css/style.css')}}" rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/slider.css')}}">
        <link rel="stylesheet" href="{{asset('css/fondo.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu_registros.css')}}">
        
    </head>
    <body>
    	@yield('content')
    </body>
</html>