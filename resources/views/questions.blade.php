<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/new.css') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<h3 style="text-align: center;">Quiz System</h3>
<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @foreach ($errors->all() as $error )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>{{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endforeach

            @if (Session::get('successMessage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>{{Session::get('successMessage')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php Session::forget('successMessage');?>
            @endif
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>Question <i class="fa fa-sort"></i></th>

                       <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $q)
                        <tr>
                            <td>{{$q->q_id}}</td>
                            <td>{{$q->question}}</td>


                            <td>
                                <a href="#" class="text-warning"  data-toggle="modal" data-target="#Modal_update{{$q->q_id}}">Update</a>

                                <a href="#" class="text-danger"  data-toggle="modal" data-target="#Modal_delete{{$q->q_id}}">Delete</a>
                            </td>
                        </tr>

                        <!-- Modal-Update -->
                        <div class="modal fade" id="Modal_update{{$q->q_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="post" action="/update">
                                    @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input style="visibility:hidden" name="q_id" value="{{$q->q_id}}">
                                            <div class="row" style="padding:10px">
                                                    <label>Question:</label><br>
                                                    <input name="question" value="{{$q->question}}" class="form-control">
                                            </div>

                                            <div class="row">
                                                    <div class="col-md-6"><label>A</label><input value="{{$q->option_1}}" name="option_1" class="form-control"></div>
                                                    <div class="col-md-6"><label>B</label><input value="{{$q->option_2}}" name="option_2" class="form-control"></div>
                                                    <div class="col-md-6"><label>C</label><input value="{{$q->option_3}}" name="option_3" class="form-control"></div>
                                                    <div class="col-md-6"><label>D</label><input value="{{$q->option_4}}" name="option_4" class="form-control"></div>

                                            <div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Answer: </label>
                                                        <select class="form-control" name="ans">
                                                            <option value="{{$q->answer}}">{{$q->answer}}</option>
                                                            <option value="option_1">A</option>
                                                            <option value="option_2">B</option>
                                                            <option value="option_3">C</option>
                                                            <option value="option_4">D</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Question</button>
                                        </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <!-- Modal-delete -->
                        <div class="modal fade" id="Modal_delete{{$q->q_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="post" action="/delete">
                                    @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="row" style="padding:10px">
                                                    <label>Question:</label><br>
                                                    <input name="question" value="{{$q->question}}" class="form-control">
                                            </div>
                                            <input style="visibility:hidden" name="q_id" value="{{$q->q_id}}">
                                            <h4>Are you sure you want to delete?</h4>
                                            {{-- <div class="row">
                                                    <div class="col-md-6"><label>A</label><input value="{{$q->option_1}}" name="option_1" class="form-control"></div>
                                                    <div class="col-md-6"><label>B</label><input value="{{$q->option_2}}" name="option_2" class="form-control"></div>
                                                    <div class="col-md-6"><label>C</label><input value="{{$q->option_3}}" name="option_3" class="form-control"></div>
                                                    <div class="col-md-6"><label>D</label><input value="{{$q->option_4}}" name="option_4" class="form-control"></div>

                                            <div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3"><label>Answer: </label>
                                                        <select class="form-control" name="ans">
                                                            <option value="{{$q->answer}}">{{$q->answer}}</option>
                                                            <option value="option_1">A</option>
                                                            <option value="option_2">B</option>
                                                            <option value="option_3">C</option>
                                                            <option value="option_4">D</option>
                                                        </select>
                                                    </div>
                                                </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Question</button>
                                        </div>
                                </form>
                            </div>
                            </div>
                        </div>




                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="/add">
            @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row" style="padding:10px">
                            <label>Question:</label><br>
                            <input name="question" class="form-control">
                    </div>

                    <div class="row">
                            <div class="col-md-6"><label>A</label><input name="option_1" id="addInputMobile" class="form-control"></div>
                            <div class="col-md-6"><label>B</label><input name="option_2" class="form-control"></div>
                            <div class="col-md-6"><label>C</label><input name="option_3" class="form-control"></div>
                            <div class="col-md-6"><label>D</label><input name="option_4" class="form-control"></div>

                    <div>
                        <br>
                        <div class="row">
                            <div class="col-md-3"><label>Answer: </label>
                                <select class="form-control" name="ans">
                                    <option value="option_1">A</option>
                                    <option value="option_2">B</option>
                                    <option value="option_3">C</option>
                                    <option value="option_4">D</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Questions</button>
                </div>
        </form>
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
