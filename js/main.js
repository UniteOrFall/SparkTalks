// Set the date we're counting down to
var countDownDate = new Date("April 9, 2019 10:00:00").getTime();
console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  //Declare the 4 element for ViewPort
  document.getElementById('days').innerHTML=days+"<span>Days</span>";
  document.getElementById('hours').innerHTML=hours+"<span>Hours</span>";
  document.getElementById('minutes').innerHTML=minutes+"<span>Minutes</span>";
  document.getElementById('seconds').innerHTML=seconds+"<span>Seconds</span>";


  // If the count down is finished, write some text
  if (distance < 0) {
    document.getElementById('days').innerHTML="0";
    document.getElementById('hours').innerHTML="0";
    document.getElementById('minutes').innerHTML="0";
    document.getElementById('seconds').innerHTML="0";
  }
}, 1000);
