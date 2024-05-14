@extends('welcome')
@section('content')
    <!-- Layout wrapper -->

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="d-flex">
                <a href="/" class="">
                    <i class="bx bx-arrow-back me-2"></i>
                </a>

                <h4 class="mb-4">{{ $mapel->nama }}</h4>
            </div>

            @if ($bab->isEmpty())
                <div class="alert alert-primary" role="alert">
                    Belum ada rincian bab untuk mata pelajaran ini!
                </div>
            @else
                <div class="container mb-3">
                    <div class="border border-2 border-secondary rounded-3 p-3 shadow-sm">
                        <h5><strong>Kelas 7</strong></h5>
                        @if ($bab->where('kelas', '==', '7')->isEmpty())
                            <p class="badge rounded-pill bg-secondary">Belum ada Materi untuk kelas 7</p>
                        @else
                            <ol class="list-group list-group-numbered">
                                @foreach ($bab->where('kelas', '==', '7') as $rincianMapel)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <a href="{{ route('rincian_bab.show', $rincianMapel->id) }}">
                                                <div>{{ $rincianMapel->nama }}</div>
                                            </a>
                                        </div>
                                        @if (Auth::check() && Auth::user()->role == 'admin')
                                            <form action="{{ route('hapus_bab', ['id' => $rincianMapel->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class='bx bxs-trash-alt'></i>
                                                </button>

                                                <div class="modal" tabindex="-1" id="deleteModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Yakin ingin menghapus bab
                                                                    <strong>{{ $rincianMapel->nama }}</strong> ?
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                </div>

                <div class="container mb-3">
                    <div class="border border-2 border-secondary rounded-3 p-3 shadow-sm">
                        <h5><strong>Kelas 8</strong></h5>
                        @if ($bab->where('kelas', '==', '8')->isEmpty())
                            <p class="badge rounded-pill bg-secondary">Belum ada Materi untuk kelas 8</p>
                        @else
                            <ol class="list-group list-group-numbered">
                                @foreach ($bab->where('kelas', '==', '8') as $rincianMapel)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <a href="{{ route('rincian_bab.show', $rincianMapel->id) }}">
                                                <div>{{ $rincianMapel->nama }}</div>
                                            </a>
                                        </div>
                                        @if (Auth::check() && Auth::user()->role == 'admin')
                                            <form action="{{ route('hapus_bab', ['id' => $rincianMapel->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class='bx bxs-trash-alt'></i>
                                                </button>

                                                <div class="modal" tabindex="-1" id="deleteModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Yakin ingin menghapus bab
                                                                    <strong>{{ $rincianMapel->nama }}</strong> ?
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                </div>

                <div class="container">
                    <div class="border border-2 border-secondary rounded-3 p-3 shadow-sm">
                        <h5><strong>Kelas 9</strong></h5>
                        @if ($bab->where('kelas', '==', '9')->isEmpty())
                            <p class="badge rounded-pill bg-secondary">Belum ada Materi untuk kelas 9</p>
                        @else
                            <ol class="list-group list-group-numbered">
                                @foreach ($bab->where('kelas', '==', '9') as $rincianMapel)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <a href="{{ route('rincian_bab.show', $rincianMapel->id) }}">
                                                <div>{{ $rincianMapel->nama }}</div>
                                            </a>
                                        </div>
                                        @if (Auth::check() && Auth::user()->role == 'admin')
                                            <form action="{{ route('hapus_bab', ['id' => $rincianMapel->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class='bx bxs-trash-alt'></i>
                                                </button>

                                                <div class="modal" tabindex="-1" id="deleteModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Yakin ingin menghapus bab
                                                                    <strong>{{ $rincianMapel->nama }}</strong> ?
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- / Content -->
@endsection
