@extends('welcome')
@section('content')
    <!-- Layout wrapper -->

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex">
            <!-- Button to previous route -->
            <a href="{{ URL::previous() }}" class="">
                <i class="bx bx-arrow-back me-2"></i>
            </a>

            <h4 class="mb-4">{{ $bab->nama }}</h4>
        </div>

        <iframe width="100%" height="550" src="https://www.youtube.com/embed/{{ $rincianBab->video }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <!-- / Content -->
@endsection
