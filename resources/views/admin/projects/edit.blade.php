@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>MODIFICA PROGETTO</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li><i class="fa-solid fa-triangle-exclamation"></i>{{ $error }}</li>    
                                    @endforeach                
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.projects.update', $project->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Titolo</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title') ?? $project->title}}">
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Contenuto</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="5" name="content" id="content" placeholder="Contenuto">{{ $project->content }}</textarea>
                                </div>
                            </div>
                            <div class="mb-4 row mb-0">
                                <div>
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.index') }}">Indietro</a>
                                    <button class="btn btn-sm btn-success" type="submit">Aggiorna</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection