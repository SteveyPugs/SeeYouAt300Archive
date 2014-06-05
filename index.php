<?php
header("Location: raceday.php");
include_once "header.php";
include_once "scripts/analyticstracking.php";
?>
<div class="SiteTitle">See You At 300</div>
<div class="SiteLinkPlate">
<a class="SiteLinks" href="/preview">Preview</a>
<a class="SiteLinks" href="/finale">Finale Trailer</a>
<a class="SiteLinksPicked" href="#" id="StoryLink">My Story</a>
<a class="SiteLinks" href="#" id="CheerLink">Cheer Me</a>

</div>
<div class="SiteContent">
	<div id="Story">
	<b><i>Update (May 12th 2013):</i></b><br />
	19 days till race day! Excited yet? I am! I am down 25 pounds. I am at 318 now!
	<hr size="1">
	<br>
	
	
	<b><i>Update (April 10th 2013):</i></b><br />As the race rapidly approaches I have been silently getting ready for the big day. I’m down almost 20 pounds. So I have some good news and bad news, don’t worry I’m still running the race! The bad news: The cost of trying to do what I want to do is going to be a bit out of what I can afford, so the initiative is pretty much not going in that direction, but that doesn’t mean I didn’t come up with an even better idea. This is where the good news comes in: See You at 300 will be a mini feature flick, produced and directed by me. The movie will be released on June 1st 2013. The preview, which you already saw, was the teaser trailer. The official trailer will be coming in early May 2013 so get excited!<br><br>Stay Tuned!<br><br>
	<hr size="1">
	<br>
	<b>The Story:</b><br />Two years ago I decided to set a goal. I was about to have major surgery and it was going to affect my life forever. In fact it was a surgery that in some ways helped me on my journey to lose up to 61 pounds. It was one of the proudest days of my life. The goal was to run/complete a race, which turned out to be the LIMA 5K (which a friend referred me to). It was a really awesome goal because for me it meant something to look forward too and something that I really wanted to finish.<br /><br />It's been 2 years since I've ran this race. I've made some side steps in life and struggled with my weight loss. In short I made myself a promise. Get to 300 and rip through it in amazing fashion. I started at 343.3 pounds around November 2012 and currently I am 327 (April 2013). I'm doing this for a lot of reasons, some I can't wait to tell you in the next few months.<br /><br /><b>The Initiative: (Maybe in 2015)</b><br />To do something unprecedented. Something that is radical! I want to leave a lasting image for all to see and for me to remember so I never forget how good it was. The day of the race I will be running with a live feed attached to me, which I am working on so stay tuned to more information in the coming months.<br /><br /><i>See you at 300!<br />Stephen Pugliese</i>
	</div>
	<div id="Cheer" style="display:none;">
		<div class="CheerMessage" id="Cheers"></div>
		<br />		
		<div class="CheerMessageAdd">
			<input type="text" class="CheerInput" placeholder="Post Your Cheer Message & Name Here - Then Hit The Return Button" onkeyup="addCheer()" id="SendCheer" />
		</div>
	</div>
</div>
<table class="SiteCountdown">
	<tr>
		<td class="ClockHeadings"><b>Days</b></td>
		<td class="ClockHeadings"><b>Hours</b></td>
		<td class="ClockHeadings"><b>Minutes</b></td>
		<td class="ClockHeadings"><b>Seconds</b></td>
	</tr>
	<tr>
		<td id="days">0</td>
		<td id="hrs">0</td>
		<td id="mins">0</td>
		<td id="secs">0</td>
	</tr>
	<tr style="height:60px;">
		<td colspan="4"><b>Till Race Day</b></td>
	</tr>
</table>
<center>
<div id="Pics">
	<img src="sitepictures/Running3.jpg" alt="HTML Captions" data-caption="#Pic1" />
	<img src="sitepictures/Running1.jpg" alt="HTML Captions" data-caption="#Pic2" />
	<img src="sitepictures/Running2.jpg" alt="HTML Captions" data-caption="#Pic3" />
</div>
<span class="orbit-caption" id="Pic1">Running during the race in 2011</span>
<span class="orbit-caption" id="Pic2">Post Race Picture #1</span>
<span class="orbit-caption" id="Pic3">Post Race Picture #2</span>
</center>

<?php
include_once "footer.php";
?>