@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Leaderboard</h1>

    @foreach ($categories as $category)
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4>{{ strtoupper($category) }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Tim</th>
                            <th>Total Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams[$category] as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->total_score }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
