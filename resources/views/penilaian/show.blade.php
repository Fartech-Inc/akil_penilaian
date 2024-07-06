<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Penilaian untuk {{ $team->name }}</h1>
    <ul>
        @foreach ($penilaians as $penilaian)
            <li>
                Juri: {{ $penilaian->juri->nama }}, Kriteria: {{ $penilaian->kriteria->name }},
                Score1: {{ $penilaian->score1 }},
                Score2: {{ $penilaian->score2 }},
                Score3: {{ $penilaian->score3 }},
                Score4: {{ $penilaian->score4 }},
                Score5: {{ $penilaian->score5 }}
            </li>
        @endforeach
    </ul>
</body>
</html>