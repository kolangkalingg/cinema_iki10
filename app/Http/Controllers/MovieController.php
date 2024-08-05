<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{

    public function index()
    {
        // Mendapatkan URL dasar API dan URL
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');

        // Mengambil data film trending dari API
        $trendingMoviesResponse = Http::get("{$baseURL}/trending/movie/week", [
            'api_key' => $apiKey,
        ]);

        // respons API film trending
        $trendingMovies = $trendingMoviesResponse->successful() ? $trendingMoviesResponse->object()->results : [];

        // Mengambil data TVshow
        $trendingTVShowsResponse = Http::get("{$baseURL}/trending/tv/week", [
            'api_key' => $apiKey,
        ]);


        // respons API TVshow trending
        $trendingTVShows = $trendingTVShowsResponse->successful() ? $trendingTVShowsResponse->object()->results : [];


        $top3Movies = array_slice($trendingMovies, 0, 3);
        $remainingMovies = array_slice($trendingMovies, 3);


        $top3TVShows = array_slice($trendingTVShows, 0, 3);
        $remainingTVShows = array_slice($trendingTVShows, 3);

        // Mengirimkan data ke view 'home'
        return view('home', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'top3Movies' => $top3Movies,
            'remainingMovies' => $remainingMovies,
            'top3TVShows' => $top3TVShows,
            'remainingTVShows' => $remainingTVShows,
        ]);
    }
}
