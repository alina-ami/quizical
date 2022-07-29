<div class="col-12 col-md-4 mb-4 mb-md-6 me-4 card">
  <div class="full-background">
  </div>
  <div class="card-body pt-4 text-left row d-flex flex-column justify-content-between">
    <div class="mb-4">
        <h4 class="text-black mb-0 mt-2 up">{{ $question->title }}</h4>
        <h6 class="text-primary mt-2 mb-0 up t-medium">Question by {{ $question->brand->name }}</h6>
    </div>

    <div class="text-center mt-2">
      <a href="{{route('web.questions.answer', ['question' => $question])}}">
        <button class="btn  bg-gradient-primary">{{ $buttonName }}</button>
      </a>
    </div>
  </div>
</div>

