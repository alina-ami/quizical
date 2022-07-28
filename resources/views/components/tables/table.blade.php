<div class="card">
    <div class="table-responsive px-3 pt-3">
        <table class="table table-hover align-items-center mb-0">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="text-secondary text-xs font-weight-bolder opacity-7">{{ $header }}</th>
                    @endforeach
                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>

        <div class="mx-4 mt-3">
            {{ $data->links() }}
        </div>
    </div>
</div>
