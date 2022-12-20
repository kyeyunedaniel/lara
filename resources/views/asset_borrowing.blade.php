@extends('layouts.navigationbar')
@section('title') Asset Borrowing @endsection
@section('content')
    <div class="page-header">
        <h1>
            Asset Movements
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                My Requests
            </small>
        </h1>
    </div>
    <div class="form-actions no-margin-bottom">
        <div class="float-alert center">
            <div class="float-alert-container">
                <div class="col-md-12">
                    <a href="" class="clarify btn btn-primary btn-sm" title="Add New Asset Movement Request">Add Asset Movement Request</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <table class="data-table store_asset_movements_requests_owner table table-striped table-bordered table-hover no-margin-bottom no-border-top" >
        <thead>
            <tr>
                <th style="vertical-align: top;width: 15%">id</th>
                <th style="vertical-align: top;width: 15%">Request Date</th>
                <th style="vertical-align: top; width: 15%">Request By</th>
                <th style="vertical-align: top;width: 10%">Request Summary</th>
                <th style="vertical-align: top; width: 4%"></th>
            </tr>
        </thead>
    </table>
@endsection
