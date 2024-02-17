<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Projects</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->action }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>