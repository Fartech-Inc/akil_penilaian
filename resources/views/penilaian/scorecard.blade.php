<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Scorecard</h1>
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
    @endif
</body>
</html>