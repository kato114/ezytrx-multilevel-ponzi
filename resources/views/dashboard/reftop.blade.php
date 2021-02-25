@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Top 10 Referral List</h3>
    </div>
    <div class="text-white p-3">
        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>ID</th>
                    <th>Wallet</th>
                    <th>Number of referrals today</th>
                    <th>Current estimated income TRX</th>
                </tr>
            </thead>
            <tbody>
            @if(count($bonuslist) == 0)
                <tr>
                    <td class="text-center" colspan="5">There is no referral data in today.</td>
                </tr>
            @else
            @foreach($bonuslist as $key => $bonus)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $bonus->id }}</td>
                <td>{{ substr($bonus->address, 0 , 3) . "..." . substr($bonus->address, -3) }}</td>
                <td>{{ $bonus->count }}</td>
                <td>{{ number_format($bonus->estimate) }} TRX</td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection