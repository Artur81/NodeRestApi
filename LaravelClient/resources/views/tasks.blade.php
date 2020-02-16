<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>task</th>
        <th>status</th>
        <th>created_at</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($tasks as $task)
    <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->task }}</td>
        <td>{{ $task->status }}</td>
        <td>{{ $task->created_at }}</td>
    </tr>
    @endforeach

    </tbody>
</table>