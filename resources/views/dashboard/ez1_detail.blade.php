@extends('layouts.main_dashboard')
@section('content')
<div class="col-lg-12">
    <div class="row mb-4">
        <div class="col">
            <div class="border-gradient">
                <div class="border-gradient_content">
                    <h3 class="head">EZY1</h3>
                    <div class="table-responsive">
                        <table style="background:transparent;" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td width="100">&nbsp;</td>
                                    <td align="center" id="tblBinary">
                                        <style>
                                            .partial_tree {
                                            width: 290px;
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
                                            .partial_tree .ternary-branchs > div {
                                            height: 72px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(1) {
                                            top: -148px;
                                            left: -66px;
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(2) {
                                            top: -158px;
                                            right: 1px
                                            }
                                            .partial_tree .ternary-branchs > div:nth-child(3) {
                                            top: -150px;
                                            right: -63px;
                                            }
                                            .partial_tree.ternary-children div:after {
                                            content: "12345";
                                            position: absolute;
                                            }
                                            .partial_tree .matrix-span {
                                            position: absolute;
                                            top: 31%;
                                            /* left: 50%; */
                                            width: 100%;
                                            display: block;
                                            float: revert;
                                            font-weight: bold;
                                            color: #fff;
                                            text-align: center !important;
                                            }
                                            .btn-nav_page {
                                            background: #4e1c5a00;
                                            color: #fff;
                                            }
                                            .btn-nav_page input{
                                            background: linear-gradient(-5deg,#C6D82A 0%,#4AAC61 100%);
                                            border: 0;
                                            padding: 5px 9px;
                                            /* height: 45px; */
                                            /* width: 86px; */
                                            color: #fff;
                                            text-shadow: 1px 1px #000;
                                            font-weight: 600;
                                            border-radius: 10px;
                                            }
                                        </style>
                                        <div class="ternary partial_tree" style="margin: 25px 0px 25px 0;">
                                            <div class="btn-nav_next">
                                                <span class="btn-nav_page">
                                                	<input type="button" value="N" id="btn_next">
                                                </span>
                                            </div>
                                            <div class="btn-nav_prev">
                                                <span class="btn-nav_page">
                                                	<input type="button" value="P" id="btn_prev">
                                                </span>
                                            </div>
                                            <div id="value">{{ number_format(count($ezy1_members) / 3) + 1 }}</div>
                                            <a href="#" class="ternary-root matrix-root__active " style="width:70%">
                                            	<span class="matrix-level matrix-level__active ">
                                            		<img src="{{ asset('assets/images/icons/eth.png') }}">
                                            	</span>
                                            	<span class="matrix-price"> {{ $levels[$user->user_level - 1] }} </span>
                                            </a>
                                            <div class="ternary-children">
												@for($i = 0; $i < count($ezy1_members) % 3; $i++)
												<div class="matrix-children__active">
													<span class="matrix-span">{{ $ezy1_members[$i]["id"] }}</span>
												</div>
												@endfor
												@for(; $i < 3; $i++)
												<div class="matrix-children__nonactive"></div>
												@endfor
                                            </div>
                                            <div class="ternary-branchs">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="100">&nbsp;</td>
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
	var ezy1_members = <?=json_encode($ezy1_members)?>;
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