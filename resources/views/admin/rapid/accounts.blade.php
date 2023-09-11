@extends("layouts.admin")

@section("content")
    <div class="p-5 mx-auto">
        <div class="row">
            @error('id') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
            <div class="card card-bg p-4">
                <div class="row">
                    <div class="col-12 mb-5 d-flex justify-content-end">
                        <a href="{{ route("admin.rapid_account_create.page") }}" 
                            class="btn ml-1 mr-1">Добавить</a>
                    </div>
                    <table class="table table-striped table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Тип</th>
                                <th scope="col">Хост</th>
                                <th scope="col">Секретный ключ доступа</th>
                                <th scope="col">Время до обновления</th>
                                <th scope="col">Время действия</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($account as $item)
                                <tr>
                                    <td>
                                        @if ($item->type == "Футбол")
                                            <span class="badge bg-success">{{ $item->type }}</span>
                                        @else
                                            <span class="badge bg-success">{{ $item->type }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route("admin.rapid_account_show.page", ["rapid_account_id" => $item->id]) }}">
                                            {{ $item->host }}
                                        </a>
                                    </td>
                                    <td>{{ $item->access_key }}</td>
                                    <td>@mdo</td>
                                    <td>{{ $item->activation_facts }}</td>
                                    <td>
                                        <form action="{{ route("admin.rapid_account.delete") }}" method="post">
                                            @csrf
                                            <input type="hidden" 
                                                name="id" 
                                                value="{{ $item->id }}"
                                                @error('id') is-invalid @enderror>
                                            <button type="submit" 
                                                class="btn">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection