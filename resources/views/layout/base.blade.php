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
                  <a href="{{ route('user.login') }}" class="btn w-15p right t1">Войти</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </section>

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