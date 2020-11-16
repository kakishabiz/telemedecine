@extends('master')

@section('content')
<div class="container mt-3">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
            <form method="post" action=" {{ url('user-store') }} ">
                <div class="card shadow mb-4">
                    <div class="car-header  pt-2">
                        <div class="card-title font-weight-bold text-white text-center">INSCRIPTION</div>
                    </div>

                    <div class="card-body">

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif


                        <div class="form-group">
                            <label for="firstname"> Prenom </label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name" value="{{ old('firstname') }}"/>
                            {!! $errors->first('firstname', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="lastname"> Nom </label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name" value="{{ old('lastname') }}"/>
                            {!! $errors->first('lastname', '<small class="text-danger">:message </small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail" value="{{ old('email') }}"/>
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="confirm_password"> Confirm Password </label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                            {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                        </div>

                        {{-- <div class="form-group">
                            <label for="sexe">sexe</label>
                            <input type="sexe" name="sexe" id="sexe" class="form-control" placeholder="Enter sexe" value="{{ old('sexe') }}">
                            {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}
                        </div> --}}
                         <div class="form-group">
                            <label for="role">role</label>
                            <input type="role" name="role" id="role" class="form-control" placeholder="Enter role" value="{{ old('role') }}">
                            {!! $errors->first('role', '<small class="text-danger">:message</small>') !!}
                        </div>

                    </div>

                    <div class="card-footer d-inline-block">
                        <button type="submit" class="btn btn-success">S'incrire </button>
                    <p class="float-right mt-2"><a href="{{ url('user-login')}}" class="text-success"> Se connecter </a> </p>
                    </div>
                    @csrf
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
