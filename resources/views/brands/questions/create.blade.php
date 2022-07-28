@extends('brands._layout.app')

@section('content')
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
            <h6 class="mb-0">New Question</h6>
            <p class="text-sm mb-0">Create new question</p>
            <hr class="horizontal dark my-3">

            <x-textarea label="Question" name="title" />
            <x-input label="Due Date" name="due_at" class="datetimepicker" placeholder="Due Date" />
            <x-genders name="genders[]" label="Target Genders" type="checkbox" />

            <div class="row">
                <div class="col-md-4">
                    <x-input type="number" name="min_age" label="Min age" placeholder="Min age" /></div>
                <div class="col-md-4">
                    <x-input type="number" name="min_age" label="Max age" placeholder="Max age" /></div>
                <div class="col-md-4">
                    <x-input type="number" name="minimum_reach" label="Target Ansers" placeholder="Target Answers" /></div>
            </div>


            <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                <button type="button" name="button" class="btn bg-gradient-primary m-0 ms-2">Create Project</button>
            </div>
        </div>
    </div>
@endsection
