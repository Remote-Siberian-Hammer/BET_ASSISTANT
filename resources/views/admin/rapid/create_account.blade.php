@extends("layouts.admin")

@section("content")
    <div class="p-5 mx-auto">
        <div class="row">
            <div class="card card-bg p-3">
                <div class="col-12 text-center">
                    <h3>Добавить Rapid аккаунт</h3>
                    <small>Зарегистрировать аккаунт можно тут: <a href="https://rapidapi.com/hub/">Rapid API</a></small>
                </div>
                <div class="col-7 mt-4 mx-auto">
                    <form action="{{ route("admin.rapid_account.create") }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputHost" 
                                class="form-label">Выберите тип спорта <b>*</b> @error('type') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                            </label>
                            <select class="form-select" 
                                name="type"
                                aria-label="Default select example"
                                @error('type') is-invalid @enderror>
                                <option value="Футбол">Футбол</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputHost" 
                                class="form-label">Укажите хост <b>*</b> @error('host') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                            </label>
                            <input type="text" 
                                class="form-control" 
                                name="host" 
                                id="exampleInputHost"
                                @error('host') is-invalid @enderror>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAccessKey" 
                                class="form-label">Укажите секретный ключ <b>*</b> @error('access_key') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                            </label>
                            <input type="text" 
                                class="form-control" 
                                name="access_key" 
                                id="exampleInputAccessKey"
                                @error('access_key') is-invalid @enderror>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAccessKey" 
                                class="form-label">Укажите количество запросов <b>*</b>  @error('count') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                            </label>
                            <input type="number" 
                                class="form-control" 
                                name="count" 
                                id="exampleInputCount"
                                aria-describedby="countHelp"
                                value="400"
                                @error('count') is-invalid @enderror>
                            <div id="countHelp" 
                                class="form-text">Не больше 800, в среднем от 400 до 500</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection