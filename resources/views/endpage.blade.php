
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/new.css') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container-fluid">
    <br><br><br><br><br>
    <br><br><br>
    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-5">
            <label>Correct:</small>{{Session::get('correctans')}}</small> </label>&nbsp;&nbsp;
            <label>Incorrect:</small>{{Session::get('wrongans')}}</small> </label>&nbsp;&nbsp;
            <label>Result:</small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small> </label>&nbsp;&nbsp;

            <br>
            <a href="/"><button class="btn btn-primary" style="margin-left:7%">End</button></a>
            {{-- <div class="text-center"><a href="/mainpage">Home</a> --}}

            </div>
        </div>

    </div>
</div>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
