@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Financial statistics</h3>
    </div>
    <div class="text-white p-3">
        <div class="mx-2 mb-3">
            <form method="GET" action="">
            <div class="row pb-2">
                <div class="col-md-12">
                    <label>Program</label>
                    <select class="form-control" name="program">
                        <option></option>
                        <option {{ isset($program) && $program == 0 ? 'selected' : '' }} value="0">EZY1</option>
                        <option {{ isset($program) && $program == 1 ? 'selected' : '' }} value="1">EZY10</option>
                        <option {{ isset($program) && $program == 3 ? 'selected' : '' }} value="3">Upgrade</option>
                        <option {{ isset($program) && $program == 2 ? 'selected' : '' }} value="2">Activation</option>
                    </select>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6">
                    <label>From Date</label>
                    <input type="text" class="form-control datepicker" name="from_date" placeholder="yyyy-mm-dd" value="{{ isset($from_date) ? $from_date : '' }}">
                </div>
                <div class="col-md-6">
                    <label>To Date</label>
                    <input type="text" class="form-control datepicker" name="to_date" placeholder="yyyy-mm-dd" value="{{ isset($to_date) ? $to_date : '' }}">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6 text-left">
                    <button class="btn btn-warning text-white" name="type" value="filter">Filter</button>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-default text-white" name="type" value="all">All</button>
                </div>
            </div>
            </form>
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
                @php
                $type = array("EZY1", "EZY2", "TEMP_BONUS", "REF_BONUS", "LEVEL_BONUS", "REST_BONUS");
                @endphp
                @foreach($finlist as $fin)
                <tr>
                    <td>{{ $fin['from_user_id'] }}</td>
                    <td>{{ $type[$fin['type']] }}</td>
                    <td>{{ $fin['level'] != 0 ?: $fin['level'] + 1 }}</td>
                    <td>{{ $fin['pack_amount'] / 1000000 }}</td>
                    <td>{{ substr($fin['txn_id'], 0, 3) . "..." . substr($fin['txn_id'], -3) }}</td>
                    <td>{{ $fin['amount'] / 1000000 }}</td>
                    <td>{{ $fin['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>
@endsection