<div class="col-6 py-3 border-start border-2 border-dark overflow-scroll noscrollbar" style="height: 100%">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="m-0 p-0">Project Members:</h4>
        <a class="text-decoration-none m-0 d-flex align-items-center gap-2 text-success"
            href="{{ route('teammembers.create', ['project_id' => $project->id]) }}"><i
                class="bi bi-person-plus fs-2"></i>Add member</a>
    </div>
    <hr class="mb-0">

    @php
        $count = 1;
    @endphp
    @foreach ($members as $data)
        @if ($data->project_id == $project->id)
            <div class="d-flex justify-content-between align-items-center border-bottom p-3 box-1">
                <a class="text-decoration-none" style="width: 100%" href="{{ route('teammembers.show', $data->id) }}">
                    <div class="">
                        <h5 class="fw-light m-0 p-0 text-dark">{{ $count++ }}. {{ $data->first_name }}
                            {{ $data->last_name }}</h5>
                    </div>

                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <a class="text-decoration-none box" href="{{ route('teammembers.edit', $data->id) }}"><i
                                class="bi bi-pencil-square fs-3"></i></a>
                        <form class="m-0" action="{{ route('teammembers.destroy', $data->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="border border-0 bg-transparent m-0 box" type="submit" href=""><i
                                    class="bi bi-trash-fill text-danger fs-3"></i></button>
                        </form>

                    </div>

                </a>
            </div>

            {{-- <hr class=""> --}}
        @endif
    @endforeach


</div>

<style>
    .box {
        transition: .2s ease-in-out;
    }

    .box:hover {
        scale: 108%;
        /* background-color: #ffc107; */
    }

    .box-1 {
        transition: .3s ease-in-out;
    }

    .box-1:hover {
        background-color: rgb(212, 212, 212);
        /* background-color: #ffc107; */
    }

    .noscrollbar {
        scrollbar-width: none;
    }
</style>
