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
    <h1>Logs</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <h3>Dates</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-10">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Message</th>
                        <th>Level</th>
                        <th>Level Name</th>
                        <th>Channel</th>
                        <th>Datetime</th>
                        <th>User ID</th>
                        <th>IP</th>
                        <th>User Agent</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td title="{{ $log->context }}">{{ $log->message }}</td>
                        <td>{{ $log->level }}</td>
                        <td>{{ $log->level_name }}</td>
                        <td>{{ $log->channel }}</td>
                        <td>{{ $log->datetime }}</td>
                        <td title="{{ $log->user_detail }}">{{ $log->user_id }}</td>
                        <td>{{ $log->ip }}</td>
                        <td>{{ $log->user_agent }}</td>
                        <td>{{ $log->type }}</td>
                        <td><a href="">Detail</a></td>
                    </tr>
                    @empty
                        <tr><td colspan="10">No Logs found!</td></tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>

</body>
</html>
