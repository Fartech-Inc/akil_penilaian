<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Penilaian untuk {{ $team->name }} oleh {{ $juri->nama }}</h1>
<form action="{{ route('penilaian.store', [$team->id, $juri->id]) }}" method="POST">
    @csrf
    @foreach ($kriterias as $kriteria)
        <h3>{{ $kriteria->name }}</h3>
        <div>
            @for ($i = 1; $i <= 4; $i++)
                <label for="score{{ $kriteria->id }}_{{ $i }}">
                    <input type="radio" id="score{{ $kriteria->id }}_{{ $i }}" name="score[{{ $kriteria->id }}]" value="{{ $i }}"> {{ $i }}
                </label>
            @endfor
        </div>
    @endforeach
    <br>
    <button type="submit">Simpan Penilaian</button>
</form>


</body>
</html>