var lol = 0
var refreshIntervalId = setInterval(function() {
  
  //lol++
  old_html = document.getElementById("word").innerHTML;
  
  document.getElementById("word").innerHTML = old_html + "YOU DIDN'T SAY THE MAGIC WORD!<br>";
  
  /*var refreshIntervalId2 = setInterval(function() {
    lol = lol + 10
    clearInterval(refreshIntervalId2);
  }, 500);*/
  
  //if(lol > 10) clearInterval(refreshIntervalId);
  

}, 500);