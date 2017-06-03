@extends('admin-page.index')
@section('content')

    <h2>Создать страницу</h2>
    {!! Form::open(['url' => route('add-page'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
    @include('admin-page.pages.form')
    {!! Form::close() !!}
@endsection