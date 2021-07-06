@extends('layouts.layout')

@section('title', 'BeeFlix')

@section('content')
<style>
.genreHeader{
    color: black;
}
.genreHeader:hover{
    color: #ffcb05;
}
</style>
<div class="container mb-4">
@foreach($genres as $genre)
<a href="{{url('genre/'.$genre->id)}}" class="genreHeader display-4">{{$genre->name}}</a>
    <div class="card-group mb-4">
    @foreach($genre->movies as $movie)
        <!-- only show 4 movie at a time -->
        @if ($loop->index == 4)
            @break
        @endif
        @php $path = Storage::url('images/'.$movie->photo); @endphp
        <div class="card text-center" style="width:18rem">
            <img src="{{url($path)}}" class="card-img-top" alt="..." style="height:80%">
            <div class="card-body">
                <h5 class="card-title mb-0">{{$movie->title}}</h5>
                <a href="{{url('movie/'.$movie->id)}}" class="btn btn-elegant">Lihat Film <i class="far fa-eye"></i></a>
            </div>
        </div>
    @endforeach
    </div>
@endforeach
</div>

@endsection