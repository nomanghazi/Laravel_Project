<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
 
  <div class="container  "  style="margin-left:25rem; margin-top:5rem;">
   <div class="row" style="width: 60rem;">

     <form action="{{ route('school.update',$edit_data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
           <div class=" col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $edit_data->name}}" name="name">
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="text" class="form-control" value="{{ $edit_data->Email}}" name="email">
        </div>
        </div>
       
        <div class="row">
          <div class="col-md-4">
          <label for="inputCity" class="form-label">Phone</label>
          <input type="Number" class="form-control"  value="{{ $edit_data->Phone}}" name="phone">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Adress</label>
          <input type="text" class="form-control" value="{{ $edit_data->Adress }}" name="adress">
        </div> 
        </div>

        <div class="row mt-3">
          <div class="col-md-2">
            <label class="form-label">Class</label>
          </div> 
         </div>
         <div class="row">
            <div class="col-md-2">
            <select class="form-select form-select-sm " name="class">
              <option selected>{{ $edit_data->class }}</option>
              <option value="10th">10th</option>
              <option value="11th">11th</option>
              <option value="12th">12th</option>
              <option value="O Level">O Level</option>
            </select>
          </div>
          <div class="col-md-4"></div>
            <div class="col-md-4">
            </div>
          </div>
          <button type="submit" class="btn btn-primary text-center mt-2">Save changes</button>
        </form>
        </div> 
      </div>
     
</body>
</html>