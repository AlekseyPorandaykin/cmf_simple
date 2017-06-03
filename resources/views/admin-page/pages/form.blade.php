<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Имя</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" placeholder="Контакты" @if(isset($page) && !empty($page->name))value="{{$page->name}}"@endif>
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Алиас</label>
    <div class="col-sm-10">
        <input type="text" name="alias" class="form-control" placeholder="kontaktyi" @if(isset($page) && !empty($page->alias))value="{{$page->alias}}"@endif>
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Текст</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="text">@if(isset($page) && !empty($page->text)){!! $page->text !!}@endif</textarea>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="radio">
            <label>
                <input type="radio" name="active" id="optionsRadios1" value="1" @if(isset($page) && !$page->active) @else checked @endif>
                Активировать
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="active" id="optionsRadios2" value="0" @if(isset($page) && !$page->active) checked @endif >
                Деактивировать
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="linked_products" @if(isset($page) && $page->linked_products) checked @endif> Прикрепить товары
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Сохранить</button>
    </div>
</div>