@extends("layouts.admin")

@section("content")
    <div class="container mx-auto">
        <div class="row">
            <div class="card p-3">
                <div class="d-flex justify-content-end">
                    <form action="{{ route("admin.rapid_account.delete") }}" 
                        method="post">
                        <input type="hidden" 
                            name="id" 
                            value="{{ $rapid_account->id }}">
                        <button type="submit" 
                            class="btn">Удалить</button>
                    </form>
                </div>
                <div class="col-7 mt-4 mx-auto">
                    <h3 class="text-center">Аккаунт</h3>
                    <hr>
                    <p>Хост: {{ $rapid_account->host }}</p>
                    <p>Секретный ключ доступа: {{ $rapid_account->access_key }}</p>
                    <p>Запросов к хосту: {{ $rapid_account->count }}</p>
                    <p>Запросов к хосту потрачено: {{ $rapid_account->facts_count }}</p>
                    <p>Дата обновления: {{ $rapid_account->activation_facts }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection