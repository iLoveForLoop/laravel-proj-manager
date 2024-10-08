<div class="col-6 py-3 border-start border-3 border-dark">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="m-0 p-0">Project Members</h3>
        <a class="btn btn-success m-0" href="{{ route('teammembers.create', ['project_id' => $project->id]) }}">Add
            Member</a>
    </div>
    <hr>

    @php
        $count = 1;
    @endphp
    @foreach ($members as $data)
        @if ($data->project_id == $project->id)
            <h5>{{ $count++ }}. {{ $data->first_name }} {{ $data->last_name }}</h5>
            <hr>
        @endif
    @endforeach


</div>
