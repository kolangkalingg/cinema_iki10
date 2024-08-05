<!DOCTYPE html>
<html lang="en">
<head>
  <title>iki ramadani</title>
  @vite('resources/css/app.css')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    .toggle-btn {
        padding: 0.5rem 1rem;
        color: white;
        border: 1px solid rgb(0, 0, 0);
        color: black;

    }
    .toggle-btn.active {
        background-color: rgb(46, 46, 175);
        border-radius: 4px;
    }
    .toggle-btn:not(.active) {
        background-color: transparent;

    }
</style>
<body class="bg-gray-100">


{{-- bagian navigasi --}}
@include('navigasi')

{{-- bagian treding --}}
@include('section_trending')

{{-- bagian top 10 --}}
@include('section_top10')

{{-- bagian footer --}}
@include('footer')


<script>
    document.getElementById('nextMovies').addEventListener('click', function() {
      document.getElementById('movieCarousel').scrollBy({ left: 180, behavior: 'smooth' });
    });

    document.getElementById('prevMovies').addEventListener('click', function() {
      document.getElementById('movieCarousel').scrollBy({ left: -180, behavior: 'smooth' });
    });

    document.getElementById('nextTVShows').addEventListener('click', function() {
      document.getElementById('tvShowCarousel').scrollBy({ left: 180, behavior: 'smooth' });
    });

    document.getElementById('prevTVShows').addEventListener('click', function() {
      document.getElementById('tvShowCarousel').scrollBy({ left: -180, behavior: 'smooth' });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const showMoviesButton = document.getElementById('showMovies');
        const showTVShowsButton = document.getElementById('showTVShows');
        const moviesSection = document.getElementById('moviesSection');
        const tvShowsSection = document.getElementById('tvShowsSection');

        showMoviesButton.addEventListener('click', function () {
            showMoviesButton.classList.add('active');
            showTVShowsButton.classList.remove('active');
            moviesSection.classList.remove('hidden');
            tvShowsSection.classList.add('hidden');
        });

        showTVShowsButton.addEventListener('click', function () {
            showTVShowsButton.classList.add('active');
            showMoviesButton.classList.remove('active');
            tvShowsSection.classList.remove('hidden');
            moviesSection.classList.add('hidden');
        });
    });
  </script>
</body>
</html>
