@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            {{ __('Dashboard') }}
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('role') }}
              </div>
            @endif
            @foreach($users as $user)
              <p>{{$user->name}}</p>
            @endforeach
            {{ __('You are logged in!') }}
          </div>
          <table >
            <thead>
              <th>tipe ujian</th>
            </thead>
            <tbody>
              @foreach($data_questions as $qs)
                <tr>
                  <td>{{ $qs->question_type }}</td>
                </tr>
            </tbody>
              @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
      <form action="/home" method="post" class="form-group">
        @csrf
        @foreach($question_array as $key => $qs)
        @php
          $q = 1+$key
        @endphp
        <div class="form-group">
          <label for="question" class="mt-3">Soal {{1+$key}}:</label>
          <p class="card-text">{{$qs->text}}</p>
          @foreach($qs->option as $v)
            <input name="radio_{{$q}}" class="d-block" type="radio" value="{{ $qs->id }},{{$v->idopt}}" data-question="{{ $qs->id }}">{{$v->text}}
          @endforeach
        </div>
        @endforeach
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
      </form>
        <form action="/value" method="get">
            <input type="submit" style="position: absolute; left:500px; top:100px" value="Cetak nilai">
        </form>
    </div>
  </div>
@endsection
