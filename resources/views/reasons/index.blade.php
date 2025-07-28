@extends('layouts.app')

@section('title', 'Reasons')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Reason List</h4>
        <a href="{{ route('reasons.create') }}" class="btn btn-primary">+ Add Reason</a>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Reason Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reasons as $reason)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reason->reasonTitle }}</td>
                    <td>
                        <a href="{{ route('reasons.edit', $reason->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('reasons.destroy', $reason->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
