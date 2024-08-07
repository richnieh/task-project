@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <div class="card">
            <div class="card-header">
                My Tasks
            </div>
            <div class="card-body">
                <form action="{{route('tasks.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control @error('name') is_invalid @enderror" id="name" aria-describedby="nameFeedback" placeholder="Enter name">
                        @error('name')
                        <small id="nameFeedback" class="form-text invalid-feedback">
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
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
                                <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <h1 class="text-center mt-2">No Tasks</h1>
            @endif
        </div>
    </div>
@endsection
