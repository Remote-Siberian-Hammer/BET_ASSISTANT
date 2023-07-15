@extends('layout.base')

@section('content')
    <section id="app">
        <div class="col-12">
            <div class="card card-br p-3 col-10 mx-auto">
                <div class="mt-3 mb-4">
                    <h4 class="text-center">Регистрация</h4>
                </div>
                <form action="{{ route('user.post.registration') }}" method="post" class="col-8 mx-auto">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="exampleInputFirstName" class="form-label">
                                    <strong>Введите имя @error('FirstName') <span class="invalid-feedback d-block">{{ $message }} </span> @enderror</strong>
                                </label>
                                <input 
                                    type="text" 
                                    name="FirstName" 
                                    class="form-control" 
                                    id="exampleInputFirstName" 
                                    value="{{ old('FirstName') }}"
                                    @error('FirstName') is-invalid @enderror
                                >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="exampleInputLastName" class="form-label">
                                    <strong>Введите фамилию @error('LastName') <span class="invalid-feedback d-block">{{ $message }} </span> @enderror</strong>
                                </label>
                                <input 
                                    type="text" 
                                    name="LastName" 
                                    class="form-control" 
                                    id="exampleInputLastName" 
                                    value="{{ old('LastName') }}"
                                    @error('LastName') is-invalid @enderror
                                >
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail" class="form-label">
                            <strong>Введите E-mail @error('Email') <span class="invalid-feedback d-block">{{ $message }} </span> @enderror</strong>
                        </label>
                        <input 
                            type="email" 
                            name="Email" 
                            class="form-control" 
                            id="exampleInputEmail" 
                            aria-describedby="emailHelp"
                            value="{{ old('Email') }}"
                            @error('Email') is-invalid @enderror
                        >
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword" class="form-label">
                            <strong>Введите пароль @error('Password') <span class="invalid-feedback d-block">{{ $message }} </span> @enderror</strong>
                        </label>
                        <input 
                            type="password" 
                            name="Password" 
                            class="form-control" 
                            id="exampleInputPassword"
                            value="{{ old('Password') }}"
                            @error('Password') is-invalid @enderror
                        >
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">
                            <strong>Введите пароль ещё раз @error('Password1') <span class="invalid-feedback d-block">{{ $message }} </span> @enderror</strong>
                        </label>
                        <input 
                            type="password" 
                            name="Password1" 
                            class="form-control" 
                            id="exampleInputPassword1"
                            value="{{ old('Password1') }}"
                            @error('Password1') is-invalid @enderror
                        >
                    </div>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#resetToPasswordModal">Забыли пароль?</a>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn right w-50" type="submit">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
