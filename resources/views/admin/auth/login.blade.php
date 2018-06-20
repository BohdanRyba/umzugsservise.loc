@extends('admin.layouts.app')

@section('content')
    <body class="bg-info">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            @guest
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            {{Form::email('email',old('email'),[
                                'class'=> $errors->has('password')?'form-control is-invalid':'form-control' ,
                                'id'=>'email',
                                'aria-describedby'=>'emailHelp',
                                'placeholder'=>'Enter email',
                                'required'=>true,
                                'autofocus'=>true
                            ])}}
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        {!! Form::hidden('admin','true') !!}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            {{Form::password('password',[
                                'class'=> $errors->has('password')?'form-control is-invalid':'form-control' ,
                                'id'=>'exampleInputPassword1',
                                'placeholder'=>'Password'
                            ])}}
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    {{Form::checkbox('remember','')}}
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        {{Form::submit(__('Login'),['class'=>'btn btn-primary btn-block'])}}
                    </form>

                    <div class="text-center">
                        <a class="d-block small" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            @else
                <div class="p-3">
                    <p>
                        You are already log in, please log out and log in as admin to access to admin-panel
                    </p>
                    <a class="btn btn-success" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" data-toggle="modal"
                        {{--data-target="#exampleModal"--}}
                    >
                        <i class="fa fa-fw fa-sign-out"></i>{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
    </div>
@endsection
