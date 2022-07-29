@extends('brands._layout.app')

@section('content')
    <div class="col-lg-9 col-12 mx-auto">
        <div class="card card-body mt-4">
            <x-form :action="route('brands.questions.update', $question->id)" method="PUT">
                <h6 class="mb-0">Update Question</h6>
                <p class="text-sm mb-0">Update your question</p>
                <hr class="horizontal dark my-3">

                <x-textarea label="Question" name="title" :value="$question->title" />
                <div class="row">
                    <div class="col-md-6">
                        <x-input label="Due Date" name="due_at" class="datetimepicker" placeholder="Due Date"
                            :value="$question->due_at" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="min_reach" label="Target Ansers" placeholder="Target Answers"
                            :value="$question->min_reach" />
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="min_age" label="Min age" placeholder="Min age" :value="$question->min_age"/>
                    </div>
                    <div class="col-md-6">
                        <x-input type="number" name="max_age" label="Max age" placeholder="Max age" :value="$question->max_age"/>
                    </div>
                </div>
                <x-genders label="Target Genders" name="genders[]" type="checkbox" :value="$question->genders"/>

                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn btn-light m-0">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Update Question</button>
                </div>
            </x-form>
        </div>
    </div>
@endsection
