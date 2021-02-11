<table border="1">
    <tr>
        <th>Site(Services)</th>
        <th>last_checked</th>
        <th>Status</th>
    </tr>

    @foreach($datas as $data)
        <tr>
            <td>{{$data->Service_name}}</td>
            <td>{{$data->last_checked}}</td>
            <td>{{$data->status}}</td>

        </tr>

    @endforeach


</table>
