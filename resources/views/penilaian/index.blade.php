@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Daftar Team</h1>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <div class="row">
        @foreach ($teams as $index => $team)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card p-1 h-100">
                <div class="card-body" style="background-color: #95d2b3">
                    {{-- <p>Team {{ $index + 1 }}</p> --}}
                    <h5 class="card-title">
                        {{ $team->name }}
                    </h5>
                </div>
                <a href="{{ route('penilaian.create', $team->id) }}" class="card-link btn btn-md w-100 btn-dark mt-3">
                    Beri Nilai
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
