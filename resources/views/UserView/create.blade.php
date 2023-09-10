@extends("layouts.base")

@section("content")
<div class="container mx-auto">
    <div class="col-6 mx-auto">
        <div class="card p-4">
            <div class="mb-3">
                <h3 class="text-center">Регистрация</h3>
                <a href="#" 
                    class="lice-active text-center d-block">Есть аккаунт?</a>
            </div>
            <div class="row">
                <form action="{{ route("registration.post") }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail" 
                            class="form-label">Введите E-mail</label>
                        <input type="Email"
                            name="email"
                            class="form-control" 
                            id="exampleInputEmail"
                            @error('email') is-invalid @enderror>
                        <span class="text-center">
                            @error('email') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword"
                        class="form-label">Введите пароль</label>
                        <input type="password"
                            name="password"
                            class="form-control" 
                            id="exampleInputPassword"
                            @error('password') is-invalid @enderror>
                        <span class="text-center">
                            @error('password') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" 
                            class="form-label">Введите пароль ещё раз</label>
                        <input type="password"
                            name="password_confirmation"
                            class="form-control" 
                            id="exampleInputPasswordConfirmation"
                            @error('password_confirmation') is-invalid @enderror>
                        <span class="text-center">
                            @error('password_confirmation') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                        </span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" 
                            class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection