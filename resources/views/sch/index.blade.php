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
    <div class="container ">
      
       
       
        <div class="row  col-md-12 mt-5">
          
            <a class="btn btn-success col-md-2 mb-3" href="/school/create">Add New Student</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($data as $item)
                   <tr>
                    <th scope="row"> {{ $item->id }}</th>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->Email}}</td>
                    <td> {{ $item->Phone}}</td>
                    <td> {{ $item->Adress}}</td>
                    <td> {{ $item->class}}</td>
                    <td>
                        <form action="{{ route('school.destroy',$item->id)}}" method="post">
                          @csrf
                          @method('Delete')
                            <a href="{{ route('school.show',$item->id) }}" class="btn btn-success">show</a>
                            <a href="{{ route('school.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                           <button class="btn btn-danger">Delete</button> 
                        </form>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table> 
          
        </div>
    </div>
   


</body>
</html>
