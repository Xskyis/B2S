@extends('welcome')
@section('content')
    <!-- Layout wrapper -->
    
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="mb-4">{{ $bab->nama }}</h4>
                <!-- Tampilkan video -->
                <div style="max-width: 80%;">
                    <video style="width: 80%; height: auto;" controls>
                        <source src="{{ asset('backend/assets/videos/' . $rincianBab->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <!-- / Content -->
@endsection