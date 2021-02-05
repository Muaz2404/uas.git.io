@extends('layout/main');

@section('title','Berita')

@section('container')


<section>
    <div class="" style="background-color: rgb(158, 35, 86); margin-bottom: 20px; margin-top: 20px; ">

        <p style="font-size: 50px; margin-left: 50px; color :  rgb(255, 255, 255); padding: 20px">Berita</p>
    </div>
</section>

<section id="5" style="margin-bottom: 100px;">
    <section class="container5">
      <div class="container" style="display: flex">
        <div class="col-sm">
            <img src="{{ asset('nusa putra/asset/Seleksi-Beasiswa.jpg') }}">
           <div class="container" style="display: flex"
            <p style="padding-top: 50px"><b>Maret 20, 2020</b> </p>
           </div>
            <p style="padding-top: 50px">Nusaputra.ac.id – Program Beasiswa 1.000 Anak Negeri Universitas Nusa Putra (NPU) Sukabumi
            Tahun Akademik (TA) 2020-2021 memasuki tahapan seleksi. Sebanyak …</p>
        <button type="button" class="btn btn-secondary"><a href="{{('/berita1')}}"> Read more</a></button>



      </div>
    </section>
</section>
@endsection
