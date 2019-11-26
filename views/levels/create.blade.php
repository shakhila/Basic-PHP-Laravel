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
                <form class="form-horizontal" action="{{ route('level.store') }}" method="POST">
                @csrf
                <fieldset>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="level_name">Level Name:</label>  
                <div class="col-md-4">
                <input id="level_name" name="level_name" type="text" placeholder="Level Name" class="form-control input-md" required="">
                    
                </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="level_number">Level Number</label>
                <div class="col-md-4">
                    <select id="level_number" name="level_number" class="form-control" required>
                        <option value="" selected disabled>Please Choose</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="status">Status</label>
                <div class="col-md-4">
                    <select id="status" name="status" class="form-control" required>
                            <option value="" selected disabled>Please Choose</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="btn_submit"></label>
                <div class="col-md-8">
                    <button id="btn_submit" name="btn_submit" class="btn btn-success">Submit</button>
                    <button type="button" id="btn_cancel" name="btn_cancel" class="btn btn-danger" onclick="window.location.href='{{ route($return_route) }}'">Cancel</button>
                </div>
                </div>

                </fieldset>
            </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
