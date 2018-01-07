<?php
/*
$i = 0;
$set[] = 0;
$case = 5;

while($i < $case){
	$set[$i] = $i;
	$i++;
}

$i = 0;

while ($i < $case){
  if($i == $set[$i]){
    echo'
    <audio controls autoplay>
      <source src="dontstopcoming.wav" type="audio/wav">
      Your browser does not support the audio element.
    </audio>
    ';
  }
$i++;

}
*/
?>
<html>
<head>
</head>
<body>

<audio id="myaudio" autoplay>
	<source src="dontstopcoming.wav" type="audio/wav">
</audio>

<p id="test"></p>
</body>

<script>
var count = 1;
document.getElementById('myaudio').addEventListener('ended', function(){
   if(count < 2){
      count++;
      this.play();
   }
   document.getElementById("test").innerHTML = count;
}, false);

</script>

<script>
var loopCount = 0;

document.getElementById('myaudio2').addEventListener('ended', function(){
    this.currentTime = 0.0;
    if(loopCount == 3){
		this.pause();
	}
	if(loopCount != 3){
		this.play();
	}
	if(this.currentTime = 0.0){
		++loopCount;
	}
}, false);
</script>

<script>
var loopCount = 0;

document.getElementById('myaudio2').addEventListener('ended', function () {
    if (this.currentTime == 0.0)
        ++loopCount;
    if (loopCount == 3)
        this.pause();
});
</script>
</html>