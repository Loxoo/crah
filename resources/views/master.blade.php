@include('include.header')
@include('include.footer')

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/HTML;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>CRAH</title>
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/main.css') !!}
    </head>

    <body>
        <!-- ici espace pour le header-->
        @yield('header')
        <section class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    @yield('content')
                </div>	
            </div>
        </section>
    </body>

    @yield('footer')

    {!! Html::script('js/bootstrap.js') !!}

    @section('js-script')
    @show

</html>