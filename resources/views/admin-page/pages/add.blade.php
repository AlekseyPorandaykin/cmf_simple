@extends('admin-page.index')
@section('content')

    <h2>Страницы сайта</h2>
    {!! Form::open(['url' => route('add-page'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Имя</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" placeholder="Контакты">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Алиас</label>
        <div class="col-sm-10">
            <input type="text" name="alias" class="form-control" placeholder="kontaktyi">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Текст</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="text"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios1" value="1" checked>
                    Активировать
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios2" value="0">
                    Деактивировать
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="linked_products"> Прикрепить товары
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection