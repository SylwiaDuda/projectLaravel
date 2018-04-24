@extends('layout')

@section('content')

    <div class="titlePrzepisy">Edytuj przepis</div>
    {!! Form::model($page,['route'=>['pages.update',$page], 'method'=>'PUT']) !!}

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('title',"Tytuł:") !!}
        <br />
        {!! Form::text('title',$page->title, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('skladniki',"Składniki:") !!}
        <br />
        {!! Form::textarea('skladniki',$page->skladniki, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('czas',"Czas:") !!}
        <br />
        {!! Form::text('czas',$page->czas, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content',"Opis:") !!}
        <br />
        {!! Form::textarea('content',$page->content, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close()!!}

@endsection