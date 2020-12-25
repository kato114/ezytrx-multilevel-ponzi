@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Team Stats</h3>
    </div>
    <div class="text-white p-3">
        <div class="border border-white mx-1 mb-3 py-3 px-5">
            <div class="row">
                <p class="col-4 m-0">Total Team registrations : {{ count($teamlist) }}</p>
            </div>
            <div class="row">
                <p class="col-4 m-0">Registrations for the week : {{ $week_count }}</p>
            </div>
            <div class="row">
                <p class="col-4 m-0">Registrations in 24 hours : {{ $day_count }}</p>
            </div>
            <div class="row">
                <p class="col-4 m-0">Sponsor ID : {{ $user->referral_id }}</p>
            </div>
        </div>
        <table id="example" class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Address</th>
                    <th>EZY1</th>
                    <th>EZY10</th>
                    <th>Downline Earnings</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teamlist as $member)
                <tr>
                    <td>{{ $member['id'] }}</td>
                    <td>{{ substr($member['address'], 0, 3) . "..." . substr($member['address'], -3) }}</td>
                    <td>{!! $member['referral_id'] == $user->id ? '<i class="fa fa-check"></i>' : '<i class="fa-window-close-o"></i>' !!}</td>
                    <td><i class="fa fa-check"></i></td>
                    <td>{{ ($member['gain_amount_one'] + $member['gain_amount_ten']) / 1000000 }}</td>
                    <td>{{ substr($member['created_at'], 0, 10) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection