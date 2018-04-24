@extends('layout')

@section('content')
    <div class="titlePrzepisy">Dodaj nowy przepis</div>
    {!! Form::open(['route'=>'pages.store']) !!}

    @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="btn btn-danger">{{$error}}</div>
            @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('title',"Tytuł:") !!}
        <br />
        <div class="f-g">{!! Form::text('title',null, ['class'=>'form-control']) !!}</div>
    </div>
    <div class="form-group">
        {!! Form::label('skladniki',"Składniki:") !!}
        <br />
        {!! Form::textarea('skladniki',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('czas',"Czas:") !!}
        <br />
        {!! Form::text('czas',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content',"Opis:") !!}
        <br />
        {!! Form::textarea('content',null, ['class'=>'form-control']) !!}
    </div>

    <div class="from-group">
        {!! Form::submit('Zapisz',['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close()!!}

@endsection