var clientIP= client.client_ip;
var maxclickcount = client.clickcount;
var bannedperiod = client.bannedperiod;
var preurl = client.preurl;
var firstclickdata = client.firstclickdate;
var firstclickdate = firstclickdata[0][1]-1;
var updatedVisitCount = parseInt(client.updatedVisitCount);
var jq = null;

var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
var clickdate = new Date(firstclickdata[0][0],firstclickdate,firstclickdata[0][2],firstclickdata[1][0],firstclickdata[1][1],firstclickdata[1][2]);
var currDate = new Date();
var secondDate = clickdate.setTime(clickdate.getTime() + (bannedperiod * 24 * 60 * 60 * 1000));
var endDate = new Date(secondDate);


function cbProtectProcess (event) 
{
	var clientdata = {"clientIP":clientIP,"visitcount":updatedVisitCount};
	if (clientdata.clientIP) {
		updatedVisitCount = ++clientdata.visitcount;

	} else { 
		updatedVisitCount = (updatedVisitCount)?(updatedVisitCount+1):1;

	}
	ajax_post();
	if (updatedVisitCount > maxclickcount)
	{
		event.preventDefault();


	}
}

function ajax_post()
{
	jq.ajax({
		type : "post",
	dataType : "json",
	url : preurl,
	data : {count : updatedVisitCount},
	success: function(response) {
		if(response.success) 
	{
		return response.success;
	}
		else 
	{ 
		return 0;
	}
	}
	})
}


jQuery(document).ready(function($) 
		{
			jq = jQuery.noConflict();

			$("#cbprotect").click(function(event) {
				cbProtectProcess(event);

			});

		});
