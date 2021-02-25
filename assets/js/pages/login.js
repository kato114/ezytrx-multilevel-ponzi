$(document).ready(function() {
    $("#btn_login").on('click',async function() {
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

			var address = tronWeb.defaultAddress.base58;
			var isExists = await MatrixInstance.userInfos(address).call();
			if (isExists) {
	            $.ajax({
	                type: "POST",
	                url: "login",
	                data: {
            			_token: token,
	                    id: isExists.id.toNumber(),
	                    address: address,
                        mode: 'login'
	                },
	                dataType: 'json',
	                success: function (data) {
	                	if(data.status == "success") {
							localStorage.setItem("loginaddress", address);	
							alert('Welcome to EZY TRX Smart Contract');
							document.location.href = base_url + '/dashboard';
	                	} else {
							toggle_spinner();
	                		alert("Please try again later.");
	                	}
		            }
		        });
			} else {
				toggle_spinner();
				alert("Please register first!");
			}
		} catch (error) {
			toggle_spinner();
			alert("Unable to tron network. Check your TronLink !");
			console.log(error);
		}
    });

    $("#btn_view").on('click',async function() {
        await initApp();
        
    	if(tronWeb == null) {
    		show_warning();
    		return;
    	}
		if(!MatrixInstance) {
			alert("Unable to tron network. Check your TronLink !");
			return;
		}

    	var view_id = $("#inp_view_id").val();
    	if(view_id.length == 0) {
    		alert("Enter TRX Address or ID correctly.");
    		return;
    	}

		try {
			toggle_spinner();

			if(view_id.length > 11) {
				var isExists = await MatrixInstance.userInfos(view_id).call();
				if (isExists) {
					view_id = isExists.id.toNumber();
				}
			}

            $.ajax({
                type: "POST",
                url: "login",
                data: {
        			_token: token,
                    id: view_id,
                    mode: 'view'
                },
                dataType: 'json',
                success: function (data) {
                	if(data.status == "success") {
						localStorage.setItem("loginaddress", view_id);	
						alert('Welcome to EZY TRX Smart Contract');
						document.location.href = base_url + '/dashboard';
                	} else {
						toggle_spinner();
                		alert("Please try again later.");
                	}
	            }
	        });
		} catch (error) {
			toggle_spinner();
			alert("Unable to tron network. Check your TronLink !");
			console.log(error);
		}
    });
});