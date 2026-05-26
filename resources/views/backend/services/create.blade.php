@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2 class="my-5">Add New Service</h2>
    <form action="{{ route('backend.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="summernote form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="dropify" name="image" data-allowed-file-extensions="png jpg jpeg">
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
</div>
@endsection
