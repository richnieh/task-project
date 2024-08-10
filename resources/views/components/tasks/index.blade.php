<div class="card">
    @if($tasks->count())
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Task</th>
                <th scope="col">Created at</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr class="table-active">
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->created_at->diffForHumans()}}
                    <td>
                        <x-tasks.delete-model modelRoute="tasks.destroy" :modelId="$task->id">
                        </x-tasks.delete-model>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-center mt-2">No Tasks</h1>
    @endif
</div>
