@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 py-4">
                <a href="/forum"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
                <hr>
                <div class="pt-2">
                    <div class="d-flex justify-content-between">
                        <h3 class="">List Topik</h3>
                        <a class="btn btn-primary mb-2 mx-2" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat Baru</a>
                    </div>

                    <small>{{ auth()->user()->name }} ({{ auth()->user()->email }})</small>
                        
                    @if ($topic->count())
                        <ul class="list-unstyled my-4">
                            @foreach ($topic as $topik)
                                <li>
                                    <h5>
                                        <a href="/forum/{{ $topik->slug }}">
                                            <strong>{{ $topik->topic }}</strong> : {{ $topik->content }}
                                        </a>
                                    </h5>
                                    <small class="text-muted"> - {{ $topik->created_at->diffForHumans() }}</small>
                                    <hr>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <h5 class="text-center">Forum tidak ditemukan.</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
