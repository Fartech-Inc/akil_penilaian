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
    <form action="{{ route('penilaian.store', $team->id) }}" method="POST" id="penilaianForm">
        @csrf
        <div class="container">
            <div class="row">
                @foreach ($kriterias as $kriteria)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div
                                style="background-color: #B5D0DF; height: 200px; display: flex; justify-content: center; align-items: center;">
                                <img src="{{ asset('storage/'.$kriteria->image) }}" style="width: 100px; height: 100px;">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $kriteria->name }}</h5>
                                <h5 class="card-title text-center">{{ $kriteria->desc }}</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($kriteria->komponens as $komponen)
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="scores[{{ $kriteria->id }}]" id="kriteria{{ $kriteria->id }}_komponen{{ $komponen->id }}" value="{{ $komponen->score }}" required>
                                            <label class="form-check-label" for="kriteria{{ $kriteria->id }}_komponen{{ $komponen->id }}">
                                                {{ $komponen->score }} {{ $komponen->name }}
                                            </label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-md btn-primary w-100" id="submitBtn" disabled>Simpan Penilaian</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('penilaianForm');
            const submitBtn = document.getElementById('submitBtn');
            const radioButtons = form.querySelectorAll('input[type="radio"]');

            form.addEventListener('change', function() {
                let allChecked = true;
                @foreach ($kriterias as $kriteria)
                    if (!form.querySelector('input[name="scores[{{ $kriteria->id }}]"]:checked')) {
                        allChecked = false;
                    }
                @endforeach
                submitBtn.disabled = !allChecked;
            });
        });
    </script>
@endsection
