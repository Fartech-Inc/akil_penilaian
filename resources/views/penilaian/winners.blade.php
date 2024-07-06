@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Daftar Pemenang</h1>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Peringkat Tim</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($teams as $team)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $team->name }}</span>
                                <span class="badge bg-success">{{ $team->total_score }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
