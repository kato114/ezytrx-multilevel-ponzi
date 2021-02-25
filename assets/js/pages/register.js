$(document).ready(function() {
    $("#btn_register").on('click',async function() {
        await initApp();

    	if(tronWeb == null) {
    		show_warning();
    		return;
    	}
		if(!MatrixInstance) {
			alert("Unable to tron network. Check your TronLink !");
			return;
		}

    	var referral_id = $("#inp_referral").val();
    	if(referral_id == "" || referral_id <= 0 || isNaN(referral_id)) {
    		alert("Enter referral ID as numeric value");
    		return;
    	}

    	var usr_addr = await MatrixInstance.userAddressByID(referral_id).call();
		var refaddr = await tronWeb.address.fromHex(usr_addr);

		if (refaddr == 'T9yD14Nj9j7xAB4dbGeiX9h8unkKHxuWwb') {
			alert("Enter Referral ID as valid value. You tried to reference unregisterd participant ID.");
			return;
		}

		try {
			toggle_spinner();

			var valuePass = await MatrixInstance.priceOfLevel(1).call();
			valuePass = window.tronWeb.toDecimal(valuePass);

			var account = tronWeb.defaultAddress.base58;
			var options = {
				shouldPollResponse: false, feeLimit: 150000000, callValue: valuePass, from: account
			};

	        var result = await MatrixInstance.regUser(referral_id).send(options);

	    	if (result) {
				var account_id =  await MatrixInstance.lastIDCount.call().call();
				account_id = account_id.toNumber();
	            $.ajax({
	                type: "POST",
	                url: "register",
	                data: {
            			_token: token,
	                    account_id: account_id,
	                    address: account
	                },
	                dataType: 'json',
	                success: function (data) {
	                	if(data.status == "success") {
							alert("Registration request has been added. You can login after confirmed.");
							document.location.href = base_url + '/login';	
	                	} else {
							toggle_spinner();
	                		alert("Please try again later.");
	                	}
		            }
		        });
			} else {
				toggle_spinner();
				alert("Transaction cancelled or Error accured");
			}
		} catch (error) {
			toggle_spinner();
			alert("Use Tron Wallet owned 1000 trx as minimal balance !");
		}
    });
});