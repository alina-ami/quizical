@extends('brands._layout.app')

@section('content')
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
            <x-form :action="route('brands.questions.store')" method="POST">
                <h6 class="mb-0">New Question</h6>
                <p class="text-sm mb-0">Create new question</p>
                <hr class="horizontal dark my-3">

                <x-textarea label="Question" name="title" />
                <div class="row">
                    <div class="col-md-6">
                        <x-input label="Due Date" name="due_at" class="datetimepicker" placeholder="Due Date" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="min_reach" label="Target Ansers" placeholder="Target Answers" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="min_age" label="Min age" placeholder="Min age" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="max_age" label="Max age" placeholder="Max age" />
                    </div>
                </div>
                <x-genders label="Target Genders" name="genders[]" type="checkbox" />

                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn btn-light m-0">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Create</button>
                </div>
            </x-form>
        </div>
    </div>
@endsection
