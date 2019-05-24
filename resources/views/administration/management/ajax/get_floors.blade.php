<table class="table table-striped table-bordered table-condensed">
    <thead>
        <tr>
            <th>#</th>
            <th>Floor Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($floors as $floor)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$floor->floor}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>