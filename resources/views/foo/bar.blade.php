@extends('foo/base')

@section('title', 'Bar Page')

@section('container')
    <h2>Teste do Bar</h2>

    Testando a herança das bases
    {{$bar}} - {!! $foo !!}

    @if (true)
        return true
    @endif

    <ul>
    @foreach(['foo', 'bar', 'baz'] as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>

@endsection