<form action="{{route($modelRoute, $modelId)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
</form>
