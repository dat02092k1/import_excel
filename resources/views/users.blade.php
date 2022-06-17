<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Users</title>
  </head>
  <body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>

            <div class="col-md-12">
            <form class="row g-3" action="{{route('import_user')}}" method="post" enctype="multipart/form-data"> 
                @csrf
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Excel </label>
    <input type="file" class="form-control" name="excel_file">
  </div>
                                                       
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb">Upload excel file</button>
  </div>
  @error('excel_file')
  <span class="text-danger">{{$message}}</span>
  @enderror 
  <br>
  
</form> 

<br>
<div class="col-auto">
  <form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br>
  </div>
      @if(Session::has('import_errors'))
      @foreach(Session::get('import_errors') as $failure);  
      <div class="alert alert-danger" role="alert">
        {{$failure->errors()[0]}} at line no-{{$failure->row()}}
      </div>
      @endforeach
      @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>User List</h3>
            </div>
            <div class="col-md-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">STT </th>
      <th scope="col">Trường Tiểu học</th>
      <th scope="col">Quận/Huyện</th>
      <th scope="col">STT </th>
      <th scope="col">Trường Tiểu học</th>
      <th scope="col">Quận/Huyện</th>
      <th scope="col">Mã học sinh </th>
      <th scope="col">Lớp</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày sinh		 </th>
      <th scope="col">Giới</th>
      <th scope="col">Nơi sinh</th>
      <th scope="col">Dân tộc</th>
      <th scope="col">Hộ khẩu thường trú</th>
      <th scope="col">Điện thoại liên hệ		 </th>
      <th scope="col">Điểm sơ tuyển vòng 1</th>
      <th scope="col">Ghi chú</th>
    </tr>
  </thead> 
  <tbody>
    @if(count($users))
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
    @else
    <tr> 
      <td colspan="3">No data found</td>
    </tr>
    @endif
  </tbody>
</table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>