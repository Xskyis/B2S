@extends('welcome')
@section('content')
    <!-- Layout wrapper -->
    
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-8">
                  <h2>Tambah Materi</h2>
                  <form action="{{ route('tambahMateri.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="nama">Nama Bab:</label>
                      <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="id_mapel">Mapel:</label>
                      <select class="form-control" id="id_mapel" name="id_mapel" required>
                        @foreach($mapels as $mapel)
                          <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="video">File Video:</label>
                        <input type="file" class="form-control" id="video" name="video" required accept="video/mp4,video/*">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
                  </form>
                </div>
              </div>
          </div>
            <!-- / Content -->
@endsection