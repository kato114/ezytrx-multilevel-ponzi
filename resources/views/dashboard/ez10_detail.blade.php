@extends('layouts.main_dashboard')
@section('content')
<div class="col-lg-12">
    <div class="row mb-4">
        <div class="col">
            <div class="border-gradient">
                <div class="border-gradient_content">
                    <h3 class="head">EZY10</h3>
                    <div class="table-responsive">
                        <table style="background:transparent;" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td width="154">&nbsp;</td>
                                    <td align="center" id="tblBinary">
                                        <a href="{{ route('ez10_detail', array('user_id' => $top_id, 'top_id' => $top_id)) }}" style="width: 50%;" class="ternary-root">
                                            <span class="matrix-price"> BACK TO TOP : {{$top_id}} </span>
                                        </a>
                                        <style>
                                            .binary-children_level__1 div:nth-child(3) {
                                            margin-left: 60px;
                                            }
                                            .binary-children_level__1 div:nth-child(1) {
                                            margin-right: 60px;
                                            }
                                            .partial_tree {
                                            width: 380px;
                                            }
                                            .partial_tree .ternary-root {
                                            padding: 35px;
                                            }
                                            .partial_tree .matrix-price {
                                            font-size: 25pt;
                                            }
                                            .partial_tree .ternary-children {
                                            margin-top: 60px;
                                            }
                                            .partial_tree .ternary-children > div {
                                            width: 75px;
                                            height: 75px;
                                            }
                                            .partial_tree .ternary-children > .sub {
                                            width: 40px;
                                            height: 40px;
                                            }
                                            .partial_tree .ternary-branchs > div {
                                            height: 88px;
                                            }
                                            .partial_tree .ternary-branchs > .height2 {
                                            height: 38px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(1) {
                                            top: -187px;
                                            left: -101px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(2) {
                                            top: -198px;
                                            right: 0px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(3) {
                                            top: -189px;
                                            right: -106px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(4) {
                                            top: -54px;
                                            left: -181px;
                                            }
                                            .ternary-branchs > div:nth-child(4) {
                                            top: -50px;
                                            left: -27px;
                                            -webkit-transform: rotate(36deg);
                                            -moz-transform: rotate(36deg);
                                            -ms-transform: rotate(36deg);
                                            -o-transform: rotate(36deg);
                                            transform: rotate(36deg);
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(5) {
                                            top: -59px;
                                            right: 151px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(6) {
                                            top: -56px;
                                            right: 118px;
                                            }
                                            .ternary-branchs > div:nth-child(6) {
                                            top: -50px;
                                            right: -30px;
                                            -webkit-transform: rotate(-36deg);
                                            -moz-transform: rotate(-36deg);
                                            -ms-transform: rotate(-36deg);
                                            -o-transform: rotate(-36deg);
                                            transform: rotate(-36deg);
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(7) {
                                            top: -54px;
                                            left: -32px;
                                            }
                                            .ternary-branchs > div:nth-child(7) {
                                            top: -50px;
                                            left: -27px;
                                            -webkit-transform: rotate(36deg);
                                            -moz-transform: rotate(36deg);
                                            -ms-transform: rotate(36deg);
                                            -o-transform: rotate(36deg);
                                            transform: rotate(36deg);
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(8) {
                                            top: -59px;
                                            right: 0px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(9) {
                                            top: -56px;
                                            right: -33px;
                                            }
                                            .ternary-branchs > div:nth-child(9) {
                                            top: -50px;
                                            right: -30px;
                                            -webkit-transform: rotate(-36deg);
                                            -moz-transform: rotate(-36deg);
                                            -ms-transform: rotate(-36deg);
                                            -o-transform: rotate(-36deg);
                                            transform: rotate(-36deg);
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(10) {
                                            top: -54px;
                                            left: 118px;
                                            }
                                            .ternary-branchs > div:nth-child(10) {
                                            top: -50px;
                                            left: -27px;
                                            -webkit-transform: rotate(36deg);
                                            -moz-transform: rotate(36deg);
                                            -ms-transform: rotate(36deg);
                                            -o-transform: rotate(36deg);
                                            transform: rotate(36deg);
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(11) {
                                            top: -59px;
                                            right: -153px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(12) {
                                            top: -56px;
                                            right: -179px;
                                            }
                                            .ternary-branchs > div:nth-child(12) {
                                            top: -50px;
                                            right: -30px;
                                            -webkit-transform: rotate(-36deg);
                                            -moz-transform: rotate(-36deg);
                                            -ms-transform: rotate(-36deg);
                                            -o-transform: rotate(-36deg);
                                            transform: rotate(-36deg);
                                            }
                                            .partial_tree.ternary-children div:after {
                                            content: "12345";
                                            position: absolute;
                                            }
                                            .partial_tree .matrix-span {
                                            position: absolute;
                                            top: 26%;
                                            left: 3%;
                                            font-weight: bold;
                                            color: #fff;
                                            text-align: center;
                                            }
                                            .partial_tree .matrix-span-2 {
                                            position: absolute;
                                            top: 7%;
                                            left: 3%;
                                            font-weight: bold;
                                            color: #fff;
                                            text-align: center;
                                            }
                                        </style>
                                        <div class="ternary partial_tree">
                                            <a href="#" class="ternary-root matrix-root__active ">
                                                <span class="matrix-price">{{$user->id}}</span>
                                            </a>
                                            <div class="ternary-children binary-children_level__1">
                                                @for($i = 0; $i < (count($ezy10_one_members) > 2 ? 3 : count($ezy10_one_members)); $i++)
                                                <div class="matrix-children__active">
                                                    <a href="{{ route('ez10_detail', array('user_id' => $ezy10_one_members[$i]['id'], 'top_id' => $top_id)) }}" class="matrix-span"> {{ $ezy10_one_members[$i]['id'] }} </a>
                                                </div>
                                                @endfor
                                                @for(; $i < 3; $i++)
                                                <div class="matrix-children__nonactive">
                                                    <a href="#" class="matrix-span"> &nbsp; </a>
                                                </div>
                                                @endfor
                                            </div>
                                            <div class="ternary-children binary-children_level__2">
                                                @for($i = 0; $i < (count($ezy10_one_members) > 2 ? 3 : count($ezy10_one_members)); $i++)
                                                    @for($j = 0; $j < (count($ezy10_one_members[$i]["members"]) > 2 ? 3 : count($ezy10_one_members[$i]["members"])); $j++)
                                                    <div class="matrix-children__active sub pink-2">
                                                        <a href="{{ route('ez10_detail', array('user_id' => $ezy10_one_members[$i]['members'][$j]['id'], 'top_id' => $top_id)) }}" class="matrix-span-2">{{$ezy10_one_members[$i]['members'][$j]['id']}}</a>
                                                    </div>
                                                    @endfor
                                                    @for(; $j < 3; $j++)
                                                    <div class="matrix-children__nonactive sub">
                                                        <a href="#" title="UID: nonnactive"> &nbsp;</a>
                                                    </div>
                                                    @endfor
                                                @endfor
                                                @for(; $i < 3; $i++)
                                                    @for($j = 0; $j < 3; $j++)
                                                    <div class="matrix-children__nonactive sub">
                                                        <a href="#" title="UID: nonnactive"> &nbsp; </a>
                                                    </div>
                                                    @endfor
                                                @endfor
                                            </div>
                                            <div class="ternary-branchs">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                                <div class="height2"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="54">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	var ezy1_members;
	$(document).ready(function() {
		$("#btn_next").on('click', function() {
			$("#value").text($("#value").text() * 1 + 1)
			$(".ternary-children").empty();

			var page = $("#value").text() - 1;
			for(var i = page * 3; i < page * 3 + 3; i ++)
			{
				if(ezy1_members[i] !== undefined) {
					$(".ternary-children").append('<div class="matrix-children__active"><span class="matrix-span">'+ezy1_members[i]["id"]+'</span></div>');
				}
				else {
					$(".ternary-children").append('<div class="matrix-children__nonactive"></div>');
				}
			}
		});

		$("#btn_prev").on('click', function() {
			if($("#value").text() > 1) {
				$("#value").text($("#value").text() * 1 - 1);
				$(".ternary-children").empty();

				var page = $("#value").text() - 1;
				for(var i = page * 3; i < page * 3 + 3; i ++)
				{
					if(ezy1_members[i] !== undefined) {
						$(".ternary-children").append('<div class="matrix-children__active"><span class="matrix-span">'+ezy1_members[i]["id"]+'</span></div>');
					}
					else {
						$(".ternary-children").append('<div class="matrix-children__nonactive"> </div>');
					}
				}
			}
		});
	});
</script>
@endsection