@extends('index')

@push('style')
@endpush

@section('content')
    <div class="container-fluid content background-qui-section2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-left">
                    <h2>Contact</h2>

                    <p>Adresse: <br>Clinicase <br>Voie de l’Ardenne, 173 <br>4053 Embourg <br>Belgique</p>
                    <p>Téléphone: <br>+32 (0)4 239 98 95</p>



                    <form method="POST" action="{{url('/contact/')}}" enctype="multipart/form-data">
                        @csrf

                        {{-- email --}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       value="{{ old('email', $value['email']) }}"
                                       required
                                       placeholder="Email"
                                >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- user_name --}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name"
                                       type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name"
                                       value="{{ old('name', $value['name']) }}"
                                       required
                                       placeholder="Name"
                                >

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <textarea id="description"
                                       class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                       name="description"
                                       required
                                       placeholder="Description"
                                >{{ old('description', $value['description']) }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
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
@endsection

@push('scripts')
@endpush