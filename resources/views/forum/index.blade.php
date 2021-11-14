@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between my-4 pb-4">
                    <h2>Forum Kesehatan</h2>
                    <a class="btn btn-primary my-1" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat
                        Baru</a>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apa yang ingin Anda tanyakan?</h5>
                            </div>
                            <div class="modal-body">
                                <form action="/forum/create" method="POST" enctype="multipart/form-data"
                                    class="mb-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="topic"
                                            class="form-label @error('topic') is-invalid @enderror">Topik</label>
                                        <input type="text" class="form-control" id="topic" name="topic"
                                            value="{{ old('topic') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Pertanyaan</label>
                                        <textarea class="form-control" name="content" id="content" rows="5"
                                            required>{{ old('content') }}</textarea>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-outline-secondary me-2"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <ul class="list-unstyled">
                    @foreach ($topic as $topik)
                        <li>
                            <h5>
                                <a href="/forum/{{ $topik->slug }}">
                                    <strong>{{ $topik->topic }}</strong> : {{ $topik->content }}
                                </a>
                            </h5>
                            <small>{{ $topik->user->name }} ({{ $topik->user->email }})<span class="text-muted"> -
                                    {{ $topik->created_at->diffForHumans() }}</span></small>
                            <hr>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@endsection
