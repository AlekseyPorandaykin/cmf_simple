@extends('admin-page.index')
@section('content')

    <h2>Страницы сайта</h2>
    <div class="form-group">
        <div class=" col-sm-6">
            <a href="{{route("pages-new")}}" class="btn btn-primary">
                Добавить страницу
            </a>
        </div>
    </div>
    @if(count($pages)>0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ИД</th>
                <th>Название</th>
                <th>Псевдосылка</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $itemPage)
                    <tr>
                        <th scope="row">{{$itemPage->id}}</th>
                        <td>{{$itemPage->name}}</td>
                        <td>{{$itemPage->alias}}</td>
                        <td>
                            <a href="" type="submit"  class="btn btn-success">
                               Править
                            </a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    @endif

@endsection