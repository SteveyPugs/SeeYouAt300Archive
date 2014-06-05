var xmlhttp;
if (window.XMLHttpRequest)
{
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else
{
	// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

function loadCheers()
{	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("Cheers").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","scripts/cheers.php",true);
	xmlhttp.send();
}

function changeDate()
{
	var todaysDate = new Date();
	var goalDate = new Date('6/1/2013 09:00:00')
	var countdown = goalDate - todaysDate;
	
	if (countdown >= 0)
	{
		var dd=Date.parse(goalDate)-Date.parse(todaysDate)
		var dday=Math.floor(dd/(60*60*1000*24)*1)
		var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
		var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
		var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
		document.getElementById('days').innerHTML = dday;
		document.getElementById('hrs').innerHTML = dhour;
		document.getElementById('mins').innerHTML = dmin;
		document.getElementById('secs').innerHTML = dsec;
	}
	else
	{
		document.getElementById('days').innerHTML = 0;
		document.getElementById('hrs').innerHTML = 0;
		document.getElementById('mins').innerHTML = 0;
		document.getElementById('secs').innerHTML = 0;
	}	
}


setInterval(function(){changeDate();loadCheers()},1000);

$(document).ready( function() {

		$(window).load(function() {
		
			 $('#Pics').orbit({
				 animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
				 animationSpeed: 800,                // how fast animtions are
				 timer: false, 			 // true or false to have the timer
				 advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
				 pauseOnHover: false, 		 // if you hover pauses the slider
				 startClockOnMouseOut: false, 	 // if clock should start on MouseOut
				 startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
				 directionalNav: true, 		 // manual advancing directional navs
				 captions: true, 			 // do you want captions?
				 captionAnimation: 'fade', 		 // fade, slideOpen, none
				 captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
				 bullets: false,			 // true or false to activate the bullet navigation
				 bulletThumbs: false,		 // thumbnails for the bullets
				 bulletThumbLocation: '',		 // location from this file where thumbs will be
				 afterSlideChange: function(){} 	 // empty function 
			});
			 
		});
		
 		$('#StoryLink').click(function() {
 			$('#CheerLink').attr("class","SiteLinks");
 			$('#StoryLink').attr("class","SiteLinksPicked");
 			$('#Cheer').fadeOut('fast', function() {
 				$('#Story').fadeIn('fast', function() {});
 			});  			
		});
		
		$('#CheerLink').click(function() {
			loadCheers();
			$('#StoryLink').attr("class","SiteLinks");
 			$('#CheerLink').attr("class","SiteLinksPicked");
 			$('#Story').fadeOut('fast', function() {
 				$('#Cheer').fadeIn('fast', function() {});
 			});  			
		});
		
	});
	
function addCheer()
{
	if(event.keyCode == 13)
	{
		var strCheer = "";
		strCheer = document.getElementById("SendCheer").value;
		if (strCheer != "")
		{
			xmlhttp.open("GET","scripts/addcheer.php?Cheer=" + strCheer,true);
			xmlhttp.send();
			document.getElementById("SendCheer").value = "";
		}
		else
		{
			alert('Please enter text!');
		}
    }

}