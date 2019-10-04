@extends('layouts.app')

@section('content')
    <form action="{{ route('post-add-step1') }}" method="POST">
        @csrf
        <label for="case">case</label>
        <input type="text" name="case" id="case" value="{{ (!empty($new_post_form['case']))? $new_post_form['case'] : ''}}">
        <a class="btn btn-success" href="{{ route('post-page') }}">Cancel</a>
        <input type="submit" value="Next Step" class="btn btn-success">
    </form>
    Form with a radio button:
    - I would like to add a case, illustrated using one or several photos
    - I would like to add a medical imaging case (MRI, scanner, etc.)
@endsection