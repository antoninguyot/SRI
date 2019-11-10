@extends('layouts.app')

@section('body')
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
{{--                                        <a href="#" class="d-block mb-2">--}}
{{--                                            <img src="{{ asset('images/logo.png') }}" class="img-fluid w-50">--}}
{{--                                        </a>--}}
                                        <h5 class="text-muted font-weight-normal mb-4">Connectez vous pour accéder à l'interface SRI</h5>
                                        <form method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Adresse mail</label>
                                                <input type="email" name="email"
                                                       class="form-control @error('email')form-control-danger @enderror"
                                                       placeholder="Mail" value="{{ old('email') ?? '' }}">
                                                @error('email')
                                                <label class="error mt-2 text-danger">{{ $message }}</label>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" name="password"
                                                       class="form-control @error('password')form-control-danger @enderror"
                                                       placeholder="Mot de passe">
                                                @error('password')
                                                <label class="error mt-2 text-danger">{{ $message }}</label>
                                                @enderror
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="remember">
                                                    Se souvenir de moi
                                                    <i class="input-frame"></i></label>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                                                    Connexion
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
