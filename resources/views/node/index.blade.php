@extends('welcome')

@section('page.content')
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
            <tr>
                <th scope="row">1</th>
                <td>Node 1</td>
                <td>1</td>
                <td>active</td>
                <td></td>
            </tr>
        </tbody>
    </table>
@endsection
