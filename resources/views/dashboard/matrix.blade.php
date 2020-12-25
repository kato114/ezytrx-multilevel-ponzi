@extends('layouts.main_dashboard')
@section('content')
<div class="border border-white rounded rounded-lg p-1 mb-4">
    <div class="p-3">
        <h3 class="text-white">Matrix Analysis</h3>
    </div>
    <div class="text-white p-3">
        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th>Matrix Level</th>
                    <th>Total Positions</th>
                    <th>Filed Positions</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $position = 0; 
                    $total_count = 0; 
                @endphp
                
                @for($i = 1; $i < 11; $i++)
                @php 
                    $position += pow(3,$i); 
                    $total_count += $matrix[$i - 1]; 
                @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ pow(3,$i) }}</td>
                    <td>{{ $matrix[$i - 1] }}</td>
                </tr>
                @endfor
                <tr>
                    <td>Total</td>
                    <td>{{ $position }}</td>
                    <td>{{ $total_count }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection