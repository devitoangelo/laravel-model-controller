@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card" style="height: 350px">

                        <div class="card-title">

                            <h3> {{ $movie->title }}</h3>

                            <h5>{{ $movie->original_title }}</h5>
                        </div>
                        <div class="card-body">
                            <p> Nazionalità : {{ $movie->nationality }}</p>
                            <p>Date Movies : {{ $movie->date }}</p>
                        </div>
                        <div>
                            Voto : {{ $movie->vote }}
                        </div>


                    </div>
                </div>
            @empty
                <div class="col">
                    <p>No movie</p>

                </div>
            @endforelse

        </div>




    </div>
@endsection
