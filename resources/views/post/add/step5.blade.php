@extends('layouts.app')

@section('content')
    <form action="{{ route('post-add-step5') }}" method="POST">
        @csrf
        <label for="case5">case5</label>
        <input type="text" name="case5" id="case5" value="{{ $case5 }}">


        <a class="btn btn-success" href="{{ route('post-add-step5') }}">Prev Step</a>
        <input type="submit" value="Next Step" class="btn btn-success">
    </form>
    - Drop-down list allowing the user to select the “Spécialité médicale” [Medical specialty].
    - Drop-down list allowing the user to select the “Région anatomique” [Anatomical region].
    - “Description” text field allowing the user to provide details on the clinical case.
    “Suivant” [Next] button is added allowing the user to publish the clinical case.

@endsection
