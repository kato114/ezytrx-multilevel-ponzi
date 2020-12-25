@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Lost Earning</h3>
    </div>
    <div class="text-white p-3">
        <table id="example" class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>Hash</th>
                    <th>INCOME</th>
                    <th>Type</th>
                    <th>Level</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lost_list as $lost)
            <tr>
                <td>{{ substr($lost->txn_id, 0, 3) . "..." . substr($lost->txn_id, -3) }}</td>
                <td>{{ $lost->amount / 1000000 }}</td>
                <td>{{ $lost->type == 0 ? 'EZY1' : 'EZY10' }}</td>
                <td>{{ $lost->level }}</td>
                <td>{{ $lost->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection