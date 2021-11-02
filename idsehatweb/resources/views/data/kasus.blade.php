@extends('layouts.main')

@section('container')
    <div class="container py-4 mt-4">
        <a href="../kasus-penyakit-di-indonesia" class="btn text-white mb-4" style="background-color: #ff6347;">Kembali</a>
        <h3>Data Jumlah Kasus</h3>
        <div class="row justify-content-center mt-4">
            <iframe
                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSjbqjTqRTN-9DydLy2Eohr8LVrZKUf3Cx9iEn2iRj37ydZF4nAcicDn3iO22OKKQ/pubhtml?widget=true&amp;headers=false"
                height="600"></iframe>
        </div>
    </div>
@endsection
