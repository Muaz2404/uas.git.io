@extends('page.admin.dashboard.layout')
@section('content')
<div class="container-fluid text-black">
    <div class="card">
        <div class="card-header bg-success">
            <div class="card-tittle">
                <h5 class="text-white">Create kemahasiswaan</h5>
            </div>
        </div>
        <div class="card-body p-2">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{route('kemahasiswaan.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="tanggal">isi</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" name="date" placeholder="Enter date">
              </div>
              <div class="form-group">
                <label for="deskripsi">isi</label>
                <input type="text" class="form-control" name="isi" id="isi" placeholder="Enter isi">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
