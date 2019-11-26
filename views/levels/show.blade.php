@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <div class="float-left">
                        <legend>{{ $title }}</legend>
                    </div>
                </div>

                <div class="card-body">
                <table class="table table-bordered table-sm table-striped table-hover">
                <tr>
                    <th>Level Name:</th>
                    <td>{{ $level->level_name }}</td>
                </tr>
                <tr>
                    <th>Level Number:</th>
                    <td>{{ $level->level_number }}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{ $level->getStatus() }}</td>
                </tr>
                <tr>
                    <th>Created At:</th>
                    <td>{{ $level->changeDateFormat($level->created_at) }}</td>
                </tr>
                <tr>
                    <th>Updated At:</th>
                    <td>{{ $level->changeTimeFormat($level->updated_at) }}</td>
                </tr>
            </table>
            <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('level.index') }}"><i class="fas fa-plus"></i> Back</a>
                <!-- <button type="button" id="btn_cancel" name="btn_cancel" class="btn btn-danger" onclick="window.location.href='{{ route($return_route) }}'">Back</button> -->
            </div>
            </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
