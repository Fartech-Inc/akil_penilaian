<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pilih Juri untuk Menilai {{ $team->name }}</h1>
    <form action="{{ route('penilaian.create', [$team->id, 'juri' => 'juri_id']) }}" method="GET">
        <label for="juri_id">Juri:</label>
        <select name="juri_id" id="juri_id">
            @foreach ($juris as $juri)
                <option value="{{ $juri->id }}">{{ $juri->nama }}</option>
            @endforeach
        </select>
        <button type="submit">Pilih Juri</button>
    </form>
</body>
</html>