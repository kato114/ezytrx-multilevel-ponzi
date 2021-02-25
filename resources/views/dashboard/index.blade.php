@extends('layouts.main_dashboard')
@section('content')
<div class="col-lg-12">
	<div class="row mb-4">
		<div class="col">
			<div class="border-gradient">
				<div class="border-gradient_content">
					<div id="x3main" class="logotypeX3">
						<h3 class="head-2">{{$user->user_level}}</h3>
					</div>
					<div class="ternary-wrapper">
						@foreach($levels as $key => $level)
						<div class="ternary w-110">
							@if($user->user_level > $key)
							<a href="{{ route('ez1_detail', array('user_id' => $user->id)) }}" class="binary-root matrix-root__active ">
							@else
							<a href="#" class="binary-root matrix-root__nonactive ">
							@endif
							@if($user->user_level == $key && $mode == 'login')
							<i class="matrix-icon_cart matrix-icon_cart__big" data-matrix="1" id="HideBuypackage" data-level="{{ $key + 1 }}" data-matrix_price="{{ $level }}" title="Buy"></i>
							@endif
							<span class="matrix-level matrix-level__active ">
							<img src="{{ asset('assets/images/icons/eth.png') }}">
							</span>
							<span class="matrix-price" > {{ $level }} </span>
							</a>
							<div class="ternary-children">
								@for($i = 0; $i < count($ezy1_members) % 3; $i++)
								<div class="matrix-children__active"></div>
								@endfor
								@for(; $i < 3; $i++)
								<div class="matrix-children__nonactive"></div>
								@endfor
							</div>
							<div class="ternary-branchs">
								<div></div><div></div><div></div>
							</div>
							<div class="matrix-break"></div>
							<div class="matrix-info">
								<div class="matrix_partners__count">
									<span> {{ count(App\Models\User::get_ez1_children($user->id, $key + 1)) }}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="border-gradient">
				<div class="border-gradient_content">
					<div id="x4main" class="logotypeX4">
						<h3 class="head-2">EZY10</h3>
					</div>
					<div class="binary-wrapper">
						@foreach($levels as $key => $level)
						<div class="binary">
							@if($user->user_level > $key)
							<a href="{{ route('ez10_detail', array('user_id' => $user->id, 'top_id' => $user->id)) }}" class="binary-root matrix-root__active ">
							@else
							<a href="#" class="binary-root matrix-root__nonactive ">
							@endif
							<span class="matrix-level matrix-level__active ">
							<img src="{{ asset('assets/images/icons/eth.png') }}">
							</span>
							<span class="matrix-price" >
							{{ $level }}
							</span>
							</a>
							<div class="binary-children binary-children_level__1">
								@if(count($ezy10_one_members) >= 1)
								<div class="matrix-children__active mr-5">
									<a href="#" title="ACTIVE UID: {{$ezy10_one_members[0]['id']}}"> &nbsp; </a>
								</div>
								@else
								<div class="matrix-children__nonactive mr-5">
									<a href="#" title="UID: nonnactive"> &nbsp; </a>
								</div>
								@endif
								@if(count($ezy10_one_members) >= 2)
								<div class="matrix-children__active ma-6">
									<a href="#" title="ACTIVE UID: {{$ezy10_one_members[1]['id']}}"> &nbsp; </a>
								</div>
								@else
								<div class="matrix-children__nonactive ma-6">
									<a href="#" title="UID: nonnactive"> &nbsp; </a>
								</div>
								@endif
								@if(count($ezy10_one_members) >= 3)
								<div class="matrix-children__active ml-2">
									<a href="#" title="ACTIVE UID: {{$ezy10_one_members[2]['id']}}"> &nbsp; </a>
								</div>
								@else
								<div class="matrix-children__nonactive ml-2">
									<a href="#" title="UID: nonnactive"> &nbsp; </a>
								</div>
								@endif
							</div>
							<div class="binary-children binary-children_level__2">
								@for($i = 0; $i < (count($ezy10_one_members) > 2 ? 3 : count($ezy10_one_members)); $i++)
									@for($j = 0; $j < (count($ezy10_one_members[$i]["members"]) > 2 ? 3 : count($ezy10_one_members[$i]["members"])); $j++)
									<div class="matrix-children__active pink-2 sub">
										<a href="#" title="ACTIVE UID: {{$ezy10_one_members[$i]['members'][$j]['id']}}"> &nbsp; </a>
									</div>
									@endfor
									@for(; $j < 3; $j++)
									<div class="matrix-children__nonactive sub">
										<a href="#" title="UID: nonnactive">
										&nbsp;
										</a>
									</div>
									@endfor
								@endfor
								@for(; $i < 3; $i++)
									@for($j = 0; $j < 3; $j++)
									<div class="matrix-children__nonactive sub">
										<a href="#" title="UID: nonnactive">
										&nbsp;
										</a>
									</div>
									@endfor
								@endfor
							</div>
							<div class="binary-branchs">
								@for($i = 0; $i < 12; $i++)
								<div></div>
								@endfor
							</div>
							<div class="matrix-break"></div>
							<div class="matrix-info">
								<div class="matrix_partners__count">
									<span> {{ count(App\Models\User::get_ez10_children($user->id, $key + 1, 10)) }}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row icon-tips text-left mt-3">
		<div class="col-md-5">
			<div>
				<i class="matrix-single matrix-children__active"></i>
				<span class="icon-tips_text">PARTNER INVITED BY YOU</span>
			</div>
			<div>
				<i class="matrix-single matrix-children__overflow"></i>
				<span class="icon-tips_text">OVERFLOW FROM UP</span>
			</div>
		</div>
		<div class="col-md-6">
			<div>
				<i class="matrix-single matrix-children__overflow_partner"></i>
				<span class="icon-tips_text">BOTTOM OVERFLOW</span>
			</div>
			<div>
				<i class="matrix-single matrix-children__advance"></i>
				<span class="icon-tips_text">PARTNER WHO IS AHEAD OF HIS INVITER</span>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection