<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clinicase</title>

</head>
<body>
    <div class="container-fluid content background-qui-section2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-left">
                    Email: {{ $email }} <br/>
                    Name: {{ $name }} <br/>
                    Description: {{ $description }}


                    {{--<h2>Contact</h2>--}}

                    {{--<p>Adresse: <br>Clinicase <br>Voie de l’Ardenne, 173 <br>4053 Embourg <br>Belgique</p>--}}
                    {{--<p>Téléphone: <br>+32 (0)4 239 98 95</p>--}}

                </div>
            </div>
        </div>
    </div>
</body>
</html>
