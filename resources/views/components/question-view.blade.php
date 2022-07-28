<div class="col-12 col-md-4 mb-4 card card-background bg-primary h-100 tilt" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
  <div class="full-background">
  </div>
  <div class="card-body pt-4 text-left">
    <h3 class="text-white mb-0 mt-2 up">{{ $question->title }}</h3>
    <h5 class="text-white mb-0 up t-medium">by {{ $question->brand->name }}</h5>

    <div class="row d-flex justify-content-center mt-2">
      <a href="{{route('web.questions.answer', ['question' => $question])}}" class="col-6">
        <button class="btn bg-white">{{ $buttonName }}</button>
      </a>
    </div>
  </div>
</div>
