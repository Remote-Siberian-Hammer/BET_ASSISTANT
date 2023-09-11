<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    @vite(['resources/css/app.css'])
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" 
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
        crossorigin="anonymous"></script>

    <title>BET_ASSISTANT</title>
  </head>
  <body>
    <section id="app">
        <section id="advertising" 
            class="col-12 advertising-h d-flex align-items-center justify-content-center">РЕКЛАМА</section>
            <header class="col-12">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-around">
                    <a class="navbar-brand"
                        href="{{ route("index.page") }}">
                        <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                viewBox="0 0 24 24" 
                                style="fill: #f6f6f6;">
                                <path d="M6 21H3a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1z"></path>
                            </svg>
                        </div>
                        <strong>BET_ASSISTANT</strong>
                    </a>
                    <div class="w-50"></div>
                    <div>
                        @guest
                            <a href="{{ route("auth.page") }}"
                                class="btn">Войти</a>
                        @endguest
                        @auth
                            <button type="button" 
                                class="btn btn-menu control">
                                <div class="row">
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" 
                                            height="24" 
                                            viewBox="0 0 24 24" 
                                            style="fill: #f6f6f6;">
                                            <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                                        </svg>
                                    </div>
                                    @if (Auth::user()->first_name && Auth::user()->last_name)
                                    <div class="col">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</div>
                                    @else
                                    <div class="col">Меню</div>
                                    @endif
                                </div>
                            </button>
                        @endauth
                    </div>
                </div>
            </nav>
        </header>

        @auth
            <section class="menu card p-2">
                <div class="row mt-3 mb-3">
                    <div class="col-7">
                        @if (Auth::user()->first_name && Auth::user()->last_name)
                            <h3>{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</h3>
                        @endif
                        <small>
                            <a href="#">{{ Auth::user()->email }}</a>
                        </small>
                    </div>
                    <div class="col-5">
                        <p>
                            <b>Ваш баланс:</b>
                            <div class="d-flex justify-content-center mb-4">
                                <b>
                                    200 <svg xmlns="http://www.w3.org/2000/svg" 
                                            width="24" 
                                            height="24" 
                                            viewBox="0 0 24 24" 
                                            style="fill: rgba(0, 0, 0, 1);">
                                            <path d="M20 4H4c-1.103 0-2 .897-2 2v2h20V6c0-1.103-.897-2-2-2zM2 18c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6H2v6zm3-3h6v2H5v-2z"></path>
                                        </svg>
                                </b>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-menu">Пополнить</a>
                            </div>
                            
                        </p>
                    </div>
                </div>
                <div class="row">
                    @if(Auth::user()->role == "Администратор")
                        <div class="container mb-3">
                            <a href="{{ route("admin.home.page") }}" class="btn w-75 mx-auto d-block btn-menu">Панель администратора</a>
                        </div>
                    @endif
                    <div class="container mb-3">
                        <a href="#" class="btn w-75 mx-auto d-block btn-menu">Мои лиги</a>
                    </div>
                    <div class="container mb-3">
                        <a href="#" class="btn w-75 mx-auto d-block btn-menu">Настройки</a>
                    </div>
                    <div class="container mb-3">
                        <form action="{{ route("logout.post") }}" method="post">
                            @csrf
                            <button type="submit" 
                                class="btn w-75 mx-auto d-block">Выход</button>
                        </form>
                    </div>
                </div>
            </section>
        @endauth

        <main class="d-flex justify-content-between mt-5">
            <section id="advertising" 
                class="col-1 advertising-v d-flex align-items-center justify-content-center">РЕКЛАМА</section>
            <div id="content" 
                class="col-10">
                @if (\Session::has('success'))
                    <div class="toast mt-2" id="Toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Успех!</strong>
                            <button type="button" id="seToastButtonClose" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body text-white bg-success">
                            {!! \Session::get('success') !!}
                        </div>
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="toast mt-2" id="Toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Ошибка!</strong>
                            <button type="button" id="seToastButtonClose" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body text-white bg-danger">
                            {!! \Session::get('error') !!}
                        </div>
                    </div>
                @endif
                @yield("content")
            </div>
            <section id="advertising" 
                class="col-1 advertising-v d-flex align-items-center justify-content-center">РЕКЛАМА</section>
        </main>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    @vite(['resources/js/main.js'])
  </body>
</html>