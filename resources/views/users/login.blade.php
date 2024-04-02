<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-12">
          <form method="POST" action="/users/authenticate">
              @csrf
              <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
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
              <button type="submit" class="btn btn-primary mt-3">Sign In</button>
            </form>
            <p> Don't have account <a href="/register">Sign up</a> </p>
      </div>
    </div>
  </div>
</body>
</html>