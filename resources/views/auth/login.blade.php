<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style>

.text {
    width: 70%;
    margin: 0 auto;
    background: #eeeeee;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 1px 0px 20px 0px #b6b6b6;
}
.tplogin {
    width: 70%;
    margin: 0 auto;
    margin-bottom: 15px;
}
.tplogin h2 {
    color: red;
}
.full-l {
    width: 100%;
    color: #b71818;
    background: beige;
}
</style>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6" style="background-image: url(https://t3.ftcdn.net/jpg/03/35/51/06/360_F_335510693_HY7mLg3ARdLccKoXk3m66NLDpJRJh51p.jpg);
    background-size: cover;
    min-height: 100vh;
    background-position: center;">
        </div>
        <div class="col-md-6" style="align-self: center;">
            
             <div class="tplogin">
                <h2>Log In</h2>   
                <p>Welcome Back !</p>  
             </div>
            <div class="text">
                <form action ="{{route ('loginsave')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-danger full-l">Login</button>
                  </form>
            </div>
            <div class="log-regis">
                <div class="inter d-flex justify-content-center">
                    <p>Don't have an account?!</p> 
                    <a href="{{route('register')}}">Register</a>
                </div>
             </div>
        </div>
  </div>
</div>
