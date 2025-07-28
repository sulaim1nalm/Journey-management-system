@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Contact</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Contact Name</label>
            <input type="text" name="contact_name" class="form-control" value="{{ $contact->contact_name }}" required>
        </div>
        <div class="mb-3">
            <label>Contact Phone</label>
            <input type="text" name="contact_phone" class="form-control" value="{{ $contact->contact_phone }}" required>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
