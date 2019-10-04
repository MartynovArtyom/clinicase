@extends('layouts.app')

@section('content')
    <form action="{{ route('post-add-step4') }}" method="POST">
        @csrf
        <label for="case4">case4</label>
        <input type="text" name="case4" id="case4" value="{{ $case4 }}">


        <a class="btn btn-success" href="{{ route('post-add-step3') }}">Prev Step</a>
        <input type="submit" value="Next Step" class="btn btn-success">
    </form>
    Graphical editing of the photo to make photo anonymous: photo is displayed with a “brush” icon at the bottom of the screen. This brush allows the user to paint over one or several areas of the photo to hide a face, a tattoo, or any other identifying feature.

    An “Undo” button makes it possible to undo any modifications made with the brush. An “Approve” button allows the user to approve the photo (button becomes active after the user has clicked on the box “I hereby confirm that I made the patient anonymous.”).
@endsection
