@extends('welcome')
@section('judul', 'Tambah Materi')
@section('content')
    <!-- Layout wrapper -->
    
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-8">
                  <form action="{{ route('tambahMateri.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group mb-2">
                      <label class="mb-1" for="nama">Nama Bab:</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group mb-2">
                      <label class="mb-1" for="id_mapel">Mapel:</label>
                      <select class="form-control" id="id_mapel" name="id_mapel" required>
                        @foreach($mapels as $mapel)
                          <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group mb-2">
                      <label class="mb-1" for="link_video">Link Video Youtube:</label>
                        <input type="text" class="form-control" id="link_video" name="link_video" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
                  </form>
                </div>
              </div>
          </div>
            <!-- / Content -->
@endsection