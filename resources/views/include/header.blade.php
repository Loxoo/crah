@section('header')
<div class="container-fluid bg-leonardo border border-top-0 border-left-0 border-right-0 border-dark">
    <div class="row justify-content-md-center">
        <div class="col-8">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">CRAH</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Gestion des utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index') }}">Gestion des rôles</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
@stop
