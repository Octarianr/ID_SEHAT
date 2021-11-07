@extends('layouts.main')

@section('container')
    <div class="container py-5 px-4">
        <h2>Organ Tubuh Manusia</h2>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <p>adalah kumpulan jaringan yang bekerja bersama untuk tujuan bersama. "Setiap organ menyediakan
                    fungsi dan kinerja atau kelangsungan hidup manusia," tutur Lisa M.J. Lee, seorang kandidat
                    profesor di Department of Cell & Biologi di University of Colorado School of Medicine, Amerika
                    Serikat.</p>
                <p>Akan tetapi hanya lima organ, yaitu otak, jantung, liver, ginjal dan paru-paru yang diperlukan
                    untuk bertahan hidup. Kehilangan fungsi total dari salah satu organ vital tersebut berarti akan
                    terjadi kematian. Hebatnya, tubuh manusia dapat bertahan hidup tanpa banyak organ lain atau
                    dengan mengganti organ yang tidak berfungsi dengan alat kesehatan.</p>
                <a class="btn text-light" href="/articles/anatomi-tubuh-manusia" role="button" style="background-color: #ff6347;">Baca
                    Selengkapnya...</a>
                <hr><br>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-wrap">
                    @foreach ($blogs as $blog)
                        <a class="mx-4 mb-2 text-center" href="../blogs/{{ $blog->slug }}"><img src="{{ asset('storage/' . $blog->image) }}" width="72">
                            <p>{{ $blog->category }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
