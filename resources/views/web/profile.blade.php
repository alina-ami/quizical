@extends('web._layout.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h2 class="mb-4 text-center">Hi, let's get started</h2>

            <div class="card card-body">
                <x-form :action="route('web.profile.store')" method="POST">

                    <x-input label="My name is:" name="name" id="name" placeholder="Julie" :value="$user->name" />
                    <x-input label="I'm:" name="age" id="age" placeholder="25" :value="$user->age"/>
                    <x-genders name="gender" label="I identify as:" type="radio" :value="$user->gender"/>
                    <x-tags name="interests[]" label="And interesed in:" :options="$interests" :values="$user->interests"/>
                    <x-tags name="brands[]" label="These are some brands I like and use:" :options="$brands" :values="$user->brands_liked"/>

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
