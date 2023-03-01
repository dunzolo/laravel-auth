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
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $project->id}}</td>
                                <td>{{ $project->title}}</td>
                                <td>{{ $project->slug}}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id)}}" title="Visualizza" class="btn btn-sm btn-square btn-primary">
                                        <i class="fas fa-eye text-black"></i>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project->id)}}" title="Modifica" class="btn btn-sm btn-square btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-square btn-danger delete-button" type="submit" title="Cancella">
                                            <i class="fas fa-trash text-black"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td scope="row" colspan="4">
                                    <div class="alert text-center mb-0">
                                        <h2 class="alert-heading">PROGETTI NON DISPONIBILI!</h2>
                                        <hr>
                                        <p class="mb-0">Aggiungi nuovi progetti <a href="{{ route('admin.projects.create') }}">qui</a></p>
                                      </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@include('admin.modals.modal_delete')
@endsection