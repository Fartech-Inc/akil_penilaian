<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Scorecard</h1>
    <form action="{{ route('penilaian.scorecard') }}" method="GET">
        <label for="juri_id">Juri:</label>
        <select name="juri_id" id="juri_id">
            @foreach ($juris as $juri)
                <option value="{{ $juri->id }}">{{ $juri->nama }}</option>
            @endforeach
        </select>

        <label for="team_id">Kelompok:</label>
        <select name="team_id" id="team_id">
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <button type="submit">Filter</button>
    </form>

    @if (isset($penilaians))
        <ul>
            @foreach ($penilaians as $penilaian)
                <li>
                    Juri: {{ $penilaian->juri->nama }}, Kelompok: {{ $penilaian->team->name }},
                    Score1: {{ $penilaian->score1 }},
                    Score2: {{ $penilaian->score2 }},
                    Score3: {{ $penilaian->score3 }},
                    Score4: {{ $penilaian->score4 }},
                    Score5: {{ $penilaian->score5 }}
                </li>
            @endforeach
        </ul>
    @endif --}}

    {{-- <form action="{{ route('penilaian.scorecard') }}" method="GET">
        <div>
            <label for="juri_id">Pilih Juri:</label>
            <select name="juri_id" id="juri_id">
                <option value="">Semua Juri</option>
                @foreach ($juris as $juri)
                    <option value="{{ $juri->id }}" {{ request('juri_id') == $juri->id ? 'selected' : '' }}>{{ $juri->nama }}</option>
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
    </form> --}}



    <form action="{{ route('penilaian.scorecard') }}" method="GET">
        <div>
            <label for="juri_id">Pilih Juri:</label>
            <select name="juri_id" id="juri_id">
                <option value="">Semua Juri</option>
                @foreach ($juris as $juri)
                    <option value="{{ $juri->id }}" {{ request('juri_id') == $juri->id ? 'selected' : '' }}>{{ $juri->nama }}</option>
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
    
    <table>
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
                <td>{{ $penilaian->score1 }}</td>
                <!-- Sesuaikan dengan field-score lainnya jika ada -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>