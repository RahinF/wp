/* Insert your javascript here */
const movieId = ["ACT", "AHF", "ANM", "RMC"];
const movieDay = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
const movieHours = ["3pm", "6pm", "9pm", "12pm"];
const ticketSTA = [15, 20.50];
const ticketSTP = [13, 18];
const ticketSTC = [11, 15.50];
const ticketFCA = [25, 30];
const ticketFCP = [23, 27.50];
const ticketFCC = [21, 25];



function inputMonday() {
  document.getElementById('movie[day]').value = movieDay[0];
  document.getElementById('booking-day').innerHTML = movieDay[0];
}

function inputTuesday() {
  document.getElementById('movie[day]').value = movieDay[1];
  document.getElementById('booking-day').innerHTML = movieDay[1];
}

function inputWednesday() {
  document.getElementById('movie[day]').value = movieDay[2];
  document.getElementById('booking-day').innerHTML = movieDay[2];
}

function inputThursday() {
  document.getElementById('movie[day]').value = movieDay[3];
  document.getElementById('booking-day').innerHTML = movieDay[3];
}

function inputFriday() {
  document.getElementById('movie[day]').value = movieDay[4];
  document.getElementById('booking-day').innerHTML = movieDay[4];
}

function inputSaturday() {
  document.getElementById('movie[day]').value = movieDay[5];
  document.getElementById('booking-day').innerHTML = movieDay[5];
}

function inputSunday() {
  document.getElementById('movie[day]').value = movieDay[6];
  document.getElementById('booking-day').innerHTML = movieDay[6];
}



function input3pm() {
  document.getElementById('movie[hour]').value = movieHours[0];
  document.getElementById('booking-hour').innerHTML = movieHours[0];
}

function input6pm() {
  document.getElementById('movie[hour]').value = movieHours[1];
  document.getElementById('booking-hour').innerHTML = movieHours[1];
}

function input9pm() {
  document.getElementById('movie[hour]').value = movieHours[2];
  document.getElementById('booking-hour').innerHTML = movieHours[2];
}

function input12pm() {
  document.getElementById('movie[hour]').value = movieHours[3];
  document.getElementById('booking-hour').innerHTML = movieHours[3];
}




function inputGenreACT() {
  document.getElementById('movie[id]').value = movieId[0];
}

function inputGenreAHF() {
  document.getElementById('movie[id]').value = movieId[1];
}

function inputGenreANM() {
  document.getElementById('movie[id]').value = movieId[2];
}

function inputGenreRMC() {
  document.getElementById('movie[id]').value = movieId[3];
}

function openBooking(movie) {
  // clears day and hour when another movie is clicked.
  document.getElementById('movie[day]').value = "";
  document.getElementById('movie[hour]').value = "";
  document.getElementById('booking-day').innerHTML = "";
  document.getElementById('booking-hour').innerHTML = "";

  var bookingSection = document.getElementById('booking-section');
  console.log(bookingSection);
  if (bookingSection.style.display = "none") {
    bookingSection.style.display = "block";
  }
  var tabcontent = document.getElementsByClassName("movie-name");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "block";
}


function openSynopsis(movie) {
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "block";
}

// changes the appearance of nav links based on the current section
window.onscroll = function() {

  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');

  var section = document.getElementsByTagName('main')[0].getElementsByTagName('section');

  for (var i = 0; i < section.length; i++) {
    var sectionTop = section[i].offsetTop;
    var sectionBottom = section[i].offsetTop + section[i].offsetHeight;
    if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {

      navlinks[i].classList.add('current');
    } else {
      navlinks[i].classList.remove('current');
    }

  }
}

function calcTotalPrice() {
  var seatsSTA = document.getElementById('seats[STA]').value;
  var seatsSTP = document.getElementById('seats[STP]').value;
  var seatsSTC = document.getElementById('seats[STC]').value;
  var seatsFCA = document.getElementById('seats[FCA]').value;
  var seatsFCP = document.getElementById('seats[FCP]').value;
  var seatsFFC = document.getElementById('seats[FCC]').value;

  var day = document.getElementById('movie[day]').value;
  var hour = document.getElementById('movie[hour]').value;

  var i = (
    day == movieDay[0] ||
    day == movieDay[1] ||
    day == movieDay[2] && hour == movieHours[3] ||
    day == movieDay[3] && hour == movieHours[3] ||
    day == movieDay[4] && hour == movieHours[3]

  ) ? i = 0:   i = 1;

  var p1 = ticketSTA[i] * seatsSTA;
  var p2 = ticketSTP[i] * seatsSTP;
  var p3 = ticketSTC[i] * seatsSTC;
  var p4 = ticketFCA[i] * seatsFCA;
  var p5 = ticketFCP[i] * seatsFCP;
  var p6 = ticketFCC[i] * seatsFFC;
  var tprice = p1 + p2 + p3 + p4 + p5 + p6;

  // write result to span
  document.getElementById('total-price').innerHTML = "$"+tprice.toFixed(2);
}
