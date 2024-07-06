<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Juri;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Team;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    // public function index()
    // {
    //     $teams = Team::all();
    //     return view('penilaian.index', compact('teams'));
    // }

    public function index()
    {
        // Ambil semua tim yang belum dinilai oleh 5 juri
        $teams = Team::withCount('penilaians')
                    ->having('penilaians_count', '<', 5)
                    ->get();

        $juris = Juri::all(); // Juga ambil semua juri untuk ditampilkan di dropdown

        return view('penilaian.index', compact('teams', 'juris'));
    }

    public function selectJuri(Team $team)
    {
        $juris = Juri::all();
        return view('penilaian.selectJuri', compact('team', 'juris'));
    }

    public function create(Request $request, Team $team)
    {
        $juri = Juri::findOrFail($request->juri_id);
        $kriterias = Kriteria::all();
        return view('penilaian.create', compact('team', 'juri', 'kriterias'));
    }

    // public function create($team_id, $juri_id)
    // {
    //     $team = Team::findOrFail($team_id);
    //     $juri = Juri::findOrFail($juri_id);
    //     $kriterias = Kriteria::all();
        
    //     return view('penilaian.create', compact('team', 'juri', 'kriterias'));
    // }

    // public function store(Request $request, Team $team, Juri $juri)
    // {
    //     // Validasi request
    //     $request->validate([
    //         'score' => 'required|array', // Memastikan 'score' ada dan merupakan array
    //         'score.*' => 'required|integer|between:1,4', // Memastikan setiap nilai score berada di antara 1-4
    //     ]);

    //     foreach ($request->score as $kriteria_id => $score) {
    //         Penilaian::create([
    //             'juri_id' => $juri->id,
    //             'team_id' => $team->id,
    //             'kriteria_id' => $kriteria_id,
    //             'score1' => $score,
    //             // Anda bisa menyesuaikan sesuai kebutuhan untuk score2, score3, score4, score5
    //             // Sesuaikan dengan logika aplikasi Anda
    //             'score2' => 0,
    //             'score3' => 0,
    //             'score4' => 0,
    //             'score5' => 0,
    //         ]);
    //     }

    //     // Contoh perhitungan total skor berdasarkan score1 saja
    //     $totalScore = $team->penilaians->sum('score1');
    //     $team->update(['total_score' => $totalScore]);

    //     return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil disimpan');
    // }

    public function store(Request $request, Team $team, Juri $juri)
    {
        $kriterias = Kriteria::all();

        foreach ($kriterias as $kriteria) {
            if ($request->has("scores.{$kriteria->id}")) {
                $score = $request->input("scores.{$kriteria->id}");

                // Perbarui atau buat penilaian baru
                Penilaian::updateOrCreate(
                    [
                        'juri_id' => $juri->id,
                        'team_id' => $team->id,
                        'kriteria_id' => $kriteria->id,
                    ],
                    [
                        'score' => $score,
                    ]
                );
            }
        }

        // Hitung total skor untuk team
        $total_score = Penilaian::where('team_id', $team->id)->sum('score');
        $team->update(['total_score' => $total_score]);

        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil disimpan.');
    }


    public function show(Team $team)
    {
        $penilaians = $team->penilaians()->with('juri', 'kriteria')->get();
        return view('penilaian.show', compact('team', 'penilaians'));
    }

    public function winners()
    {
        $teams = Team::orderBy('total_score', 'desc')->get();
        return view('penilaian.winners', compact('teams'));
    }

    // public function scorecard()
    // {
    //     $juris = Juri::all();
    //     $teams = Team::all();
    //     return view('penilaian.scorecard', compact('juris', 'teams'));
    // }

    // public function scorecard(Request $request)
    // {
    //     $juris = Juri::all();
    //     $teams = Team::all();

    //     $query = Penilaian::query();

    //     // Filter berdasarkan juri_id jika dipilih
    //     if ($request->has('juri_id') && $request->juri_id != '') {
    //         $query->where('juri_id', $request->juri_id);
    //     }

    //     // Filter berdasarkan team_id jika dipilih
    //     if ($request->has('team_id') && $request->team_id != '') {
    //         $query->where('team_id', $request->team_id);
    //     }

    //     $penilaians = $query->with('juri', 'team', 'kriteria')->get();

    //     return view('penilaian.scorecard', compact('juris', 'teams', 'penilaians'));
    // }

    public function scorecard(Request $request)
    {
        $juris = Juri::all();
        $teams = Team::all();

        $query = Penilaian::query();

        if ($request->has('juri_id') && $request->juri_id != '') {
            $query->where('juri_id', $request->juri_id);
        }

        if ($request->has('team_id') && $request->team_id != '') {
            $query->where('team_id', $request->team_id);
        }

        $penilaians = $query->with('juri', 'team', 'kriteria')->get();

        return view('penilaian.scorecard', compact('juris', 'teams', 'penilaians'));
    }

}
