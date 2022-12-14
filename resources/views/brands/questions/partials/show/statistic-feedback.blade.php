<div class="card h-100">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Reviews</h6>
    </div>
    <div class="card-body pb-0 p-3">
        <ul class="list-group">
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-capitalize">Positive reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">{{$sentimentPercentages["positive"]}}%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-gradient-info w-{{$sentimentPercentages["positive"]}}" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-capitalize">Neutral reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">{{$sentimentPercentages["neutral"]}}%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-gradient-dark w-{{$sentimentPercentages["neutral"]}}" role="progressbar" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-capitalize">Negative reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">{{$sentimentPercentages["negative"]}}%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-gradient-danger w-{{$sentimentPercentages["negative"]}}" role="progressbar" aria-valuenow="5"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="card-footer pt-0 p-3 d-flex align-items-center">
        <p class="text-sm">
            Looks like you have a positive feedback from your question.
        </p>
    </div>
</div>
