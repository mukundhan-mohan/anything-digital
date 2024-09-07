@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Job Title</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Job Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="requirements" class="col-md-4 col-form-label text-md-end text-start">Job Requirements</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('requirements') is-invalid @enderror" id="requirements" name="requirements">{{ $product->requirements }}</textarea>
                            @if ($errors->has('requirements'))
                                <span class="text-danger">{{ $errors->first('requirements') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="company_details" class="col-md-4 col-form-label text-md-end text-start">Company Details</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="company_details" name="company_details">{{ $product->company_details }}</textarea>
                            @if ($errors->has('company_details'))
                                <span class="text-danger">{{ $errors->first('company_details') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="vacancy" class="col-md-4 col-form-label text-md-end text-start">Vacancy</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('vacancy') is-invalid @enderror" id="vacancy" name="vacancy">{{ $product->vacancy }}</textarea>
                            @if ($errors->has('vacancy'))
                                <span class="text-danger">{{ $errors->first('vacancy') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="job_type" class="col-md-4 col-form-label text-md-end text-start">Job Type</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('job_type') is-invalid @enderror" id="job_type" name="job_type">{{ $product->job_type }}</textarea>
                            @if ($errors->has('job_type'))
                                <span class="text-danger">{{ $errors->first('job_type') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="salary" class="col-md-4 col-form-label text-md-end text-start">Salary</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary">{{ $product->salary }}</textarea>
                            @if ($errors->has('salary'))
                                <span class="text-danger">{{ $errors->first('salary') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="location" class="col-md-4 col-form-label text-md-end text-start">Location</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('location') is-invalid @enderror" id="location" name="location">{{ $product->location }}</textarea>
                            @if ($errors->has('location'))
                                <span class="text-danger">{{ $errors->first('location') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection