@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h2>AGGIUNGI UN NUOVO PROGETTO</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store')}}" method="POST">
                    @csrf
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Titolo</span>
                        <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
                    </div>
                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text">Contenuto</span>
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection