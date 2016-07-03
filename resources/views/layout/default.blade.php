<!DOCTYPE html>
<html>
    <head>


        <!-- Custom CSS -->
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
         BootstrapDateTimePicker = '{{App::getLocale() }}';
        </script>
        <script src="{{ elixir('js/application.js') }}"></script>
        <title>@yield('fantitle', '')</title> 
    </head> 

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                        
                    <a class="navbar-brand" href="#">Malene Lykke Hansen</a>
                    
                </div>
                <!-- /.navbar-header -->
                @include('layout.menu.topmenu')
                <!-- /.navbar-top-links -->
                @include('layout.menu.sidebar')
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div id='page-header' class="col-md-12">
                        <h2 class="page-header">@yield('title', '')</h2/>
                    </div>
                    @yield('content')

                </div>

                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
</html>
