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
        <x-tasks.index :tasks="$tasks"></x-tasks.index>
    </div>
@endsection
