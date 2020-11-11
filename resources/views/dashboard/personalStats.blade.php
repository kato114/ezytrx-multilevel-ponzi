@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Financial statistics</h3>
    </div>
    <div class="text-white p-3">
        <div class="mx-2 mb-3">
            <div class="row pb-2">
                <div class="col-md-12">
                    <label>Program</label>
                    <select class="form-control">
                        <option></option>
                        <option>EZY1</option>
                        <option>EZY10</option>
                        <option>Upgrade</option>
                        <option>Activation</option>
                    </select>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6">
                    <label>From Date</label>
                    <input type="text" class="form-control" name="" placeholder="mm/dd/yyyy">
                </div>
                <div class="col-md-6">
                    <label>To Date</label>
                    <input type="text" class="form-control" name="" placeholder="mm/dd/yyyy">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6 text-left">
                    <button class="btn btn-warning text-white">Filter</button>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-default text-white">All</button>
                </div>
            </div>
        </div>
        <table id="example" class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Program</th>
                    <th>Level</th>
                    <th>Slot</th>
                    <th>Hash</th>
                    <th>INCOME</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Activation</td>
                    <td>1</td>
                    <td>1000.0</td>
                    <td>d74...b33</td>
                    <td>-</td>
                    <td>22531100.0 trx / $ 608339.700</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection