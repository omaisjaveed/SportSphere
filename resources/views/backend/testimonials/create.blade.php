@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <span class="panel-title d-none">{{ _lang('Create Testimonials') }}</span>
        <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Testimonials Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Testimonials Date</label>
                    <input type="text" class="form-control" id="date" name="date">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Testimonials Description</label>
                    <textarea class="form-control summernote" name="description"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Image</label>
                    <input type="file" class="dropify" name="image">
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</div>
@endsection
