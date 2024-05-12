@php
    // Menggunakan Carbon untuk format tanggal
    use Carbon\Carbon;
@endphp

@extends('welcome')
@section('judul', 'List Requestan Materi')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="">
               
            </div>
            @if ($requestMateris->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Belum ada requestan materi!
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="table-secondary text-center">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Mapel</th>
                            <th>Requestan Materi</th>
                            <th>Tanggal Request</th>
                        </tr>

                        @foreach ($requestMateris as $req)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $req->nama }}</td>
                                <td>{{ $req->mapel }}</td>
                                <td>{{ $req->req_materi }}</td>
                                <td><i class="menu-icon tf-icons bx bxs-calendar"></i>
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
