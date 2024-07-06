@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-5">Penilaian untuk {{ $team->name }} oleh {{ $juri->nama }}</h1>
            </div>
        </div>
    </div>
</section>
<br>
<form action="{{ route('penilaian.store', [$team->id, $juri->id]) }}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            @foreach ($kriterias as $kriteria)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/67/04/69/670469b3a849a02dc43190c497979ac5.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $kriteria->name }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @for ($i = 1; $i <= 4; $i++)
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="score[{{ $kriteria->id }}]" id="score{{ $kriteria->id }}_{{ $i }}" value="{{ $i }}" />
                                <label class="form-check-label" for="score{{ $kriteria->id }}_{{ $i }}">
                                    {{ $i }}
                                </label>
                            </div>
                        </li>
                        @endfor
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-md btn-primary w-100">Simpan Penilaian</button>
            </div>
        </div>
    </div>
</form>
@endsection
