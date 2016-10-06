<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/app.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Formulario Pre - empleo</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                                        Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    @if(Auth::user()->tipo == 'Administrador')
                        <li>
                            <a href="#"><i class="fa fa-user-md fa-2x fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        <li>
                            <a href="#"><i class="fa fa-medkit fa-2x fa-fw"></i> Consulta<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a target='_blank' href="{!!URL::to('/cuestionario/create')!!}"><i class='fa fa-plus fa-fw'></i> Nueva Consulta</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/cuestionario')!!}"><i class='fa fa-list-ol fa-fw'></i> Consultas Pre-empleo</a>
                                </li>
                            </ul>
                        </li>
                        @if(Auth::user()->tipo == 'Administrador')
                        <li>
                            <a href="#"><i class="fa fa-building-o fa-2x fa-fw"></i> Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Empresas</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/app.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    @section('scripts')

    @show

</body>

</html>