<table class="" style="background-color:#333;;color:white;padding: 2%; width: 48%; height: 270px;" >
    {{-- <tr colspan="4"><td ><h2 style="text-align: center;"> choose your plan </h2></td></tr> --}}

    @foreach ($questions as $q )
          <tr><td>
            {{$q->question}}
            <br>

            <input type="radio" class="form-control" id="plans" value="{{$q->option_1}}" name="plan">{{$q->option_1}}<br>
            <input type="radio" class="form-control" id="plans" value="{{$q->option_2}}" name="plan">{{$q->option_2}}<br>
            <input type="radio" class="form-control" id="plans" value="{{$q->option_3}}" name="plan">{{$q->option_3}}<br>
            <input type="radio" class="form-control" id="plans" value="{{$q->option_4}}" name="plan">{{$q->option_4}}<br>


              <tr><td>
          @endforeach
          @if($errors->any('[plan]'))
          <span class="text-danger">{{$errors->first('plan')}}</span>
          @endif

          <div class="col-xs-6 pull-left block-center">
            <button id="wizard-prev" name="submit"  type="submit" value="previous" onclick_load="previous" class="btn btn-irv btn-irv-default">
              Previous
            </button>
          </div>
          <div class="col-xs-6 pull-right block-center">
            <button id="wizard-next" name= "submit" type="submit" value="next" class="btn btn-irv">
              Next
            </button>
          </div>



  </table>
