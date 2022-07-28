@extends('web._layout.min-app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h2 class="mb-4 text-center">Hi, let's get started</h2>

            <div class="card card-body">
                {{-- :action="route('web.profile.completion')" --}}
                <x-form :action="route('web.profile.store')" method="POST">
                    <div class="mb-3">
                        <label class="text-left" for='name'>My name is:</label>
                        <x-input name="name" id="name" placeholder="Julie" />
                    </div>
                    <div class="mb-3">
                        <label class="text-left" for='age'>I'm:</label>
                        <x-input name="age" id="age" placeholder="25" />
                    </div>

                    <x-genders name="genders[]" label="I identify as:" type="radio" />

                    <x-tags name="interests[]" label="And interesed in:" :options="$interests" />

                    <x-tags name="brands[]" label="These are some brands I like and use:" :options="$brands" />

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                            Save profile
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
