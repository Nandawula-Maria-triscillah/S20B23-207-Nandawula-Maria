<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <title>User dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledash.css">
      <link rel="stylesheet" href="index.css">
        <script src="script.js"></script>

  </head>
  <body>
    <div>
      <main>


    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>

      <label class="logo">IEEE Conference</label>
      <ul>

        <li><a href="registration.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
      </ul>
    </nav>
</div>
<section>


  <div class="content">
    <div class="images">
      <img src="w.jpg">
      <img src="w1.jpg">
      <img src="w3.jpg">
      <img src="4.jpg">

    </div>
</div>


<div class="cont">
  <div class="contain">
    <h1 > Register Before The day </h1>
    <p id="demo"></p>
      </div>
  <p>The Institute of Electrical and Electronics Engineers is a professional association for
  electronic engineering and electrical engineering with its corporate office in New York City and its operations center in Piscataway, New Jersey.</p>
  <p>
  IEEE is the world’s largest technical professional organization dedicated to advancing technology for the benefit of humanity</p>
  <div class="footer">

  <div class="list">
    <ul>
      <li>Moderators</li>
    <li>Nakato Maria</li>
        <li>Software Engineer</li>
          <li>IEEE Ambassdor</li>
            <li>Uganda Christian University</li>
    </ul>
  </div>

    <div class="list">
      <ul>
        <li>Connect with IEEE</li>
      <li><a href="https://ieee-collabratec.ieee.org/?utm_source=dhtml_footer&utm_medium=hp&utm_campaign=collabratec">IEEE-Collabrate</a></li>
              <li><a href="https://ieee.taleo.net/careersection/2/jobsearch.ftl?utm_source=mf&utm_campaign=taleo-jobs&utm_medium=footer&utm_term=taleo-jobs%20at%20ieee">Careers at IEEE</a></li
                      <li><a href="https://iln.ieee.org/public/TrainingCatalog.aspx">IEEE Learning network </a></li
                              <li><a href="https://www.ieee.org/about/">More About IEEE</a></li
      </ul>
    </div>
    <div class="list">
      <ul>
                  <li>Location</li>
        <li>IEEE has a global presence.</li>
      <li> with seven offices internationally</li>


      </ul>
    </div>
  </div>

</div>

</section>
      </main>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 8, 2021 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="demo"
document.getElementById("demo").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";

// If the count down is finished, write some text
if (distance < 0) {
clearInterval(x);
document.getElementById("demo").innerHTML = "EXPIRED";
}
}, 1000);
var indexValue = 0;
function slideShow(){
  setTimeout(slideShow, 3000);
  var x;
  const img = document.querySelectorAll("img");
  for(x = 0; x < img.length; x++){
    img[x].style.display = "none";
  }
  indexValue++;
  if(indexValue > img.length){indexValue = 1}
  img[indexValue -1].style.display = "block";
}
slideShow();
</script>
  </body>
</html>
