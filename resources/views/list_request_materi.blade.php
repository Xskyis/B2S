@php
    // Menggunakan Carbon untuk format tanggal
    use Carbon\Carbon;
@endphp

@extends('welcome')
@section('judul', 'List Requestan Materi')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @if ($requestMateris->isEmpty())
                <div class="container d-flex justify-content-center">
                    <p class="alert alert-primary text-center w-75">
                        Belum ada requestan materi !
                    </p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="table-secondary">
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mapel</th>
                            <th>Requestan Materi</th>
                            <th>Tanggal Request</th>
                        </tr>

                        @foreach ($requestMateris as $req)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $req->nama }}</td>
                                <td>{{ $req->kelas }}</td>
                                <td>{{ $req->mapel }}</td>
                                <td>{{ $req->req_materi }}</td>
                                <td class="d-flex flex-wrap">
                                    <i class="menu-icon tf-icons bx bxs-calendar"></i>
                                    {{ Carbon::parse($req->created_at)->format('d F Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @endif

            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    {{ $requestMateris->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>
    </div>
@endsection
