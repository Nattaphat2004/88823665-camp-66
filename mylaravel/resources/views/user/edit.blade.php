@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="register-box">
      <div class="card card-outline card-primary">
        <div class="text-center card-header">
          <h1 class="mb-0"><b>Edit User</b></h1>
        </div>
        <div class="card-body register-card-body">
          <p class="register-box-msg">Edit User</p>
          <form action="{{ url('/user')}}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="mb-3 input-group">
              <div class="form-floating">
                <input id="registerFullName" value="{{ $user->name}}" name="name" type="text" class="form-control" placeholder="Full Name" />
                <label for="registerFullName">Full Name</label>
              </div>
              <div class="input-group-text"><span class="bi bi-person"></span></div>
            </div>
            <div class="mb-3 input-group">
              <div class="form-floating">
                <input id="registerEmail" value="{{ $user->email}}" name="email" type="email" class="form-control" placeholder="Email" />
                <label for="registerEmail">Email</label>
              </div>
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="mb-3 input-group">
              <div class="form-floating">
                <input id="registerPassword" name="password" type="password" class="form-control" placeholder="Password" />
                <label for="registerPassword">Password</label>
              </div>
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="gap-2 d-grid">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
