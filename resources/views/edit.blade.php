@extends('layout')

@section('title')
    editeaza
@endsection

@section('conent')
    <form method="POST" action="/updateCity">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$city->name}}" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label><br>
            <input type="date" name="visitedDate" id="" value="{{$city->visitedDate}}">
            <input type="hidden" name="id" value="{{$city->id}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a class="btn btn-success mt-2" href="{{ url()->previous() }}">Back</a>
@endsection
