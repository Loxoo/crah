
@include('include.header')
@include('include.footer')

<!DOCTYPE html>
<HTML lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/HTML;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>CRAH</title>

        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/bootstrap-toggle.min.css') !!}
        {!! Html::style('css/jquery-ui.min.css') !!}
        {!! Html::style('css/jquery-ui.structure.css') !!}
        {!! Html::style('css/jquery-ui.theme.css') !!}
        {!! Html::style('css/main.css') !!}
        {!! Html::style('css/jquery.dataTables.css') !!}
        {!! Html::style('css/bootstrap-material-datetimepicker.css') !!}
        {!! Html::style('css/animate.css') !!}


        @section('css-imports')
        @show

        @section('html-imports')
        @show

    </head>

    <body>

        @yield('header')
        <div id="wrapper" class="content">
            <div id="content" class="container-fluid">
                <div class="error">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Erreur ! </strong>{!! Session::get('error') !!}
                    </div>
                    @endif
                </div>

                @include('include.success-errors')

                @yield('content')
            </div>
        </div>

    </body>

    @yield('footer')


    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/jquery-ui.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.ui.datepicker-fr.js') !!}
    {!! Html::script('js/jquery.dataTables.min.js') !!}
    {!! Html::script('js/bigSlide.min.js') !!}
    {!! Html::script('js/readonly.js') !!}
    {!! Html::script('js/script.js') !!}
    {!! Html::script('js/laravel-bootstrap-modal-form.js') !!}
    {!! Html::script('js/moment.js') !!}
    {!! Html::script('js/bootstrap-material-datetimepicker.js') !!}
    {!! Html::script('js/jquery.fittext.js') !!}
    {!! Html::script('js/jquery.lettering.js') !!}
    {!! Html::script('js/jquery.textillate.js') !!}


    @section('js-import')
    @show

    @section('js-script')
    @show

    @section('scripts-init')
    @show
</HTML>