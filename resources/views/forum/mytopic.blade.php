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
