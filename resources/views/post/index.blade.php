@extends('layouts.app')

@section('content')
<a class="btn btn-success" href="{{ route('post-add-step1') }}">Add</a>
@foreach ($list as $item)
    <p>title {{ $item->title }}</p><br>
@endforeach
@endsection
