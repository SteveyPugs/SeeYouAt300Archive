<?php
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
	<b>The Story:</b><br />Two years ago I decided to set a goal. I was about to have major surgery and it was going to affect my life forever. In fact it was a surgery that in some ways helped me on my journey to lose up to 61 pounds. It was one of the proudest days of my life. The goal was to run/complete a race, which turned out to be the LIMA 5K (which a friend referred me to). It was a really awesome goal because for me it meant something to look forward too and something that I really wanted to finish. Now it's time to run the race. I started at 343.3 pounds around November 2012 and I am around 314 right before raceday.<br /><br /><i>See you at 300!<br />Stephen Pugliese</i>
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
		<td class="ClockHeadings">Today is Raceday!</td>
	</tr>
	<tr>
		<td class="ClockHeadings"><a class="SiteCountdown" href="premiere">Watch See You At 300</a></td>
	</tr>
</table>

<?php
include_once "footer.php";
?>