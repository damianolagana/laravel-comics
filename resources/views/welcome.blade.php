@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>COMICS</h1>
    <div class="row g-4">
        @foreach($comics as $comic)
        <div class="col-2 comiCard">
            <div>
                <div>
                    <h4>{{$comic["title"]}}</h4>

                </div>
                <div>
                    <img src="{{$comic["thumb"]}}" alt="">
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection