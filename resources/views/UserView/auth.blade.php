@extends("layouts.base")

@section("content")
<div class="container mx-auto">
    <div class="col-6 mx-auto">
        <div class="card p-4">
            <div class="mb-3">
                <h3 class="text-center">Вход</h3>
                <a href="{{ route("registration.page") }}"
                    class="lice-active text-center d-block">Нет аккаунта?</a>
            </div>
            <div class="row">
                <form action="{{ route('authorization.post') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail" 
                            class="form-label">Введите E-mail</label>
                        <input type="email" 
                            class="form-control" 
                            name="email"
                            id="exampleInputEmail"
                            @error('email') is-invalid @enderror>
                        <span class="text-center">
                            @error('email') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" 
                            class="form-label">Введите пароль</label>
                        <input type="password" 
                            class="form-control" 
                            name="password"
                            id="exampleInputPassword1"
                            @error('password') is-invalid @enderror>
                        <span class="text-center">
                            @error('password') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                        </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="lice-active text-center d-block"
                            data-bs-toggle="modal" 
                            data-bs-target="#exampleModal">Забыли пароль?</a>
                        <button type="submit" 
                            class="btn btn-primary">Войти</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" 
    id="exampleModal" 
    tabindex="-1" 
    aria-labelledby="exampleModalLabel" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" 
                    id="exampleModalLabel">Восстановить пароль</h5>
                <button type="button" 
                    class="btn-close" 
                    data-bs-dismiss="modal" 
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail"
                            class="form-label">Введите E-mail</label>
                        <input type="email"
                            class="form-control"
                            id="exampleInputEmail">
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