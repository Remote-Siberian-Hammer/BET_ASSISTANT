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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>BET_ASSISTANT</title>
  </head>
  <body>
    <section id="app">
        <header class="col-12">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-around">
                    <div>
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
                        <small>(Панель администратора)</small>
                    </div>
                    <div class="w-50">
                        <div class="d-flex justify-content-around">
                            <div class="dropdown">
                                <a class="dropdown-toggle" 
                                    onclick="dropdown_control()"
                                    href="#" 
                                    role="button" 
                                    id="dropdownMenuLink" 
                                    data-toggle="dropdown" 
                                    aria-haspopup="true" 
                                    aria-expanded="false">
                                  Сбор данных
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route("admin.rapid_parser.page") }}">Парсер</a>
                                    <a class="dropdown-item" href="{{ route("admin.rapid_account_list.page") }}">Rapid аккаунты</a>
                                    <a class="dropdown-item" href="#">Активный аккаунт</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route("index.page") }}"
                            class="btn">Вернуться к сайту</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="d-flex justify-content-between mt-5">
            <div id="content" 
                class="col-10 mx-auto">
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
        </main>
    </section>

    
    @vite(['resources/js/main.js'])
  </body>
</html>