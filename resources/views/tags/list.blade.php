@extends('layout')

@section('content')
    <h2>Tag</h2>
    <table class="table table-dark">
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
