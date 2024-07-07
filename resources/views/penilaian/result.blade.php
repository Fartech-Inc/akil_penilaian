@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>Hasil Penilaian</h1>
                </div>
                <div class="card-body">
                    <h3 class="text-center">Tim: {{ $team->name }}</h3>
                    <h4 class="text-center">Oleh Juri: {{ $juri->nama }}</h4>

                    <div class="table-responsive my-4">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Juri</th>
                                    <th>Tim</th>
                                    <th>Kriteria</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penilaians as $penilaian)
                                    <tr>
                                        <td>{{ $penilaian->juri->nama }}</td>
                                        <td>{{ $penilaian->team->name }}</td>
                                        <td>{{ $penilaian->kriteria->name }}</td>
                                        <td>{{ $penilaian->score }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h4 class="text-center my-4">Total Score: {{ $totalScore }}</h4>
                    
                    <div class="text-center">
                        <a href="{{ route('penilaian.index') }}" class="btn btn-primary">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
