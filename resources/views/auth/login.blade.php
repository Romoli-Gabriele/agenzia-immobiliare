@extends('layout')
@section('body')
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
    <div class="card-body">
    <h4 class="card-title">Login</h4>
        <form method="POST" action="login">
            <div class="mb-3">
              <label for="Email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"><a href="{{route('register')}}" class="card-link">I'm not registred</a></div>
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection