@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrer l'adresse email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrer le mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection