<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictController extends Controller
{
    public function form()
    {
        return view('prediksi');
    }

    public function predict(Request $request)
    {
        // Ambil input dari form
        $experience = $request->input('experience');
        $projects = $request->input('projects');
        $rating = $request->input('rating');

        // Kirim ke API Flask
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'Years_At_Company' => $experience,
            'Projects_Handled' => $projects,
            'Performance_Score' => $rating,
        ]);

        // Ambil hasil dari response JSON
        $data = $response->json();

        // Kirim semua data ke view
        return view('hasil', [
            'prediction' => $data['prediction'],
            'experience' => $experience,
            'projects' => $projects,
            'rating' => $rating,
        ]);
    }
}
