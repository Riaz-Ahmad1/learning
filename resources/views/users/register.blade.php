<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>register</title>
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-12">
          <form method="POST" action="/users">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('name')
                <small class="form-text text-danger"> {{$message}} </small>
                @enderror
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  @error('email')
                  <small class="form-text text-danger"> {{$message}} </small>
                  @enderror
                </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                  <small class="form-text text-danger"> {{$message}} </small>
                  @enderror
  
              </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" name="passowrd_confirmation" class="form-control" id="exampleInputPassword1" placeholder="cofirm Password">
                  @error('password')
                  <small class="form-text text-danger"> {{$message}} </small>
                  @enderror
 
              </div> --}}
              <button type="submit" class="btn btn-primary mt-3">Sign Up</button>
            </form>
            <p> already account <a href="/login">Sign In</a> </p>
      </div>
    </div>
  </div>

</body>
</html>