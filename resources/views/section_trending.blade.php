
{{-- section 1 --}}
<div class="mt-8 container mx-auto">
    <div class="flex justify-between">
      {{-- Trending Movies --}}
      <div class="w-1/2 pr-4">
        <h2 class="text-2xl font-bold text-center">Trending Movies</h2>
        <div class="mt-4">
          @foreach ($top3Movies as $movie)
          @php
            $movieImage = "{$imageBaseURL}/w400{$movie->poster_path}";
            $movieOverview = Str::limit($movie->overview, 100);
          @endphp
          <div class="flex items-start mb-4">
            <img src="{{ $movieImage }}" class="h-32 w-24 object-cover mr-4" alt="{{ $movie->title }}">
            <div>
              <a href=""><h5 class="text-lg font-semibold">{{ $movie->title }} ({{ date('Y', strtotime($movie->release_date)) }})</h5></a>
              <p class="text-gray-600">{{ $movieOverview }} @if (strlen($movie->overview) > 100)<a href="#" class="text-blue-600">baca selengkapnya</a>@endif</p>
              <div class="flex items-center text-sm mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.344l1.172-1.172a4 4 0 115.656 5.656L10 17.656l-6.828-6.828a4 4 0 010-5.656z" /></svg>
                <span>{{ $movie->vote_average }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      {{-- Trending TV Shows --}}
      <div class="w-1/2 pl-4">
        <h2 class="text-2xl font-bold text-center">Trending TV Shows</h2>
        <div class="mt-4">
          @foreach ($top3TVShows as $show)
          @php
            $showImage = "{$imageBaseURL}/w400{$show->poster_path}";
            $showOverview = Str::limit($show->overview, 100);
          @endphp
          <div class="flex items-start mb-4">
            <img src="{{ $showImage }}" class="h-32 w-24 object-cover mr-4 " alt="{{ $show->name }}">
            <div>
              <h5 class="text-lg font-semibold">{{ $show->name }} ({{ date('Y', strtotime($show->first_air_date)) }})</h5>
              <p class="text-gray-600">{{ $showOverview }} @if (strlen($show->overview) > 100)<a href="#" class="text-blue-600">baca selengkapnya</a>@endif</p>
              <div class="flex items-center text-sm mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.344l1.172-1.172a4 4 0 115.656 5.656L10 17.656l-6.828-6.828a4 4 0 010-5.656z" /></svg>
                <span>{{ $show->vote_average }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  {{-- end section 1 --}}
