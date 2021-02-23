@section('content')
<x-adminlte-card title="Release History" bg="primary">
    <x-adminlte-datatable id="data_table" :heads="['#', 'Date', 'Hospital', 'Amount']"/>
</x-adminlte-card>
@stop

@section('js')
<script>
    $(()=>{
        data_table = $('#data_table').DataTable({
            ajax: {
                url: "{{route('admin.balances.index')}}",
                type: 'GET',
                dataSrc: 'data'
            },
            columns : [
                {data: null, defaultContent : ''},
                {data: 'date'},
                {data: 'hospital'},
                {data: 'amount'},
            ],
            order: [],
            autoWidth: false,
        });
        data_table.on('draw.dt', function () {
            var PageInfo = $('#data_table').DataTable().page.info();
            data_table.column(0, {
                page: 'all'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        });
    });
</script>
@stop