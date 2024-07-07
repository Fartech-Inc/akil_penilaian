@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Hasil Penilaian</h1>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <div class="alert alert-success">
        <strong>Total Score: {{ $totalScore }}</strong>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Juri</th>
                    <th>Kriteria</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penilaians as $penilaian)
                    <tr>
                        <td>{{ $penilaian->juri->nama }}</td>
                        <td>{{ $penilaian->kriteria->name }}</td>
                        <td>{{ $penilaian->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
