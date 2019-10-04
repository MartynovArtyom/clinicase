@extends('layouts.app')

@section('content')
    <form action="{{ route('post-add-step2') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="case2">case2</label>
        <input type="text" name="case2" id="case2" value="{{ (!empty($new_post_form['case2']))? $new_post_form['case2'] : ''}}">
<input type="file" name="photo">

        <a class="btn btn-success" href="{{ route('post-add-step1') }}">Prev Step</a>
        <input type="submit" value="Next Step" class="btn btn-success">
    </form>
    Warning statement to be accepted:

    AVERTISSEMENT
    Avant de mettre cette (ou ces) photo(s) en ligne, je m’engage à garantir l’anonymat du patient en effaçant tout signe d’identification :
    - visage, tatouage ou autre signe spécifique (piercing, cicatrice,…)
    - nom et prénom
    - date de naissance ou de décès
    - adresse
    - téléphone
    - email
    - toute autre élément d’identification

    + Bouton « J’accepte »

    [WARNING
    Prior to posting this photo / these photos online, I hereby attest that the patient’s identity shall remain anonymous by deleting all identifying features:
    - face, tattoos or any other identifying feature (piercing, scar, etc.)
    - Surname and name
    - Date of birth or date of death
    - Address
    - Phone number
    - E-mail
    - Any other identifying feature ]

    + “Accepted” button

@endsection
