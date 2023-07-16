@extends('layout.base')

@section('content')
    <section id="app">
        <div class="col-12">
            <div class="card card-br p-3 col-10 mx-auto">
                <div class="mt-3 mb-4 text-center">
                    <h4>Вход</h4>
                    <p>
                        <a href="{{ route('user.registration') }}">Нет аккаунта?</a>
                    </p>
                </div>
                <form action="{{ route('user.post.login') }}" method="post" class="col-8 mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleInputEmail" class="form-label">
                            <strong>Введите E-mail</strong>
                        </label>
                        <input type="email" name="Email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword" class="form-label">
                            <strong>Введите пароль</strong>
                        </label>
                        <input type="password" name="Password" class="form-control" id="exampleInputPassword">
                    </div>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#resetToPasswordModal">Забыли пароль?</a>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn right w-50" type="submit">Войти</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
