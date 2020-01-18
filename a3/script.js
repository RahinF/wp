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
}

function inputTuesday() {
  document.getElementById('movie[day]').value = movieDay[1];
}

function inputWednesday() {
  document.getElementById('movie[day]').value = movieDay[2];
}

function inputThursday() {
  document.getElementById('movie[day]').value = movieDay[3];
}

function inputFriday() {
  document.getElementById('movie[day]').value = movieDay[4];
}

function inputSaturday() {
  document.getElementById('movie[day]').value = movieDay[5];
}

function inputSunday() {
  document.getElementById('movie[day]').value = movieDay[6];
}



function input3pm() {
  document.getElementById('movie[hour]').value = movieHours[0];
}

function input6pm() {
  document.getElementById('movie[hour]').value = movieHours[1];
}

function input9pm() {
  document.getElementById('movie[hour]').value = movieHours[2];
}

function input12pm() {
  document.getElementById('movie[hour]').value = movieHours[3];
}

function inputMovieID(movieId) {
  var a = document.getElementById('moviePanelACT');
  var b = document.getElementById('moviePanelAHF');
  var c = document.getElementById('moviePanelANM');
  var d = document.getElementById('moviePanelRMC');

  if (movieId == a) {
    document.getElementById('movie[id]').value = movieId[0];
  }
  if (movieId == b) {
    document.getElementById('movie[id]').value = movieId[1];
  }
  if (movieId == c) {
    document.getElementById('movie[id]').value = movieId[2];
  }
  if (movieId == d) {
    document.getElementById('movie[id]').value = movieId[3];
  }

}

function openSynopsis(movie) {
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "block";
}


window.onscroll = function() {
  console.clear();
  console.log("window y: " + window.scrollY);
  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  //console.log(navlinks);
  var section = document.getElementsByTagName('main')[0].getElementsByTagName('section');
  //console.log(sections[0].offsetTop + ' ' + (sections[0].offsetTop + sections[0].offsetHeight));
  for (var i = 0; i < section.length; i++) {
    var sectionTop = section[i].offsetTop;
    var sectionBottom = section[i].offsetTop + section[i].offsetHeight;
    if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
      console.log(navlinks[i] + "current");
      navlinks[i].classList.add('current');
    } else {
      navlinks[i].classList.remove('current');
    }

    //console.log(sectionTop + ' ' + sectionBottom);
    //console.log(section[i].offsetTop + ' ' + (sections[i].offsetTop + sections[i].offsetHeight));
  }

}
