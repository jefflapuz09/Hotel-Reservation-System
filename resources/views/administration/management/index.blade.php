@extends('adminlte::layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label>Add Floor?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="floor" placeholder="eg. 1st Floor">
                            <span class="input-group-btn">
                                <button onclick="addfloor(floor.value)" class="btn btn-flat btn-success" type="button"><i class="fa fa-plus-circle"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="box box-solid">
                <div class="box-header bg-navy-active">
                    <h5 class="box-title">
                        Available Floor(/s)
                    </h5>
                </div>
                <div class="box-body" id="displaydata">
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
                                <td><a></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerscripts')
<script>
    function addfloor(floor){
        var array = {};
        array['floor'] = floor;
        $.ajax({
            type: "GET",
            data: array,
            url: "/ajax/management/get_floors",
            success: function(data){
                $('#displaydata').html(data).fadeIn();
            }, error: function(status){
                alert('Floor already exists!');
            }
        })
    }
</script>
@endsection
