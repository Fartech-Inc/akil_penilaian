<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Juri;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
   public function index()
    {
        $juri = Auth::user();
        
        $teams = Team::whereDoesntHave('penilaians', function ($query) use ($juri) {
            $query->where('user_id', $juri->id);
        })
        ->withCount('penilaians')
        // ->having('penilaians_count', '<', 5)
        ->get();

        return view('penilaian.index', compact('teams'));
    }

    public function create(Team $team)
    {
        $juri = Auth::user();
        $kriterias = Kriteria::with('komponens')->get();
        return view('penilaian.create', compact('team', 'juri', 'kriterias'));
    }

    public function store(Request $request, Team $team)
    {
        // Validasi input
        $request->validate([
            'scores' => 'required|array',
            'scores.*' => 'required|integer|min:1|max:4',
        ]);

        $juri = Auth::user();

        foreach ($request->scores as $kriteria_id => $score) {
            // Cek apakah penilaian sudah ada
            $existingPenilaian = Penilaian::where('user_id', $juri->id)
                                        ->where('team_id', $team->id)
                                        ->where('kriteria_id', $kriteria_id)
                                        ->first();

            if ($existingPenilaian) {
                // Jika sudah ada, update score
                $existingPenilaian->update(['score' => $score]);
            } else {
                // Jika belum ada, buat penilaian baru
                Penilaian::create([
                    'user_id' => $juri->id,
                    'team_id' => $team->id,
                    'kriteria_id' => $kriteria_id,
                    'score' => $score,
                ]);
            }
        }

        // Hitung total score untuk tim ini dari semua juri
        $penilaians = Penilaian::where('team_id', $team->id)->get();
        $totalScore = $penilaians->sum('score');

        // Update total_score pada tabel teams
        $team->update(['total_score' => $totalScore]);

        return redirect()->route('penilaian.result', ['team' => $team->id]);
    }

    public function show(Team $team)
    {
        $penilaians = $team->penilaians()->with('juri', 'kriteria')->get();
        return view('penilaian.show', compact('team', 'penilaians'));
    }

    // public function winners()
    // {
    //     $teams = Team::orderBy('total_score', 'desc')->get();
    //     return view('penilaian.winners', compact('teams'));
    // }

    public function winners()
    {
        $categories = Team::select('category')
                        ->distinct()
                        ->orderBy('category')
                        ->get()
                        ->pluck('category');

        $teams = Team::orderBy('total_score', 'desc')
                    ->get()
                    ->groupBy('category');

        return view('penilaian.winners', compact('teams', 'categories'));
    }


    public function scorecard(Request $request)
    {
        $users = User::all();
        $teams = Team::all();

        $query = Penilaian::query();

        if ($request->has('user_id') && $request->user_id != '') {
            $query->where('user_id', $request->user_id);
        }

        if ($request->has('team_id') && $request->team_id != '') {
            $query->where('team_id', $request->team_id);
        }

        $penilaians = $query->with('user', 'team', 'kriteria')->get();

        return view('penilaian.scorecard', compact('users', 'teams', 'penilaians'));
    }

    public function result(Team $team)
    {
        $user = Auth::user();
        // dd($user);

        // Ambil semua penilaian yang dilakukan oleh user ini untuk tim ini
        $penilaians = Penilaian::where('team_id', $team->id)
                                ->where('user_id', $user->id)
                                ->with('kriteria')
                                ->get();

        // Hitung total score untuk tim ini dari user ini
        $totalScore = $penilaians->sum('score');

        return view('penilaian.result', compact('team', 'user', 'penilaians', 'totalScore'));
    }





}
