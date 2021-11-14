@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="py-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Forum Kesehatan</h2>
                        </div>
                        <div>
                            <a class="btn btn-primary my-1" href="#" id="dropdownMenuClickable" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" aria-expanded="false">
                                <i class="bi bi-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end bg-transparent border-0"
                                aria-labelledby="dropdownMenuClickable" style="width: 24rem;">
                                <form action="/forum" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request('search') }}">
                                        <button class="btn btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary my-1" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat
                        Baru</a>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                    </div>
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

                @if ($topic->count())
                    <ul class="list-unstyled">
                        @foreach ($topic as $topik)
                            <li>
                                <h5>
                                    <a href="/forum/{{ $topik->slug }}">
                                        <strong>{{ $topik->topic }}</strong> : {{ $topik->content }}
                                    </a>
                                </h5>
                                <small>{{ $topik->user->name }} ({{ $topik->user->email }})<span class="text-muted">
                                        -
                                        {{ $topik->created_at->diffForHumans() }}</span></small>
                                <hr>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h5 class="text-center">Forum tidak ditemukan.</h5>
                @endif

                <div class="d-flex justify-content-end">
                    {{ $topic->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('others')
    <script>
        function search() {
            var x = document.getElementById("toggle");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection
