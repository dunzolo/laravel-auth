@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>DETTAGLIO PROGETTO</h2>
                    </div>
                    <div>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.index') }}">Torna all'elenco</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <label class="d-block"><strong>Titolo</strong></label>
                <p>{{ $project->title }}</p>
                <label class="d-block"><strong>Descrizione</strong></label>
                <p>{{ $project->content }}</p>
            </div>
        </div>
    </div>
@endsection