<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Log Detail</h1>
</div>

<div class="container-fluid">
    <form action="{{ route('log-delete', $log->id) }}" method="post" onsubmit="return confirm('are you sure?')">
        @method('delete')
        @csrf
        <a class="btn btn-info" href="{{ route('showLog') }}">Log List</a>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

        <br>
        <br>


    <div class="row">
        <div class="col-sm-12">
            <table class="table table-info table-bordered">
                <tr><th>ID</th> <td>{{ $log->id }}</td></tr>
                <tr><th>Message</th> <td>{{ $log->message }}</td></tr>
                <tr><th>Level</th> <td>{{ $log->level }}</td></tr>
                <tr><th>Level Name</th> <td>{{ $log->level_name }}</td></tr>
                <tr><th>Channel</th> <td>{{ $log->channel }}</td></tr>
                <tr><th>Date Time</th> <td>{{ $log->datetime }}</td></tr>
                <tr><th>User ID</th> <td>{{ $log->user_id }}</td></tr>
                <tr><th>User Detail</th> <td>{{ $log->user_detail }}</td></tr>
                <tr><th>IP</th> <td>{{ $log->ip }}</td></tr>
                <tr><th>User Agent</th> <td>{{ $log->user_agent }}</td></tr>
                <tr><th>Type</th> <td>{{ $log->type }}</td></tr>
                <tr><th>Context</th> <td>{{ $log->context }}</td></tr>
            </table>

        </div>
    </div>
</div>

</body>
</html>
