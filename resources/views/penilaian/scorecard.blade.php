@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Scorecard</h1>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <form action="{{ route('penilaian.scorecard') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <label for="juri_id" class="form-label">Pilih Juri:</label>
                <select name="juri_id" id="juri_id" class="form-select">
                    <option value="">Semua Juri</option>
                    @foreach ($juris as $juri)
                        <option value="{{ $juri->id }}" {{ request('juri_id') == $juri->id ? 'selected' : '' }}>{{ $juri->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="team_id" class="form-label">Pilih Tim:</label>
                <select name="team_id" id="team_id" class="form-select">
                    <option value="">Semua Tim</option>
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ request('team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
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
</div>
@endsection
