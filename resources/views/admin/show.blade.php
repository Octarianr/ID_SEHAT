@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <a href="../organ-manusia"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
                <hr>
                <h3>{!! $blog->title !!}</h3>
                <br>
                @if ($blog->image)
                    <img class="float-md-end px-4 pt-2 pb-4" src="{{ asset('storage/' . $blog->image) }}"
                        style="width: 240px">
                @endif
                {!! $blog->body !!}
                <hr>
            </div>
        </div>

    </div>
@endsection
