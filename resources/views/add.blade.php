@extends('layout')

@section('title')
    adauga
@endsection

@section('conent')
    <form method="POST" action="/addCity">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label><br>
            <input type="date" name="visitedDate" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a class="btn btn-success mt-2" href="{{ url()->previous() }}">Back</a>
@endsection
