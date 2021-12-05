@extends('layout')

@section('title')
    Lista oraselor
@endsection

@section('conent')
    @foreach ($cities as $city)
        <div class="card" style="width: 100%;">
            <div class="card-body">
            <h5 class="card-title">{{$city->name}}</h5>
            @if ($city->visitedDate)
                <h6 class="card-subtitle mb-2 text-muted">Vizitat la: {{date('d-m-Y', strtotime($city->visitedDate))}}</h6>
                @else
                <h6 class="card-subtitle mb-2 text-muted">Nu a fost vizitat inca</h6>
            @endif
            <a class="btn btn-primary" href="/city/{{$city->id}}">Editeaza</a>
            <form method="POST" action="/destroy">
                @csrf
                <input type="hidden" name="id" value="{{$city->id}}">
                <button class="btn btn-danger mt-2" type="submit">Delete</button>
            </form>
            </div>
        </div>

    @endforeach
@endsection
