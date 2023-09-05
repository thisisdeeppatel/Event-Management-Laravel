<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participant List</title>

    @include("static")
    <script src="{{url("/")}}/static/js/xlsx_0.18.3_xlsx.full.min.js"></script>


</head>
<body class="container mt-5">
    <h1 style="justify-self: center;margin-bottom: 50px">Event Participant List</h1>
    <table id="participantTable" class="table table-hover" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($regs as $reg)
            <tr>
                <td>{{$reg->full_name}}</td>
                <td>{{$reg->mobile}}</td>
                <td>{{$reg->email}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <button onclick="exportToExcel()">Export to Excel</button>

    <script>
        function exportToExcel() {
            const table = document.getElementById('participantTable');
            const wb = XLSX.utils.table_to_book(table, { sheet: 'Participants' });
            XLSX.writeFile(wb, 'event_participants.xlsx');
        }
    </script>
</body>
</html>
