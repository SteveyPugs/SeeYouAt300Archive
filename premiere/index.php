<?php
include_once "../header.php";
include_once "../scripts/analyticstracking.php";
?>
<div class="SiteTitle"><a style="color:white;text-decoration:none;" href="/">See You At 300</a></div>
<br><br>
<div class="SiteContent">
	<video id="" class="video-js vjs-default-skin" autoplay controls preload="auto" width="750" height="390" poster="" data-setup="{}">
		<source src="See You At 300 Movie.mp4" type='video/mp4'>
	</video>
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
<?php
include_once "../footer.php";
?>