@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 pt-4">
                <a href="/forum"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
                <hr>
                <h5>
                    <strong>{{ $topic->topic }}</strong>
                </h5>
                <small>{{ $topic->user->name }} ({{ $topic->user->email }}) <span class="text-muted"> -
                        {{ $topic->created_at->diffForHumans() }}</span></small>
                <br><br>
                <p>{{ $topic->content }}</p>


                <div class="">
                    <a class="text-decoration-underline" onclick="toggle()" style="cursor: pointer;">Comment</a>
                    @if (auth()->user()->is_admin)
                        <form action="/forum/{{ $topic->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="text-decoration-underline text-muted" style="border: unset; background: unset;"
                                onclick="return confirm('Are you sure?')">Delete Topic</button>
                        </form>
                    @endif

                    <form action="/forum/{{ $topic->slug }}/comment" class="form-floating mt-2" method="POST" style="display: none; transition: display 0.5s;"
                        id="comment-form">
                        @csrf
                        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                        <input type="hidden" name="parent" value="0">
                        <textarea class="form-control" placeholder="Tulis jawaban Anda" name="content"
                            id="floatingTextarea" style="height: 100px">{{ old('content') }}</textarea>
                        <label for="floatingTextarea">Tulis jawaban Anda</label>
                        <input type="submit" class="btn btn-primary my-2" value="Kirim">
                    </form>
                </div>
                <hr>
            </div>


            <div class="col-lg-8">
                <h5 class="mb-3"><strong style="color: tomato">Komentar</strong></h5>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <ul class="list-unstyled">
                    @foreach ($topic->comment->where('parent', 0) as $komen)
                        <li>
                            @if ($komen->user->is_admin)
                                <small>
                                    <strong style="color: #ff5555;">{{ $komen->user->name }}
                                        ({{ $komen->user->email }})</strong><span class="text-muted"> -
                                        {{ $komen->created_at->diffForHumans() }}</span>
                                    <p>{{ $komen->content }}</p>
                                </small>
                            @else
                                <small>
                                    <strong>{{ $komen->user->name }} ({{ $komen->user->email }})</strong><span
                                        class="text-muted"> - {{ $komen->created_at->diffForHumans() }}</span>
                                    <p>{{ $komen->content }}</p>
                                </small>
                            @endif
                            <div class="dropdown mb-3">
                                <a class="text-decoration-underline" href="#" id="dropdownMenuClickable"
                                    data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    <small>Comment</small>
                                </a>
                                @if (auth()->user()->is_admin)
                                    <form action="/forum/comment/{{ $komen->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="text-decoration-underline text-muted"
                                            style="border: unset; background: unset;"
                                            onclick="return confirm('Are you sure?')"><small>Delete Comment</small></button>
                                    </form>
                                @endif
                                <div class="dropdown-menu bg-light" style="width: 100%"
                                    aria-labelledby="dropdownMenuClickable">
                                    <form action="/forum/{{ $topic->slug }}/comment" method="POST" class="form-floating px-2 mt-2" id="comment-form2">
                                        @csrf
                                        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                                        <input type="hidden" name="parent" value="{{ $komen->id }}">
                                        <textarea class="form-control" placeholder="Tulis jawaban Anda" name="content"
                                            id="floatingTextarea" style="height: 100px">{{ old('content') }}</textarea>
                                        <label for="floatingTextarea">Tulis jawaban Anda</label>
                                        <input type="submit" class="btn btn-primary btn-sm my-2" value="Kirim">
                                    </form>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                @foreach ($komen->child as $anak)
                                    <li class="ms-4">
                                        @if ($anak->user->is_admin)
                                            <small>
                                                <strong style="color: #ff5555;">{{ $anak->user->name }}
                                                    ({{ $anak->user->email }})</strong><span class="text-muted"> -
                                                    {{ $anak->created_at->diffForHumans() }}</span>
                                                <p>{{ $anak->content }}</p>
                                            </small>
                                        @else
                                            <small>
                                                <strong>{{ $anak->user->name }}
                                                    ({{ $anak->user->email }})</strong><span class="text-muted"> -
                                                    {{ $anak->created_at->diffForHumans() }}</span>
                                                <p>{{ $anak->content }}</p>
                                            </small>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <hr>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('others')
    <script>
        function toggle() {
            var x = document.getElementById("comment-form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function toggleC() {
            var x = document.getElementById("comment-form2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection
