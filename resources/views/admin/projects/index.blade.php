@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>ELENCO DEI PROGETTI</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Aggiungi</a>
                    </div>
                </div>
            </div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id}}</td>
                                <td>{{ $project->title}}</td>
                                <td>{{ $project->slug}}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id)}}" title="Visualizza" class="btn btn-sm btn-square btn-secondary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection