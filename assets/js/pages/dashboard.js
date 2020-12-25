$(document).ready(function() {
    
    $("#HideBuypackage").on('click',async function() {
        await initApp();

    	if(tronWeb == null) {
    		show_warning();
    		return;
    	}
		if(!MatrixInstance) {
			alert("Unable to tron network. Check your TronLink !");
			return;
		}

		try {
			toggle_spinner();

			var buy_level = $("#HideBuypackage").attr('data-level');
			var buy_level_amount = $("#HideBuypackage").attr('data-matrix_price');

		    if (confirm("Are you sure want to Confirm Buy Package of amount " + buy_level_amount + " ? ")) {
	            $("#HideBuypackage").hide();

	            var account = tronWeb.defaultAddress.base58;
				var price = await MatrixInstance.priceOfLevel(buy_level).call();
		        var options = { shouldPollResponse: false, feeLimit: 150000000, callValue: price, from: account };
                var result = await MatrixInstance.buyLevel(buy_level).send(options);
                if (result) {
                    $.ajax({
                        url: 'upgrade',
                        type: 'GET',
                        dataType: 'JSON',
                        contentType: 'application/json',
                        data: { 
            				_token: token,
                            txthash: result
                        },
                        success: function (data) {
                            alert('Congratulation your Level upgrade has been done. Once transaction completed you can upgrade next level.');
                            location.reload();
                        },
                        error: function (err) {
                            $("#HideBuypackage").show();
                            console.log("error:" + JSON.stringify(err));
                        }
                    });
                }
                else
                {
                    toggle_spinner();
	            	$("#HideBuypackage").show();
                    alert("Transaction Failed");
                }
			} else {
                toggle_spinner();
            }

		} catch (error) {
			toggle_spinner();
            $("#HideBuypackage").show();
            alert("Wallet Balance is not enough or reject operation!");
		}
    });
});