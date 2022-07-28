@if ($hasShow)
    <a href="{{ route('brands.questions.show', $model->id) }}" class="px-1" data-bs-toggle="tooltip"
        data-bs-placement="top" title="Tooltip on top">
        <i class="fa-solid fa-up-right-from-square"></i>
    </a>
@endif

@if ($hasEdit)
    <a href="{{ route('brands.questions.edit', $model->id) }}" class="text-warning px-1">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>
@endif

@if ($hasDelete)
    <a href="javascript:void(0);" class="text-danger px-1"
        onclick="document.getElementById('delete-{{ $model->id }}').submit();">
        <i class="fa-solid fa-trash-can"></i>
    </a>
    <x-form :action='route("{$baseRoute}.destroy", $model->id)' method="DELETE" id="delete-{{ $model->id }}"></x-form>
@endif
