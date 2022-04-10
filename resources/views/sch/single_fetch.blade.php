<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class=" "  >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Student ID:: <strong>{{$show_data->id}}</strong></h5>
              {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <div class="row col-md-6">
                  <div class="row col-4"><p>Name</p></div>
                  <div class="col-md-8"><strong>{{$show_data->name}}</strong></div>
                </div>

                <div class="row col-md-6">
                  <div class="row col-4"><p>Email</p></div>
                  <div class="col-md-8"><strong>{{$show_data->Email}}</strong></div>
                </div>

                <div class="row col-md-6">
                 <div class="row col-4"><p>Phone</p></div>
                  <div class="col-md-8"><strong>{{$show_data->Phone}}</strong></div>
                </div> 
                
                <div class="row col-md-6">
                  <div class="row col-4"><p>Adress</p></div>
                   <div class="col-md-8"><strong>{{$show_data->Adress}}</strong></div>
                 </div> 
                 
                <div class="row col-md-6">
                  <div class="row col-4"><p>Class</p></div>
                   <div class="col-md-8"><strong>{{$show_data->class}}</strong></div>
                 </div> 
             </div>
            <div class="modal-footer">
              <form action="{{route('school.index')}}">
                <button type="submit" class="btn btn-secondary">Back</button>
              </form>
              <form action="{{route('school.edit',$show_data->id)}}">
                <button type="submit" class="btn btn-primary">Edit Record</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
</body>
</html>