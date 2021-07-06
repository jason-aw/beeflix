@extends('layouts.layout')

@section('title', 'BeeFlix')

@section('content')

<div class="container mb-4">
    <div class="display-4">{{$genre->name}}</div>
    @foreach($genre->movies as $movie)
    <!-- card group 4 movies -->
    @if ($loop->index % 4 == 0)
        <div class="card-group mb-3">
    @endif    
        @php $path = Storage::url('images/'.$movie->photo); @endphp
        <div class="card text-center mb-3" style="width:18rem">
            <img src="{{url($path)}}" class="card-img-top img-fluid" alt="..." style="height:80%">
            <div class="card-body">
                <h5 class="card-title mb-0">{{$movie->title}}</h5>
                <a href="{{url('movie/'.$movie->id)}}" class="btn btn-dark">Lihat Film <i class="far fa-eye"></i></a>
            </div>
        </div>
    @if($loop->iteration % 4 == 0 || $loop->last)
        </div>
    @endif
    @endforeach
</div>

@endsection