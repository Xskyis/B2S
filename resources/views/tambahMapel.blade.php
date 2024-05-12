@extends('welcome')
@section('content')
    <!-- Layout wrapper -->
    
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-8">
                  <h2>Tambah Mapel</h2>
                  <form action="{{ route('tambahMapel.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group mb-2">
                      <label class="mb-1" for="nama">Nama Mapel:</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group mb-2">
                      <label class="mb-1" for="gambar_url">Gambar Mapel (url):</label>
                      <input type="text" class="form-control" id="gambar_url" name="gambar_url" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
                  </form>
                </div>
              </div>
          </div>

            <!-- / Content -->
@endsection