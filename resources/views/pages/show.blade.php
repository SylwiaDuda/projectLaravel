@extends('layout')

@section('content')
    <div class="titlePrzepisy">PRZEPISY</div>
    <table class="table table-hover">
            <tr class="tytuly">
                <td>Przepis</td>
                <td>Składniki</td>
                <td>Czas</td>
                <td>Opis</td>
            </tr>

        @foreach($pages as $page)
            <tr>
                <td>{{$page->title}}</td>
                <td>{{$page->skladniki}}</td>
                <td>{{$page->czas}}</td>
                <td>{{$page->content}}</td>
                <td> <a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edytuj</a></td>
                <td>
                    {!! Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger" >Usuń</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{$pages->links()}}
@endsection