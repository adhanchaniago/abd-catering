@extends('templates.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Pelanggan</div>
                <div class="card-body">
                    <form action="{{ route('user.update',$users['id']) }}" method="POST" class="form-group">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <label for="username" class="text-primary">Username</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control {{ $errors->first('username') ? "is-invalid": "" }}" name="username" id="username" value="{{ old('username') ? old('username') : $users['username'] }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        </div>                      
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="password" class="text-primary">Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control {{ $errors->first('password') ? "is-invalid": "" }}" name="password" id="password" value="{{ old('password') ? old('password') : '' }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>                      
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="password_confirmation" class="text-primary">Password Confirmation</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" class="form-control {{ $errors->first('password_confirmation') ? "is-invalid": "" }}" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') ? old('password_confirmation') : '' }}">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>                      
                    </div>
                    <br>
                    <div class="row" >
                        <div class="col-md-3">
                            <label for="role">Role</label>
                        </div>
                        <div class="col-md-8">
                            <select name="role" class="custom-select">
                                @if($users['role']=='admin')
                                    <option value="admin" selected>ADMIN</option>
                                    <option value="catering">CATERING</option>
                                    <option value="user">USER</option>
                                @elseif($users['role']=='catering')
                                    <option value="admin">ADMIN</option>
                                    <option value="catering" selected>CATERING</option>
                                    <option value="user">USER</option>
                                @else
                                    <option value="admin">ADMIN</option>
                                    <option value="catering">CATERING</option>
                                    <option value="user" selected>USER</option>
                                @endif
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            {{$errors->first('role')}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3 offset-md-5 offset-sm-4">
                            <button type="submit" class="btn btn-outline-primary" >Update</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('sidebar')
<nav class="col-md-12 d-none d-md-block bg-light sidebar card">
    <div class="navbar-header bg-dark text-white text-center"><h4>Dashboard</h4></div>
    <ul class="nav flex-column mt-3">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('user.index') }}">
                <span class="fas fa-user"></span>
                Pengguna
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('catering.index') }}">
                <span class="fas fa-utensils"></span>
                Catering
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('order.index') }}">
                <span class="fas fa-shopping-basket"></span>
                Order
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('testimoni.index') }}">
                <span class="fas fa-comments"></span>
                Testimoni
            </a>
        </li>
    </ul>
</nav>
<br>
@endsection