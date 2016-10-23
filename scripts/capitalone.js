$("#alignButton").click(function(event) {
	if($("#first_name").val() != "" && $("#last_name").val() != "" &&
		$("#address").val() !="" && $("#user_name").val() !="" &&
		$("#password").val() !="")
	{
		create_customer();
	}
	else
	{
		alert("PLEASE FILL OUT FORM!");
	}
});




var streetNumber; 
var streetName;
var customer_id;
var bank_id;


//Creates customer along with its account
function create_customer()
{
	//splits address
	split_address();

	//create customer
	$.ajax({
		url: "http://api.reimaginebanking.com/customers?key=bb67d82aa016521f06cd766920159874",
		type: "POST",
		dataType: "json",
		headers: {
			'Content-Type': 'application/json',
			'Accept': 'application/json'
		},
		data: JSON.stringify({
			first_name: $('#first_name').val(), 
			last_name: $('#last_name').val(),
			address: {
	    		street_number: streetNumber,
	    		street_name: streetName,
	    		city: "New Brunswick",
	    		state: "NJ",
	    		zip: "08901"
	    	}
		}),
		success: function(data) {

			customer_id = data.objectCreated._id;

			create_bank_account(customer_id);

			console.log(JSON.stringify(data));// ACCOUNT CREATED YAY!

		},
		error: (xhr, textStatus, errorThrown) => { console.log(textStatus, errorThrown) }
	});
}


//creates bank account
function create_bank_account(id)
{	
	//create bank account with customer id 
	console.log("were inside bank account funtion");
	bank_id = generateAccountNumber();
	console.log("ACCT:" + bank_id);
	console.log("Customer ID:" + id);
	var nick_name = id.charAt(0) + id.charAt(1) + id.charAt(2) + id.charAt(3);

	var url1 = "http://api.reimaginebanking.com/customers/";
	var url2 = url1.concat(id);
	var urlx = "/accounts?key=bb67d82aa016521f06cd766920159874";
	var url3 = url2.concat(urlx);
	
	console.log(url3);

	$.ajax({
		url: url3,
		type: "POST",
		dataType: "json",
		headers: {
			'Content-Type': 'application/json',
			'Accept': 'application/json'
		},
		data: JSON.stringify({
			type: "Credit Card",
			nickname: nick_name,
			rewards: 0,
			balance: 10.00,
			account_number: bank_id
		}),
		success: function(data) {


			console.log(JSON.stringify(data));// ACCOUNT CREATED YAY!
			console.log("YAY CREATED Bank Account!!!!");
			
		},
		error: (xhr, textStatus, errorThrown) => { console.log(textStatus, errorThrown) }

	});

}


// Generate Account Number 
function generateAccountNumber()
{
	var account_number = "";
	var alphabet = "ABCDEFGHIJKLMNOPQRSTUVQXYZabcdefghijklmnopqrstuvwxyz";

	for(var i =0; i < 16;i++)
	{
		account_number += alphabet.charAt(Math.floor(Math.random() * alphabet.length));
	}

	return account_number;
}

//split address


function split_address()
{

	var data = $('$address').text();

	var address = data.split(' ');

	streetNumber  = address[0];

	var text = address[1] + " " + address[2];

	streetName = text;
}












//pay the merchant 

