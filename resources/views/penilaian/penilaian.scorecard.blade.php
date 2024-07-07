@extends('layouts.app')

@section('content')
<h1>Scorecard</h1>

<form action="{{ route('penilaian.scorecard') }}" method="GET">
    <div>
        <label for="user_id">Pilih Juri:</label>
        <select name="user_id" id="user_id">
            <option value="">Semua Juri</option>
            @foreach ($juris as $juri)
                <option value="{{ $juri->id }}" {{ request('user_id') == $juri->id ? 'selected' : '' }}>{{ $juri->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="team_id">Pilih Tim:</label>
        <select name="team_id" id="team_id">
            <option value="">Semua Tim</option>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ request('team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Filter</button>
</form>

<table class="table mt-4">
    <thead>
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
@endsection
