<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</head>
<body>
<div class="container">
    <h2>Laravel DataTables Tutorial Example</h2>
    <table class="table table-striped table-bordered table-hover dataTable" id="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        </thead>
    </table>
</div>
<script>
    $(function() {
var i=1;
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('table') }}',
            columns: [
                { data: 'id', name: i++ },
                { data: 'first_name' ,name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' }
            ]
        });
    });
</script>
</body>
</html>
