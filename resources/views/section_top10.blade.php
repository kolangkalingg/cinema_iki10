<div class="mt-8">
    <div class="flex justify-start mb-4 ml-5">
        <h2 class="text-2xl font-bold text-center mr-4">Top 10</h2>
        <button id="showMovies" class="toggle-btn active">Movies</button>
        <button id="showTVShows" class="toggle-btn">TV Shows</button>
    </div>

    {{-- TOP 10 Movies --}}
    <div id="moviesSection" class="mt-8">
        <div class="flex items-center justify-between mt-4">
            <button id="prevMovies" class="bg-white text-white p-2 rounded-l-lg hover:bg-gray-600 transition-colors">
                <svg width="7px" height="12px" viewBox="0 0 7 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-619.000000, -2862.000000)">
                            <g id="Image" transform="translate(100.000000, 2626.000000)">
                                <g id="-Round-/-Image-/-navigate_next" transform="translate(510.000000, 230.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M14.69,6.71 C15.08,7.1 15.08,7.73 14.69,8.12 L10.81,12 L14.69,15.88 C15.08,16.27 15.08,16.9 14.69,17.29 C14.3,17.68 13.67,17.68 13.28,17.29 L8.69,12.7 C8.3,12.31 8.3,11.68 8.69,11.29 L13.28,6.7 C13.66,6.32 14.3,6.32 14.69,6.71 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <div id="movieCarousel" class="flex space-x-4 overflow-x-auto">
                @foreach ($remainingMovies as $movie)
                @php
                    $movieYear = date("Y", strtotime($movie->release_date));
                    $movieImage = "{$imageBaseURL}/w300{$movie->poster_path}";
                @endphp
                <a href="#" class="flex-none bg-white shadow-lg rounded-lg overflow-hidden w-[180px] hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="{{ $movieImage }}" class="h-56 w-full object-cover" alt="{{ $movie->title }}">
                        <div class="absolute top-2 left-2 bg-white bg-opacity-80 px-2 py-1 rounded-full flex items-center text-sm font-semibold">
                            <svg class="w-4 h-4 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.344l1.172-1.172a4 4 0 115.656 5.656L10 17.656l-6.828-6.828a4 4 0 010-5.656z" />
                            </svg>
                            {{ $movie->vote_average }}
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">{{ $movie->title }}</h5>
                        <p class="text-gray-600">{{ $movieYear }}</p>
                    </div>
                </a>
                @endforeach
            </div>
            <button id="nextMovies" class="bg-white text-white p-2 rounded-r-lg hover:bg-gray-600 transition-colors">
                <svg width="7px" height="12px" viewBox="0 0 7 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-619.000000, -2862.000000)">
                            <g id="Image" transform="translate(100.000000, 2626.000000)">
                                <g id="-Round-/-Image-/-navigate_next" transform="translate(510.000000, 230.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M9.31,6.71 C8.92,7.1 8.92,7.73 9.31,8.12 L13.19,12 L9.31,15.88 C8.92,16.27 8.92,16.9 9.31,17.29 C9.7,17.68 10.33,17.68 10.72,17.29 L15.31,12.7 C15.7,12.31 15.7,11.68 15.31,11.29 L10.72,6.7 C10.34,6.32 9.7,6.32 9.31,6.71 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>

    {{-- TOP 10 TV Shows --}}
    <div id="tvShowsSection" class="mt-8 hidden">
        <div class="flex items-center justify-between mt-4">
            <button id="prevTVShows" class="bg-white text-white p-2 rounded-l-lg hover:bg-gray-600 transition-colors">
                <svg width="7px" height="12px" viewBox="0 0 7 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-619.000000, -2862.000000)">
                            <g id="Image" transform="translate(100.000000, 2626.000000)">
                                <g id="-Round-/-Image-/-navigate_next" transform="translate(510.000000, 230.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M14.69,6.71 C15.08,7.1 15.08,7.73 14.69,8.12 L10.81,12 L14.69,15.88 C15.08,16.27 15.08,16.9 14.69,17.29 C14.3,17.68 13.67,17.68 13.28,17.29 L8.69,12.7 C8.3,12.31 8.3,11.68 8.69,11.29 L13.28,6.7 C13.66,6.32 14.3,6.32 14.69,6.71 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <div id="tvCarousel" class="flex space-x-4 overflow-x-auto">
                @foreach ($remainingTVShows as $show)
                @php
                    $showYear = date("Y", strtotime($show->first_air_date));
                    $showImage = "{$imageBaseURL}/w300{$show->poster_path}";
                @endphp
                <a href="#" class="flex-none bg-white shadow-lg rounded-lg overflow-hidden w-[180px] hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img src="{{ $showImage }}" class="h-56 w-full object-cover" alt="{{ $show->name }}">
                        <div class="absolute top-2 left-2 bg-white bg-opacity-80 px-2 py-1 rounded-full flex items-center text-sm font-semibold">
                            <svg class="w-4 h-4 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.344l1.172-1.172a4 4 0 115.656 5.656L10 17.656l-6.828-6.828a4 4 0 010-5.656z" />
                            </svg>
                            {{ $show->vote_average }}
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold">{{ $show->name }}</h5>
                        <p class="text-gray-600">{{ $showYear }}</p>
                    </div>
                </a>
                @endforeach
            </div>
            <button id="nextTVShows" class="bg-white text-white p-2 rounded-r-lg hover:bg-gray-600 transition-colors">
                <svg width="7px" height="12px" viewBox="0 0 7 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Rounded" transform="translate(-619.000000, -2862.000000)">
                            <g id="Image" transform="translate(100.000000, 2626.000000)">
                                <g id="-Round-/-Image-/-navigate_next" transform="translate(510.000000, 230.000000)">
                                    <g>
                                        <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M9.31,6.71 C8.92,7.1 8.92,7.73 9.31,8.12 L13.19,12 L9.31,15.88 C8.92,16.27 8.92,16.9 9.31,17.29 C9.7,17.68 10.33,17.68 10.72,17.29 L15.31,12.7 C15.7,12.31 15.7,11.68 15.31,11.29 L10.72,6.7 C10.34,6.32 9.7,6.32 9.31,6.71 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>
