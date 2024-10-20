@extends('layout')

@section('page.content')
    <div class="row">
        <div class="mb-5 col-md-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNode">
                Add New Node
            </button>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Measurement Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($nodes) && count($nodes) > 0)
                        @foreach ($nodes as $node)
                            <tr>
                                <th scope="row">{{ $node->id }}</th>
                                <td>{{ $node->name }}</td>
                                <td>{{ $node->measurement_time }}</td>
                                <td>{{ $node->status }}</td>
                                <td>
                                    <a class="mr-3 btn btn-secondary btn-sm" href="/node/{{ $node->id }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="deleteRow({{$node->id}}, '/admin/catalog/product/delete')">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @include('node.modal-add')
@endsection
