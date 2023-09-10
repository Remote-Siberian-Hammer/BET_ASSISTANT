@extends("layouts.base")

@section("content")
<div class="container mx-auto">
    <div class="row">
        <div class="col-5">
            <div class="d-flex justify-content-between">
                <a href="#" class="btn w-24">Футбол</a>
                <a href="#" class="btn w-24 btn-menu">Тенис</a>
                <a href="#" class="btn w-24 btn-menu">Баскетбол</a>
                <a href="#" class="btn w-24 btn-menu">Хоккей</a>
            </div>
        </div>
        <div class="col-3"></div>
        <div class="col-4 d-flex justify-content-end">
            <button class="btn w-50 btn-menu">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="24" 
                    height="24" 
                    viewBox="0 0 24 24" 
                    style="fill: #f6f6f6;">
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
            </svg> Показать все</button>
        </div>

        <div class="col-12 mt-1">
            <div class="card card-bg p-3">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex justify-content-lg-start">
                            <a href="#" 
                                class="btn ml-1 mr-1">Все</a>
                            <a href="#" 
                                class="btn ml-1 mr-1">Live</a>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4">
                        <form action="#" 
                            method="get">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <span class="wrapp">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="24" 
                                    height="24" 
                                    viewBox="0 0 24 24" 
                                    style="fill: #132B68;">
                                    <path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path>
                                </svg>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection