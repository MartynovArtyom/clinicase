@extends('social.index')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit_profile.css') }}"/>
@endpush

@section('content')
<div class="container content mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-3 mb-lg-0 order-1 mb-3 order-lg-0">
            @component('social.left_menu') @endcomponent
        </div>

        <div class="col-lg-9 order-2 order-lg-1">

            <div class="row justify-content-start profile-editor">
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">{{ __('Editer le profil') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{url('/edit-profile/')}}" enctype="multipart/form-data">
                                @csrf
                                {{-- user_name --}}
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Pseudo') }}</label>

                                    <div class="col-md-6">
                                        <input id="username"
                                               type="text"
                                               class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                               name="username"
                                               value="{{ old('username', Auth::user()->username) }}"
                                               required
                                               autofocus
                                        >

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- email --}}
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email"
                                               type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email"
                                               value="{{ old('email', Auth::user()->email) }}"
                                               required
                                        >

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- pass --}}

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4 wrap-link-password">
                                        <a class="link-password" href="{{url('password/reset/')}}">Changer le mot de passe</a>
                                    </div>
                                </div>

                                {{-- image --}}
                                <div class="form-group row wrap-img-preview">
                                    <div class="col-md-4 col-form-label text-md-right">
                                        {{ __('Photo de profil') }}
                                    </div>

                                    <div class="col-md-6">
                                        <label for="image" class="custom-btn form-control">
                                            {{ __('Aucun fichier') }}
                                        </label>
                                        <input id="image"
                                               type="file"
                                               class="custom-btn form-control"
                                               name="image"
                                               accept="image/*"
                                               style="display: none"
                                        >
                                    </div>

                                    <div class="col-md-2 img-preview-profil">
                                        <img class="rounded-circle"
                                             src="{{ isset(Auth::user()->image) ? asset('images/uploads/avatars/'.Auth::user()->image) : asset('images/photo.jpg') }}">
                                    </div>

                                </div>
                                {{-- first_name --}}
                                <div class="form-group row">
                                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_name"
                                               type="text"
                                               class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                               name="first_name"
                                               value="{{ old('first_name', Auth::user()->first_name) }}"
                                               required
                                        >

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- last_name --}}
                                <div class="form-group row">
                                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                    <div class="col-md-6">
                                        <input id="last_name"
                                               type="text"
                                               class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                               name="last_name"
                                               value="{{ old('last_name', Auth::user()->last_name) }}"
                                               required>

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- phone --}}
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_number"
                                               type="text"
                                               class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                               name="phone_number"
                                               value="{{ old('phone_number', Auth::user()->phone_number) }}"
                                               required
                                        >

                                        @if ($errors->has('phone_number'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- user_type --}}
                                <div class="form-group row">
                                    <div class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</div>

                                    <div class="col-md-6">
                                        <input type="radio"
                                               name="user_profile"
                                               id="user_profile_1"
                                               value="1"
                                               @if (old('user_profile', Auth::user()->user_profile) == 1) checked @endif
                                        >
                                        <label for="user_profile_1">Médecin</label> <br>
                                        <input type="radio"
                                               name="user_profile"
                                               id="user_profile_2"
                                               value="2"
                                               @if (old('user_profile', Auth::user()->user_profile) == 2) checked @endif
                                        >
                                        <label for="user_profile_2">Interne en médecine </label> <br>
                                        <input type="radio"
                                               name="user_profile"
                                               id="user_profile_3"
                                               value="3"
                                               @if (old('user_profile', Auth::user()->user_profile) == 3) checked @endif
                                        >
                                        <label for="user_profile_3">Etudiant </label> <br>
                                        <input type="radio"
                                               name="user_profile"
                                               id="user_profile_0"
                                               value="0"
                                               @if (old('user_profile', Auth::user()->user_profile) == 0) checked @endif
                                        >
                                        <label for="user_profile_0">Autre profession médicale </label> <br>

                                        @if ($errors->has('user_profile'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('user_profile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- specialty --}}
                                <div class="form-group row specialty_content">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Spécialité') }}</label>

                                    <div class="col-md-6 center-select">
                                        <select name="specialty_id" class="specialty_id">
                                            @forelse ($specialty as $data)
                                                <option value="{{ $data->id }}"
                                                        @if (old('specialty_id', Auth::user()->specialty_id) == $data->id) selected @endif
                                                >
                                                    {{ $data->name }}
                                                </option>
                                            @empty
                                                <option>Not specialty</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4 center-button">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Sauvegarder le profil') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/edit_profile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/reqister.js') }}"></script>
@endpush
