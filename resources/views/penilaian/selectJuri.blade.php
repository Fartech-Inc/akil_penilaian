@extends('layouts.app')

@section('content')
<section class="title">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center mt-5">Pilih Juri</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="pilih-juri m-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <form
            action="{{ route('penilaian.create', [$team->id, 'juri' => 'user_id']) }}"
            method="GET"
            class="d-flex justify-content-between align-items-center"
          >
            <select class="form-select" aria-label="Default select example" name="user_id" id="user_id">
                <option selected>-- Pilih Juri --</option>
                @foreach ($juris as $juri)
                    <option value="{{ $juri->id }}">{{ $juri->nama }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-sm btn-success"
              >Pilih Juri</button
            >
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection