@extends("layouts.admin")

@section("content")
    <div class="container mx-auto">
        <div class="row">
            <div class="col-6 mt-5 mx-auto">
                <div class="card p-4">
                    <h4 class="text-center">Запуск парсера</h4>
                    <div class="mt-2 mb-2">
                        <small>Запустите единоразово парсер, чтор бы получать информацию о спортивных мероприятиях.</small>
                    </div>
                    <form action="{{ route("admin.rapid_parser.page") }}">
                        @csrf
                        <button type="submit" class="btn btn-menu w-100 mx-auto d-block mt-3">Запустить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection