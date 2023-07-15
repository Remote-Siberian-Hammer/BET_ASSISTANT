<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
    <title>BET ASSISTANT</title>
  </head>
  <body>
    <section class="fixed w-100">
      {{-- Рекламмный блок --}}
      <div class="container-fluid advertising advertising-horizontal">
        <div class="col-10 mx-auto">
          <span class="text-center d-block">Реклама</span>
        </div>
      </div>
      {{-- END --}}
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-base">
          <div class="container-fluid">
            <div class="row col-8 mx-auto">
              <div class="col-6">
                <a class="d-block logotype navbar-brand" href="{{ route('home') }}">
                  <h3>
                    <svg viewBox="0 0 32 27" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 10C0 4.47715 4.47715 0 10 0H32V17C32 22.5228 27.5228 27 22 27H0V10Z" fill="#E01E1E"/>
                      <path d="M10 23H7C6.73478 23 6.48043 22.8946 6.29289 22.7071C6.10536 22.5196 6 22.2652 6 22V14C6 13.7348 6.10536 13.4804 6.29289 13.2929C6.48043 13.1054 6.73478 13 7 13H10C10.2652 13 10.5196 13.1054 10.7071 13.2929C10.8946 13.4804 11 13.7348 11 14V22C11 22.2652 10.8946 22.5196 10.7071 22.7071C10.5196 22.8946 10.2652 23 10 23ZM17 23H14C13.7348 23 13.4804 22.8946 13.2929 22.7071C13.1054 22.5196 13 22.2652 13 22V5C13 4.73478 13.1054 4.48043 13.2929 4.29289C13.4804 4.10536 13.7348 4 14 4H17C17.2652 4 17.5196 4.10536 17.7071 4.29289C17.8946 4.48043 18 4.73478 18 5V22C18 22.2652 17.8946 22.5196 17.7071 22.7071C17.5196 22.8946 17.2652 23 17 23ZM24 23H21C20.7348 23 20.4804 22.8946 20.2929 22.7071C20.1054 22.5196 20 22.2652 20 22V11C20 10.7348 20.1054 10.4804 20.2929 10.2929C20.4804 10.1054 20.7348 10 21 10H24C24.2652 10 24.5196 10.1054 24.7071 10.2929C24.8946 10.4804 25 10.7348 25 11V22C25 22.2652 24.8946 22.5196 24.7071 22.7071C24.5196 22.8946 24.2652 23 24 23Z" fill="white"/>
                    </svg> <span>BET ASSISTANT</span>
                  </h3>
                </a>
              </div>
              <div class="col-6">
                @if(session()->get('access_key') && session()->get('user_id'))
                  <button 
                    type="button" 
                    class="btn btn-user_button t1"
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#offcanvasScrolling" 
                    aria-controls="offcanvasScrolling"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #fff;">
                      <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg> 
                    {!! session()->get('FirstName') !!} {!! session()->get('LastName') !!}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #fff;">
                      <path d="M16.939 7.939 12 12.879l-4.939-4.94-2.122 2.122L12 17.121l7.061-7.06z"></path>
                    </svg>
                  </button>
                @else
                  <a href="{{ route('user.login') }}" class="btn w-15p right t1">Войти</a>
                @endif
              </div>
            </div>
          </div>
        </nav>
      </header>
    </section>

    {{-- Окно для меню --}}
    @if(session()->get('access_key') && session()->get('user_id'))
      <div class="offcanvas offcanvas-right offcanvas-ba col-3 card p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header mt-3">
          <div class="row w-100">
            <div class="col-lg-8">
              <strong>{!! session()->get('FirstName') !!} {!! session()->get('LastName') !!}</strong>
              <small class="underline">{!! session()->get('Email') !!}</small>
            </div>
            <div class="col-lg-4">
              <p>Ваш баланс:</p>
              <h5>
                <b>200</b>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="bank" style="fill: rgba(0, 0, 0, 1); width: 1.5em; position: relative;">
                  <path d="M20 4H4c-1.103 0-2 .897-2 2v2h20V6c0-1.103-.897-2-2-2zM2 18c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-6H2v6zm3-3h6v2H5v-2z"></path>
                </svg>
              </h5> 
              <a 
                href="#"
                class="btn btn-user_button"
              >Пополнить</a>
            </div>
          </div>
        </div>
        <div class="offcanvas-body">
          <div class="list-group">
            <a href="#" class="btn btn-user_button mt-1 w-90 mx-auto text-center">Мои лиги</a>
            <a href="#" class="btn btn-user_button mt-1 w-90 mx-auto text-center">Настройки</a>
            <a href="{{ route('user.logout', ['user_id' => session()->get('user_id')]) }}" class="btn mt-1 w-90 mx-auto text-center">Выход</a>
          </div>
        </div>
      </div>
    @endif
    {{-- END --}}

    {{-- Модальные окна --}}
    <div class="modal fade" id="resetToPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content card">
          <div class="modal-header">
            <h5 class="w-100 text-center" id="exampleModalLabel">Восстановить пароль</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <br>
            <form action="{{ route('user.reset.to.password') }}" method="post" class="col-8 mx-auto">
              @csrf
              <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">
                  <strong>Введите E-mail</strong>
                </label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
              </div>
              <div class="mb-5">
                <button class="btn right" type="submit">Восстановить</button>
              </div>
              <br>
              <br>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- END --}}

    {{-- Success --}}
      @if (\Session::has('success'))
        <div class="toast mt-2 d-block" id="seToastError" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">Успех</strong>
            <button type="button" id="seToastButtonClose" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body text-white bg-success">
            {!! \Session::get('success') !!}
          </div>
      </div>
    @endif
  {{-- END --}}
  {{-- Error --}}
    @if (\Session::has('error'))
      <div class="toast mt-2 d-block" id="seToastError" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">Ошибка</strong>
          <button type="button" id="seToastButtonClose" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white bg-danger">
          {!! \Session::get('error') !!}
        </div>
      </div>
    @endif
  {{-- END --}}
    
    <main class="p-1 col-12 wrapper">
      <div class="container-fluid">
        <div class="row w-100">
          {{-- Рекламмный блок --}}
          <div class="col-lg-2">
            <section class="fixed advertising-vertical-position">
              <div class="advertising advertising-vertical w-90">
                <span class="text-center">Реклама</span>
              </div>
            </section>
          </div>
          {{-- END --}}
  
          <div class="col-lg-7 mx-auto t-13">
            @yield('content')
          </div>
  
          {{-- Рекламмный блок --}}
          <div class="col-lg-2">
            <section class="fixed advertising-vertical-position">
              <div class="advertising advertising-vertical w-90 right">
                <span class="text-center">Реклама</span>
              </div>
            </section>
          </div>
          {{-- END --}}
        </div>
      </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>