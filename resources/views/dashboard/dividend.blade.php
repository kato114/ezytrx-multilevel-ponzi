@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Dividend Bonus</h3>
    </div>
    <div class="text-white p-3">
        <table id="example" class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>ID</th>
                    <th>Wallet</th>
                    <th>Level</th>
                    <th>Yesterday's dividend TRX</th>
                    <th>Cumulative's dividend TRX</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bonuslist as $key => $bonus)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $bonus->to_user_id }}</td>
                <td>{{ substr($bonus->address, 0 , 3) . "..." . substr($bonus->address, -3) }}</td>
                <td>{{ $bonus->user_level }}</td>
                <td>{{ number_format($bonus->ytotal / 1000000) }} TRX</td>
                <td>{{ number_format($bonus->total / 1000000) }} TRX</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection