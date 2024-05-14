@extends('welcome')
@section('judul', 'Request Materi')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="">
                
            </div>
            <div class="col-md-8">
                <form action="{{ route('requestMateri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label class="mb-1" for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="kelas">Kelas:</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value="">Pilih kelas</option>
                            <option value="7">Kelas 7</option>
                            <option value="8">Kelas 8</option>
                            <option value="9">Kelas 9</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="mapel">Mapel:</label>
                        <select class="form-control" name="mapel" id="mapel" required>
                            <option value="">Pilih Mapel</option>
                            @foreach ($mapels as $mapel)
                                <option value="{{ $mapel->nama }}">{{ $mapel->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1" for="req_materi">Requestan Materi:</label>
                        <textarea class="form-control" id="req_materi" name="req_materi" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Kirim Request</button>
                </form>
            </div>
        </div>
    </div>

    <!-- show sweetalert if success -->
    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ Session::get('success') }}',
                timer: 5000,
                backdrop: false
            });
        </script>
    @endif
@endsection
