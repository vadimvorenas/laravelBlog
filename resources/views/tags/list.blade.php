@extends('layout')

@section('content')
    <br>
    <h2>Tag</h2>
    <a class="btn btn-primary" href="{{ route('tags.create') }}" role="button">New tag</a>

    <table class="table table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Time create</th>
            <th scope="col">Time update</th>
            <th scope="col">Move</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tags as $tag)
        <tr>
            <th scope="row">{{ $tag->id }}</th>
            <td>{{ $tag->name }}</td>
            <td>{{ $tag->created_at }}</td>
            <td>{{ $tag->updated_at }}</td>
            <td>
                <div class="col-sm-10 form-group row">
                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary">Edit</a>
                </div>
                {{--<form action="{{ route('tags.edit', $tag->id) }}" method="post">
                <div class="form-group row">
                        <div class="col-sm-10">
                            {{ csrf_field() }}
                            @method("PATCH")
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>--}}


                </form>
                <form action="{{ route('tags.destroy', $tag->id)  }}" method="post">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            {{ csrf_field() }}
                            @method("DELETE")
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach


        </tbody>
    </table>
@endsection
