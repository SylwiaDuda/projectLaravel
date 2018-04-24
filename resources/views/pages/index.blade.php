@extends('layout')

@section('content')

    {{--<table class="table table-hover">--}}
        {{--<tr>--}}
            {{--<th class="titlePrzepisy">PRZEPISY</th>--}}
        {{--</tr>--}}
        {{--@foreach($pages as $page)--}}
            {{--<tr>--}}
                {{--<td>{{$page->title}}</td>--}}
                {{--<td> <a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edytuj</a></td>--}}
                {{--<td>--}}
                    {{--{!! Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']) !!}--}}
                    {{--<button class="btn btn-danger" >Usuń</button>--}}
                    {{--{!! Form::close() !!}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</table>--}}
    {{--{{$pages->links()}}--}}
@endsection