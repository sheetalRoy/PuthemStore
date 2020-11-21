<table class="table">
    <tr>
        <th>Sl.No</th>
        <th>Name</th>
    </tr>
    @foreach ($record as $res)
    <tr>
        <td>{{$res->id}}</td>
        <td>{{$res->name}}</td>
    </tr>
@endforeach
</table>