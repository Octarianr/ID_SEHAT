@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <a href="/forum">< Kembali</a>
                <h4 class="my-4">Konsultasikan Keluhan Anda!</h4>
                <hr>
                <form action="">
                    <div class="mb-3">
                        <label for="topic" class="form-label">Topik</label>
                        <input type="text" class="form-control" id="topic">
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="question" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection
