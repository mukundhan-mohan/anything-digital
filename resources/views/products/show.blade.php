@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="requirements" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Requirements:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->requirements }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="company_details" class="col-md-4 col-form-label text-md-end text-start"><strong>Company Details:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->company_details }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="vacancy" class="col-md-4 col-form-label text-md-end text-start"><strong>Vacancy:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->vacancy }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="job_type" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Type:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->job_type }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="salary" class="col-md-4 col-form-label text-md-end text-start"><strong>Salary:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->salary }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="location" class="col-md-4 col-form-label text-md-end text-start"><strong>Location:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->location }}
                        </div>
                    </div>


        
            </div>
        </div>
    </div>    
</div>
    
@endsection