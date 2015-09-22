<!DOCTYPE html>
<html>
<head>
	<?php include $_SERVER[DOCUMENT_ROOT].'/html/head.php';?>
	<meta charset="ISO-8859-1">
	<title>Da-Jin</title>
</head>
<style>
</style>
<body>
    <script>
    function expand(elmnt){
        var card = elmnt.parentElement;
        var clone = card.cloneNode(true);
        var offsets = card.getBoundingClientRect();
        
        document.body.appendChild(clone);
        clone.style.position = "absolute";
        clone.style.top = (offsets.top+ + window.pageYOffset - clone.ownerDocument.documentElement.clientTop-clone.style.paddingTop)+"px";
        clone.style.left = (offsets.left-clone.style.paddingLeft)+"px";
        setTimeout(
            function(){
                clone.style.left="0px";
                clone.classList.add("expand");
            },1);
    }
    </script>
    
	<div id = "top-level-div">
	<div class = "me">
<div id="paddingBlock">
	<div class="nav">
  		<div class = "tab" id = "current-tab"> <a href="/html/index.php">PERSONAL</a></div>
  		<div class = "tab"> <a href="/html/portfolio.php">PORTFOLIO</a></div> 
	</div>
	<hr class = "scene_element scene_element--lefttab">
</div>	
		<div class = "center">
			<h1>dj chu</h1>
		</div>
	</div>
	
	<div id = "body-background">
	<div class = "body-card-buffer">
	<div class = "carddiv">
		<h3>HELLO</h3>
		<h4>my name is Da-Jin.</h4>
		<p>My real name is 朱大靖, which is pronounced zhu da jing, hence my official english name. 
		<!--My rapper name is dj chu, and my indian name is diraj.--> I was born in Winchester, but my mom is from Malaysia, and my dad is from Taiwan. 
		They're both native chinese speakers, but have been permanent residents for over a decade, and got their American citizenships a few years ago.</p>
		<p>Currently, I am a junior at Mass Academy of Math and Science, and it's a forty minute drive every morning to get from Bedford to Worcester.
		Because we moved here from Waltham when I was three, I can't remember anything outside of Bedford, so 
		I've always known the same 180 kids, and the switch to Mass Academy was pretty significant.
		Luckily, it appears to be the right decision so far. I'm not falling asleep in class anymore, and we do cool stuff like build websites.</p>
	</div>
	<div class = "carddiv">
        <img class = "icon" src="/images/bhsbuilding.jpg"/>
        <h3>Bedford High School</h3>
		<h4>My sending school</h4>
        <div class = "card-text">

		<p>BHS is a small public high school with around 200 people per grade. 
		Students mostly come from the town of Bedford, but some also come from Hanscom Air Force Base or from Boston through the METCO system.
		Bedford is well-known for its social studies program, and has done very well on history fair in the past.</p>
		<a href="http://bedford.k12.ma.us/home/bedford-high-school.html">BHS website</a>
		<br>
        </div>
        <a onclick="expand(this)">Read More</a>
	</div>
	<div class = "carddiv">
		<h3>Log Frog</h3>
		<h4>A game I published on Google Play</h4>
		<p>Log Frog began spring of 2015 at <a href="https://codeday.org/boston">CodeDay</a>, a 24-hour coding marathon for students.
		I continued to work on it over the summer before junior year, and published it that August.</p>
		<pre>Log frog is a simple abstract puzzle game.
Connect, rotate, and leap-frog logs to get to the green circle.
Moving a log next to another log allows you to move any connected log.
Includes 40 unique levels that increase in challenge; many will leave you stumped!</pre>
       	<a href="https://play.google.com/store/apps/details?id=com.gmail.dajinchu.logfrog">
  			<img alt="Get it on Google Play"
       			src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
		</a>
	</div>
	<div class = "carddiv">
		<h3>Destination Imagination</h3>
		<h4>My life, grades 3-9</h4>
		<p><a href = "http://www.destinationimagination.org/">Destination Imagination</a> taught me, to name a few, teamwork, STEM principles, creativity, project management, and critical thinking by solving and presenting solutions to an open-ended challenge. 
		Solutions included presenting a story and building a small structure to hold weight. 
		My team won the regional and state level tournaments and represented Massachusetts at Global Finals seven times, placing top ten six times, including first and third place. 
		It has changed me tremendously, and I would not be who I am today, had I not signed up in third grade.</p>
		<img src = "/images/dilogo.png" />
		<img src = "/images/structure.jpg" height = "300px"/>
	</div>
	</div>
	</div>
	
	</div>
</body>
</html>