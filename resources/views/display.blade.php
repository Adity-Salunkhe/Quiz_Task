

<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/new.css') }}" rel="stylesheet">


<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

<html>
<body  id="divCounter">


<div class="back2" >
    <div class="container-fluid" >
        <div class="row" style="float:right; padding-top:20vh; padding-right:10vh"  >

            Time:<span id="time001">20</span>

           <div class="col-md-06">
        <form action="/submitans" method="post" id="form">
        @csrf



         </div>
         </div>
        <div class="row" style="padding-top:30vh; color:black;">
            <div  class="col-md-3"></div>
            <div  class="col-md-4">


                <h3>{{Session::get("nextq")}} : {{$questions->question}}</h3>
            <h4><input type="radio" value="option_1" name="ans">&nbsp;(A) <small style="font-size:20px;">{{$questions->option_1}}</small><br>
                <input type="radio" value="option_2" name="ans">&nbsp;(B) <small  style="font-size:20px">{{$questions->option_2}}</small><br>
                <input type="radio" value="option_3" name="ans">&nbsp;(C) <small  style="font-size:20px">{{$questions->option_3}}</small><br>
                <input type="radio" value="option_4" name="ans">&nbsp;(D) <small  style="font-size:20px">{{$questions->option_4}}</small><br>
                <input value="{{$questions->answer}}" style="visibility:hidden;" name="dbans"></h4>
            </div>

            <div  class="col-md-5"></div>
        </div>



        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">


            <button type="submit" style="float:right; "class="btn btn-primary">Next</button>

            </div>
            <div class="col-md-5"></div>
            <div class="wizard-footer">
                <div class="row">
                  <div class="col-xs-6 pull-left block-center">
                    <button id="wizard-prev" style="display:none" type="button" class="btn btn-irv btn-irv-default">
                      Previous
                    </button>
                  </div>
                  {{-- <div class="col-xs-6 pull-right text-center">
                    <button id="wizard-next" type="button" class="btn btn-irv">
                      Next
                    </button>
                  </div>
                  <div class="col-xs-6 pull-right block-center">
                    <button id="wizard-subm" style="display:none" type="submit" class="btn btn-irv">
                      Submit
                    </button>
                  </div>
                </div> --}}
            </div>
        </form>
        {{-- <form action="/previous" method="post">
            @csrf --}}


            {{-- <button type="submit" style="float:left; "class="btn btn-primary">Previous</button>
        </form> --}}
    </div>
</div>
</body>
</html>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>

<script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      }
  });
  });
  </script>
  <script>
     var c=20;
      function timer001(){
         c= c-1;
         if(c<20){
             time001.innerHTML=c;
         }
         else {
            c--;
            }
         if(c<1){
            window.clearInterval(update);
           window.location.href = "endpage";
         }


      }

     update=setInterval("timer001()",1000);

  </script>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="{{asset('./script.js')}}"></script>
