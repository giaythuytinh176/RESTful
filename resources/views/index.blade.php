<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>

<button>show or hide table</button>

<body>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>ServiceTypeCode</th>
        <th>ServiceTypeDesc</th>
        <th>CreatedDate</th>
        <th>CreatedBy</th>
    </tr>
    </thead>
</table>
</body>
<script>

    {{--    {{--}}
    {{--    dd(file_get_contents("http://localhost/RESTful/api/customers"))--}}
    {{--}}--}}


    $(document).ready(function () {
        $("button").click(function(){
            $("#example").toggle();
        });

        //$('#example').DataTable();
        $.ajax({
            "url": "http://localhost/RESTful/api/customers",
            "type": "GET",
            "datatype": 'json',
            "success": function (data) {
                $('#example').DataTable({
                    data: data,
                    columns: [
                        {'data': 'id'},
                        {'data': 'first_name'},
                        {'data': 'last_name'},
                        {'data': 'created_at'},
                        {'data': 'updated_at'},
                    ],
                });
            }
        });
    });


</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</body>
</html>
