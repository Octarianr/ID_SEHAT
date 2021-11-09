@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <a href="/forum">< Kembali</a>
                <h4 class="my-4">Konsultasikan Keluhan Anda!</h4>
                <hr>
                <form action="/forum" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="topic" class="form-label">Topik</label>
                        <input type="text" class="form-control" id="topic">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Pertanyaan</label>
                        <input type="hidden" id="content" name="content">
                        <trix-editor input='content'></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
