@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Leaderboard</h3>
    </div>
    <div class="text-white p-3">
        <table id="example" class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>ID</th>
                    <th>Wallet</th>
                    <th>INCOME</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leaderlist as $key =>$leader)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <th>{{ $leader->id }}</th>
                    <th>{{ substr($leader->address, 0, 3) . "..." . substr($leader->address, -3) }}</th>
                    <th>{{ $leader->gain_amount / 1000000 }} / $ {{ number_format($leader->gain_amount / 1000000 * $tron_price, 2) }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection