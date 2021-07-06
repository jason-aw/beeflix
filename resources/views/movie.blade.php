@extends('layouts.layout')

@section('title', 'BeeFlix')

@section('content')
<style>
    .Stars::before{
        content: '★★★★★';
        background: linear-gradient(90deg, orange var(--percent), rgb(168, 168, 168) var(--percent));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke: 1px black;
    }

    .Stars {
        --percent: calc(var(--rating) / 5 * 100%);

        display: inline-block;
        font-size: 30px;
        font-family: Times;
        line-height: 1;
    }
</style>
<div class="container">
    <div class="jumbotron mt-4 p-3">
        <div class="row">
            <div class="col">
                @php $path = Storage::url('images/'.$movie->photo); @endphp
                <img src="{{url($path)}}" alt="" style="width:100%">
            </div>
            <div class="col">
                <h3>{{$movie->title}}</h3>
                <div>
                    <span class="Stars align-middle" style="--rating: {{$movie->rating}};"></span>
                    <span class="align-middle" style="font-size:16pt">{{$movie->rating}}/5.0</span>
                </div>
                <p style="font-size:11pt">
                    {{$movie->description}}
                </p>
                Kategori: <a href="{{url('genre/'.$genre->id)}}">{{$genre->name}}</a>
            </div>
            <div class="col">
                <h4>EPISODES</h4>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="d-flex">
                            <th class="col-4">Episode #</th>
                            <th class="col">Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movie->episodes as $episode)
                            <tr class="d-flex">
                                <td class="col-4">Episode {{$episode->episode}}</td>
                                <td class="col">{{$episode->title}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$movie->episodes->links()}}
            </div>
        </div>
        <div class="btn-group mt-3">
            <a href="{{url(URL::previous())}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i> KEMBALI</a>
            <a href="{{url('')}}" class="btn btn-outline-dark">LIHAT SEMUA FILM</a>
        </div>
    </div>
</div>

@endsection

<!-- 2d2d44
33e1ed -->
