 @switch($value)
 @case('positive')
 <a class="btn btn-rounded btn-outline-success mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
   Positive
 </a>
 @break

 @case('neutral')
 <a class="btn btn-rounded btn-outline-info mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
   Neutral
 </a>
 @break

 @case('negative')
 <a class="btn btn-rounded btn-outline-danger mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
   Negative
 </a>
 @break

 @case('not_applicable')
 <a class="btn btn-rounded btn-outline-default mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
   No answers yet
 </a>
 @break

 @default
 @endswitch
