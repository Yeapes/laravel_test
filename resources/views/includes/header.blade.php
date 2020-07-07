<!doctype html>
<html lang="en"> 
<head>
        <meta charset="utf-8"> 
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">  
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/style.css">  
    </head> 
    <body>
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout2" class="header-style2"> 
                    <div class="main-menu-area bg-body" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-10 position-static d-none d-lg-block">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                            <li class="active"><a href="{{route('index')}}">Home</a></li> 
                                                <li><a href="#">Demo Menu</a>
                                                </li>       
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </header> 