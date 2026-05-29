@extends('layouts.app')

@section('content') 
<div class="row">
    <div class="col-lg-12">
        <form method="POST" class="validate" action="{{ route('testimonials.update', $Testimonials->id) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Testimonials Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{!! $Testimonials->title !!}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Testimonials Date</label>
                        <input type="text" class="form-control" id="date" name="date"
                            value="{!! $Testimonials->date !!}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Testimonials Description</label>
                        <textarea class="form-control summernote"
                            name="description">{!! $Testimonials->description !!}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">{{ _lang('Images') }}</label>
                        <input type="file" multiple class="dropify" name="image"
                            data-default-file="{{ asset('public/' . $Testimonials->image)  }}">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection