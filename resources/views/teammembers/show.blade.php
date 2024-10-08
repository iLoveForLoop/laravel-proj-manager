<div class="container p-5 bg-info">
    <h1>Project Members</h1>

    @foreach ($teammembers as $data)
        @if ($data->project_id == $p_id)
            <p>{{ $data->first_name }} {{ $data->last_name }}</p>
        @endif
    @endforeach


</div>



{{-- @include('projects.index') --}}
