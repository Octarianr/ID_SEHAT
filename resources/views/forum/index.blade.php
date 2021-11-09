@extends('layouts.main')

@section('container')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h2>Konsultasi</h2>
                <a href="/forum/create" class="btn text-light my-2" role="button" style="background-color: #ff6347">Diskusi
                    Baru</a>

                {{-- ganti dengan data dari database untuk forum nanti --}}
                {{-- urutan dari postingan yang terbaru --}}
                {{-- <div class="row my-4">
                    <a href="#">
                        <h5>Disini potongan pertanyaan 1 (atau excerpt) dari pengguna, klik untuk baca selengkapnya...</h5>
                    </a>
                    <small>oleh {{ "'nama penanya (dari data)'" }} tentang {{ "'topik'" }} pada {{ "'waktu publikasi'" }}</small>
                </div>
                <hr>
                <div class="row my-4">
                    <a href="#">
                        <h5>Disini potongan pertanyaan 2 (atau excerpt) dari pengguna, klik untuk baca selengkapnya...</h5>
                    </a>
                    <small>oleh {{ "'nama penanya (dari data)'" }} tentang {{ "'topik'" }} pada {{ "'waktu publikasi'" }}</small>
                </div>
                <hr>
                <div class="row my-4">
                    <a href="#">
                        <h5>Disini potongan pertanyaan 3 dan seterusnya</h5>
                    </a>
                    <small>oleh {{ "'nama penanya (dari data)'" }} tentang {{ "'topik'" }} pada {{ "'waktu publikasi'" }}</small>
                </div>
                <hr> --}}
            </div>

            @foreach ($forums as $forum)
                <div class="row my-4">
                    <a href="#">
                        <h5>{{ $forum->topic }}</h5>
                    </a>
                    <small>{!! $forum->content !!}</small>
                </div>
            @endforeach
        </div>
    </div>
@endsection
