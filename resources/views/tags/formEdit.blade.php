@extends('layout')

@section('content')
    <br>
    <h2></h2>

    <a class="btn btn-light" href="{{ route('tags.list') }}" role="button">Back</a>

    <form method="post" action="{{route('tags.update', $tags->id)}}">
        {{ csrf_field() }}
        @method("PUT")

        <div class="form-group">
            <label for="exampleInputEmail1">Add new tag</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter tag"
                   @if(!(old('name')))
                        value="{{($tags->name) }}"
                   @else
                        value="{{old('name')}}"
                   @endif
            >
        </div>
        @if($errors->any())
            @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
            @endforeach
        @endif
        <button type="submit" class="btn btn-primary">Ok</button>
    </form>
@endsection