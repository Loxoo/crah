@include('include.header')
@include('include.footer')

<!DOCTYPE html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/HTML;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRAH</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/main.css') !!}
    </head>

    <body>
        <!-- ici espace pour le header-->
        @yield('header')
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-8 p-4">
                    @yield('content')
                </div>	
            </div>
        </div>
    </body>

    @yield('footer')

    {!! Html::script('js/bootstrap.js') !!}
	<script src="https://use.fontawesome.com/e44f882a4b.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @section('js-script')
    @show

</html>