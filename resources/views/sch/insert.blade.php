<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="container mt-4 position-relative">
    <div class="row position-absolute top-0 start-25 " style="width: 30rem;">
    <form action="/school" method="post">
      @if ($message=Session::get('success'))
      {{-- <h4>{{$message}}</h4> --}}
      @endif
        @csrf
        <label class="form-label"  for="">Name</label class="form-label" >
        <input class="form-control" type="text" name="name" required >
        <small class="text-danger">  
         @if ($errors->has('name'))
          {{$errors->first('name')}}*
         @endif 
        </small>
        <br>
        {{-- Input Field Label --}}
        <label class="form-label"  for="">E Mail</label class="form-label">
        <input class="form-control" type="email" name="email" required >
        <small class="text-danger">  
          @if ($errors->has('email'))
           {{$errors->first('email')}}*
          @endif 
         </small>
         <br>
        {{-- Input Field Label --}}
        <label class="form-label"  for="">Phone</label class="form-label" >
        <input class="form-control" type="number" name="phone" required >
        <small class="text-danger">  
          @if ($errors->has('phone'))
           {{$errors->first('phone')}}*
          @endif 
         </small>
        <br>
        {{-- Input Field Label --}}
        <label class="form-label"  for="">Adress</label class="form-label">
        <input class="form-control" type="text" name="adress" required >
        <small class="text-danger">  
          @if ($errors->has('adress'))
           {{$errors->first('adress')}}*
          @endif 
         </small>
        <br>
        {{-- Input Field Select OPtion  --}}
        <label class="form-label"  for="">Class</label class="form-label" >
            <select class="form-select form-select-sm " name="class" required >
                <option selected >9th</option> 
                <option value="10th">10th</option>
                <option value="11th">11th</option>
                <option value="12th">12th</option>
                <option value="O Level">O Level</option>
              </select>
        
        <input class="btn btn-primary text-center mt-2" type="submit" value="Add Student">
    </form>
    </div>
  </div>
</body>
</html>