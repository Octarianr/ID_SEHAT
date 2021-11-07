@extends('layouts.main')

@section('container')
<div class="container p-3">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <a href="#" class="btn text-white mb-4" style="background-color: #ff6347;">Kembali</a>
            <h2>{!! $post->title !!}</h2>
            <hr>
            @if ($post->image)
                <img class="float-md-end px-4 pt-2 pb-4" src="{{ asset('storage/' . $post->image) }}" style="width: 240px">
            @endif
            {!! $post->body !!}
        </div>
    </div>

</div>
@endsection
