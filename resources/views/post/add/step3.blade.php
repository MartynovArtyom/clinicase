@extends('layouts.app')

@section('content')

    <form action="{{ route('post-add-step3') }}" method="POST">
        @csrf
        <label for="case3">case3</label>
        <input type="text" name="case3" id="case3" value="{{ $case3 }}">


        <a class="btn btn-success" href="{{ route('post-add-step2') }}">Prev Step</a>
        <input type="submit" value="Next Step" class="btn btn-success">
    </form>
    Page from which one or several photos can be uploaded
    Page 3b (medical imaging):
    Page from which one or several DICOM files in jpeg format can be uploaded.
@endsection
