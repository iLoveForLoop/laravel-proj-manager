<div class="col-6 py-3 border-start border-2 border-dark">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="m-0 p-0">Project Members:</h4>
        <a class="text-decoration-none m-0 d-flex align-items-center gap-2 text-success"
            href="{{ route('teammembers.create', ['project_id' => $project->id]) }}"><i
                class="bi bi-person-plus fs-2"></i>Add member</a>
    </div>
    <hr class="">

    @php
        $count = 1;
    @endphp
    @foreach ($members as $data)
        @if ($data->project_id == $project->id)
            <div class="d-flex justify-content-between align-items-center" style="width: 100%">
                <div>
                    <h5 class="fw-light">{{ $count++ }}. {{ $data->first_name }} {{ $data->last_name }}</h5>

                </div>

                <div class="d-flex justify-content-center align-items-center gap-3">
                    <a class="text-decoration-none" href="{{ route('teammembers.edit', $data->id) }}"><i
                            class="bi bi-pencil-square fs-3"></i></a>
                    <form class="m-0" action="{{ route('teammembers.destroy', $data->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="border border-0 bg-transparent m-0" type="submit" href=""><i
                                class="bi bi-trash-fill text-danger fs-3"></i></button>
                    </form>

                </div>

            </div>
            <hr class="">
        @endif
    @endforeach


</div>

<style>
    .no-border {}
</style>
