@extends('admin.sidebar')

@section('container')
    <div class="col-lg-8 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Buat Baru</h2>
        <a href="/blogs" class="btn btn-warning text-light">Batal</a>
    </div>
    <div class="col-lg-8">
        <form action="/blogs" method="POST" enctype="multipart/form-data" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label @error('category') is-invalid @enderror">Kategori</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid @enderror">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('title') is-invalid @enderror">Slug HTTP <br>
                    (judul-huruf-kecil-semua-dan-distrip-seperti-ini)</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">File (gambar, table excel)</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Tulis disini</label>
                <input type="hidden" id="body" name="body" value="{{ old('body') }}">
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <trix-editor input='body'></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
