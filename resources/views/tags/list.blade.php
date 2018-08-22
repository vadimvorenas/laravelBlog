@extends('layout')

@section('content')
    <br>
    <h2>Tag</h2>
    <a class="btn btn-primary" href="{{ route('tags.create') }}" role="button">New tag</a>

    <table class="table table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Тег</th>
            <th scope="col">Время создания</th>
            <th scope="col">Время обновления</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tags as $tag)
        <tr>
            <th scope="row">{{ $tag->id }}</th>
            <td>{{ $tag->name }}</td>
            <td>{{ $tag->created_at }}</td>
            <td>{{ $tag->updated_at }}</td>
        </tr>
        @endforeach


        </tbody>
    </table>
@endsection
