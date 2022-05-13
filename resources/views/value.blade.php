@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    @csrf
                    @foreach ($answer_array as $qs)
                        {{-- <p>{{$qs->id}}</p> --}}

                    @foreach ($qs->default as $de)
                        {{-- <p>{{$de->idds}}</p> --}}
                        @if ($qs->idopt == $de->idds)
                            <p style="color: green">{{$qs->id}} IF</p>
                        @else
                        <p style="color: red">{{$qs->id}} Else</p>
                        @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
