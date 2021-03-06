<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <li></li>
                <div class="top-right links">
                    @auth
                        
                        @if(Auth::user()->isWorker())
                            <strong><a href="{{ url('worker/index') }}" style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Состав отдела</a></strong>  
                            <strong> <a href="{{ url('/') }}" style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Главная</a></strong>
                        @elseif(Auth::user()->isUser())
                            <strong><a href="{{ url('user/index') }}" style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Отделы</a></strong>  
                            <strong> <a href="{{ url('/') }}" style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Главная</a></strong>
                        @elseif(Auth::user()->isAdministrator())
                            <strong><a href="{{ url('admin/index') }}"  style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none"> Панель Админа</a></strong>
                            <strong><a href="{{ url('user/index') }}" style="margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Отделы</a></strong> 
                            <strong> <a href="{{ url('/') }}"  style=" margin-right:10px; color: #0b3e6f; border:2px solid; text-decoration: none">Главная</a></strong>
                        @endif

                        
                       <!--  <strong>
                            <a href="{{ route('logout') }}" style="color: #0b3e6f; border:2px solid; text-decoration: none"    
                            onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();">
                            
                                Выйти
                            </a>
                        </strong> -->

                        <form action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                        
                        @else
                        <strong>
                            <a href="{{ route('login') }}" style="margin-right:10px; border:2px solid; color: #0b3e6f; text-decoration: none">Войти
                            </a>        
                        </strong>
                        
                        @if (Route::has('register'))
                            <strong>
                                <a href="{{route('register')}}"  style="margin-right:10px; border:2px solid;color: #0b3e6f;
                                text-decoration: none"> Регистрация</a>
                            </strong>
                        @endif

                    @endauth
                @endif
                </div>
            </div>
        </div>
    </body>
</html>
