<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participant List</title>

    @include("static")
    <script src="{{url("/")}}/static/js/xlsx_0.18.3_xlsx.full.min.js"></script>
    <script>
        $(document).ready(function(){
            // datatable init
            let table = new DataTable('#participantTable', {
            responsive: true
            });
        });
        </script>


</head>
<body class="">

    @include("dashboard.navbar")

    <div class="container">

    <h1 class="mt-2">Event Participant List</h1>
    <button onclick="exportToExcel()" class="btn btn-primary mt-3 mb-3">Export to Excel</button>
    <table id="participantTable" class="table table-hover" >
        <thead>
            <tr class="table-primary">
                <th>Registraion ID</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>College/Organization</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($regs as $reg)
            <tr>
                <td>{{$reg->registration_id}}</td>
                <td>{{$reg->full_name}}</td>
                <td>{{$reg->mobile}}</td>
                <td>{{$reg->email}}</td>
                <td>{{$reg->college}}</td>
                <td>{{$reg->designation}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>


    <script>
        function exportToExcel() {
            const table = document.getElementById('participantTable');
            const wb = XLSX.utils.table_to_book(table, { sheet: 'Participants' });
            XLSX.writeFile(wb, 'event_peoples.xlsx');
        }
    </script>

<div class="w-100 d-flex justify-content-end">
    <a href='{{url()->previous()}}' class="btn btn-primary mt-2 me-4 float-left">Back</a>
    </div>

</div>
</body>
</html>
