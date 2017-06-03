@extends('admin-page.index')
@section('content')

    <h2>Редактирование страниц</h2>
    {!! Form::open(['url' => '/admin/pages/update/'.$page->id, 'method' => 'post', 'class' => 'form-horizontal']) !!}
    @include('admin-page.pages.form')
    {!! Form::close() !!}
@endsection