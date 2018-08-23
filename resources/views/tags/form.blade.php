@extends('layout')

@section('content')
    <br>
    <h2></h2>

    <form method="post" action="{{route('tags.store')}}">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="exampleInputEmail1">Add new tag</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter tag" value="{{ old('name') }}">
        </div>

        @if($errors->has('name'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('name')}}
        </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection