@extends('layouts.app')
@section('content')
<table >
    <thead>
        <th>tipe ujian</th>
        <th>soal</th>
        <th>nilai</th>
    </thead>
    @foreach($data as $dm)
    <tbody>
        <td>{{ $dm->question_type }}</td>
        <td>{{ $dm->text}}</td>
        <td>{{ $dm->value}}</td>
    </tbody>
    @endforeach
</table>
@endsection
