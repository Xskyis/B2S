@extends('welcome')
@section('judul', 'Dashboard')
@section('content')
    <!-- Layout wrapper -->
    
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                  @foreach($mapels as $mapel)
                  <div class="d-flex justify-content-center col-lg-3 mb-4 order-0">
                      <div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="{{ $mapel->gambar_url }}" alt="Card image cap" style="object-fit: cover; height: 200px; width: 100%; display: block; margin-left: auto; margin-right: auto;">
                          <div class="card-body">
                              <h5 class="card-title">{{ $mapel->nama }}</h5>
                                <a href="{{ route('mapel.rincian', $mapel->id) }}" class="btn btn-primary">Cek Mapel</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
            <!-- / Content -->
@endsection