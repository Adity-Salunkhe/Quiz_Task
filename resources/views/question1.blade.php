
<html>
<head>
  <meta charset="UTF-8">

  <title>Form</title>

  <link rel="stylesheet" href="{{asset('assets/css/new.css')}}">


</head>
<body>
<form action="{{route('ques')}}" method="POST">

    <div class="content-holder">
        @foreach ($questions as $q)
        <div class="content" id="content-1" style="display: block;">
          <p>{{$q->q_id}} &nbsp; {{$q->question}}</p>
          <input type="checkbox" />{{$q->option_1}} <br />
          <input type="checkbox" />{{$q->option_2}} <br />
          <input type="checkbox" />{{$q->option_3}} <br />
          <input type="checkbox" />{{$q->option_4}}
        </div>
        @endforeach
        <div class="content" id="content-2">
          <p>Second Question</p>
          <input type="checkbox" />Item <br />
          <input type="checkbox" />Item
           {{-- <p><br>{{$q->question}}</p>
          <input type="checkbox" />{{$q->option_1}} <br />
          <input type="checkbox" />{{$q->option_2}} <br />
          <input type="checkbox" />{{$q->option_3}} <br />
          <input type="checkbox" />{{$q->option_4}} --}}
        </div>
        <div class="content" id="content-3">
          <p>Third Question</p>
          <input type="checkbox" />Item <br />
          <input type="checkbox" />Item
        </div>
        <div class="content" id="content-4">
            <p>Fourth Question</p>
            <input type="checkbox" />Item <br />
            <input type="checkbox" />Item
          </div>

        <button type="button" class="back">Back</button>
        <button type="button" class="next">Next</button>
    </div>
      <div class="end">
        <p>Congratulation! You are done!</p>
        <button type="button" class="edit-previous">Edit Previous Options</button>
      </div>

      {{-- @foreach ($questions as $q)


      <table>
          <tr>
              <td style="font-weight:bold; font-size=18px" colspan="2">
              {{$q->q_id}} {{$q->question}}
              </td>
          </tr>
      </table>
      <table>
          <tr>
              <td>
                  <input type="radio" name="r1" id="r1" value="{{$q->option_1}}">{{$q->option_1}}<br>
                  <input type="radio" name="r1" id="r1" value="{{$q->option_2}}">{{$q->option_2}}<br>
                  <input type="radio" name="r1" id="r1" value="{{$q->option_3}}">{{$q->option_3}}<br>
                  <input type="radio" name="r1" id="r1" value="{{$q->option_4}}">{{$q->option_4}}<br>

              </td>
          </tr>
      </table>
@endforeach
      <div class="row">
          <div class="col-lg-6 col-lg-push-3">
              <br>
                <div class="row">
                    <br>
                    <div class="col-lg-2 col-lg-push-10">
                        <div id="current_que" style="float:left">0</div>
                        <div style="float:left">/</div>
                        <div id="total_que" style="float:left">0</div>

                    </div>
                    <div class="row" style="margin-top:30px">
                        <div class="col-lg-10 col-lg-push-1" style="min-height:300px; background-color:white" id="load_questions">
                        </div>


                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-lg-6 col-lg-push-3" style="min-height:50px">

                            <div class="col-lg-12 text-center">
                                <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                                <input type="button" class="btn btn-success" value="Next" onclick="load_next();">&nbsp;

                            </div>
                        </div>


                    </div>

                </div>
          </div>
      </div> --}}

</form>
</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script type="text/javascript">
    var counter = 1;
    var $ = jQuery;
    jQuery('body').on('click', '.next', function() {
        jQuery('.content').hide();

    counter++;
    jQuery('#content-' + counter + '').show();

    if (counter > 1) {
        jQuery('.back').show();
    };
    if (counter > 4) {
        jQuery('.content-holder').hide();
        jQuery('.end').show();
    };

    });

    jQuery('body').on('click', '.back', function() {
    //alert(counter);
    counter--;
    jQuery('.content').hide();
    var id = counter;
    jQuery('#content-' + id).show();
    if (counter < 2) {
        jQuery('.back').hide();
    }


    });

    jQuery('body').on('click', '.edit-previous', function() {

    });
</script>
{{-- <script type="text/javascript">
function load_total_que()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
           document.getElementById('total_que').innerHTML=xmlhttp.responseText;

        }
    };
    xmlhttp.open("GET",   url:'/q1/'+q_id,true);
    xmlhttp.send(null);
}

var questionno="1";
load_questions(questionno);
function load_total_que()
{
    document.getElementById('current_que').innerHTML=questionno;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
           if(xmlhttp.responseText=="over"){
               window.location="result"

           }else{
            document.getElementById('load_questions').innerHTML=xmlhttp.responseText;
            load_total_que();
           }

        }
    };
    xmlhttp.open("GET",   url:'/q_1/'+q_id=+questionno,true);
    xmlhttp.send(null);
}
function load_previous(){
    if(questionno=="1")
    {
        load_questions(questionno)
    }
    else{
        questionno=eval(questionno)-1;
        load_questions(questionno);
    }
}
function load_next(){

        questionno=eval(questionno)+1;
        load_questions(questionno);

}

</script> --}}
</html>

