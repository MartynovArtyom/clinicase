@extends('layouts.app')

@section('content')
    <form action="{{ route('post-add-step6') }}" method="POST">
        @csrf
        <label for="case6">case6</label>
        <input type="text" name="case6" id="case6" value="{{ $case6 }}">


        <a class="btn btn-success" href="{{ route('post-add-step5') }}">Prev Step</a>
        <input type="submit" value="submit" class="btn btn-success">
    </form>
    Publication page: Display of the photo(s), modified or not modified.
    “Annuler” [Cancel] or “Publier” [Publish] button.
@endsection
