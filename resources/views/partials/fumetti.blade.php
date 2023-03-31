@extends('app')
@section('fumetti')


<section id="current-series">
    <div class="container-fluid">
        <div class="row row-cols-6 justify-content-center d-flex">
            @foreach($fume as $fumetti)
                <div class="col mx-2">
                  <img src="https://picsum.photos/300/300" alt="">
                    {{$fumetti['series']}}
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection