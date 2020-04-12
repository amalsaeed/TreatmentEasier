

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription</title>
    <link href="https:\\maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body >
    <center>
    <div style="width: 50%;left: 25%;right: 25%;" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
                </div>

                <form id="save_form" action="{{route('prescription.update',$pre->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="modal-body">
                        <textarea style="width:100%" @if (Auth::user()->user_type == 0) readonly @endif name="text" id="text" cols="30" rows="10">{{$pre->text}}</textarea>
                        <input type="hidden" name="reservation_id" value="{{$pre->reservation_id}}">
                        <input type="hidden" name="doctor_id" value="{{$pre->doctor_id}}">
                        <input type="hidden" name="user_id" value="{{$pre->user_id}}">
                    </div>
                    <div class="modal-footer">
@if (Auth::user()->user_type == 1)
<button type="submit" class="btn btn-primary">Save changes</button>
@endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
</body>
<script src="https:\\maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>
