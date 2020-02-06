/* Insert your javascript here */
const movieId = ["ACT", "AHF", "ANM", "RMC"];
const movieDay = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
const movieHours = ["3pm", "6pm", "9pm", "12pm"];
const ticketPrices = {
  'Standard Adult': {
    'Discounted Price': 15,
    'Normal Price': 20.50,
  },
  'Standard Concession': {
    'Discounted Price': 13,
    'Normal Price': 18,
  },
  'Standard Child': {
    'Discounted Price': 11,
    'Normal Price': 15.50,
  },
  'First Class Adult': {
    'Discounted Price': 25,
    'Normal Price': 30,
  },
  'First Class Concession': {
    'Discounted Price': 23,
    'Normal Price': 27.50,
  },
  'First Class Child': {
    'Discounted Price': 21,
    'Normal Price': 25,
  }
};
//----------------------------------------------------------------------------

// when page loads adds event listeners to buttons
window.onload = function startUpEvents() {
  var button = document.getElementById('now-showing').getElementsByTagName('button');
  for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("click", addDayHour);
  }

  var moviePanels = document.getElementsByClassName("movie-box");
  for (var i = 0; i < moviePanels.length; i++) {
    moviePanels[i].addEventListener("click", addMovieGenre);
    moviePanels[i].addEventListener("click", aaa);
  };

  addOption();
}
//----------------------------------------------------------------------------
function aaa(a){
  console.log(a);
  var id = a.target.offsetParent.id;
console.log(a);
  console.log(id);
  console.log(id.substr(-3, 3));
}
//----------------------------------------------------------------------------

// auto-generated select options and adds on change event to calc prices.
function addOption() {
  var select = document.getElementById('booking-section').getElementsByTagName('select');
  var option;
  for (var a = 0; a < select.length; a++) {
    select[a].addEventListener("change", calcTotalPrice);
    option = document.createElement('option');
    option.text = 'Please select';
    option.value = 0;
    select[a].add(option);
    for (var b = 1; b <= 9; b++) {
      option = document.createElement('option');
      option.text = b;
      option.value = b;
      select[a].add(option);
    }
  }
}

// changes day/ movie hours hidden input to what text is on the button
function addDayHour(e) {
  // changes day
  for (var i = 0; i < movieDay.length; i++) {
    if (e.target.innerHTML.includes(movieDay[i])) {
      document.getElementById('movie[day]').value = movieDay[i];
      document.getElementById('booking-day').innerHTML = movieDay[i] + " ";
    }
  }

  // changes movie hours
  for (var i = 0; i < movieHours.length; i++) {
    if (e.target.innerHTML.includes(movieHours[i])) {
      document.getElementById('movie[hour]').value = movieHours[i];
      document.getElementById('booking-hour').innerHTML = movieHours[i];
    }
  }

  // displays booking area
  var bookingSection = document.getElementById('booking-section');
  if (bookingSection.style.display = "none") {
    bookingSection.style.display = "grid";
  }
  // scrolls to booking area
  document.getElementById("booking-section").scrollIntoView();
}

//----------------------------------------------------------------------------


// changes hidden id field based on id of movie
function addMovieGenre(e) {
  var moviePanelID = e.currentTarget.id;
  for (var i = 0; i < movieId.length; i++) {
    if (moviePanelID.includes(movieId[i])) {
      document.getElementById('movie[id]').value = movieId[i];
    }
  }
}
//----------------------------------------------------------------------------

// changes name of movie based on movie panel clicked
function showBookingMovieName(movie) {
  // clears day and hour when another movie is clicked.
  document.getElementById('movie[day]').value = "";
  document.getElementById('movie[hour]').value = "";
  document.getElementById('booking-day').innerHTML = "";
  document.getElementById('booking-hour').innerHTML = "";

  var bookingMovieName = document.getElementsByClassName("movie-name");
  for (var i = 0; i < bookingMovieName.length; i++) {
    bookingMovieName[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "block";
}

// opens the synopsis area of movie panel clicked
function openSynopsis(movie) {
  var synopsisTabs = document.getElementsByClassName("synopsis-tabs");
  for (var i = 0; i < synopsisTabs.length; i++) {
    synopsisTabs[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "grid";
  var synopsisCurrent = document.getElementsByClassName("synopsis-tabs");
  document.getElementById(movie).scrollIntoView();
}

// changes the appearance of nav links based on the current section
window.onscroll = function() {
  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  var section = document.getElementsByTagName('main')[0].getElementsByTagName('section');

  for (var i = 0; i < section.length; i++) {
    var sectionTop = section[i].offsetTop;
    var sectionBottom = section[i].offsetTop + (section[i].offsetHeight);
    if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {

      navlinks[i].classList.add('current');
    } else {
      navlinks[i].classList.remove('current');
    }

  }
}

// calculates the total price
function calcTotalPrice() {
  var seatsSTA = document.getElementById('seats[STA]').value;
  var seatsSTP = document.getElementById('seats[STP]').value;
  var seatsSTC = document.getElementById('seats[STC]').value;
  var seatsFCA = document.getElementById('seats[FCA]').value;
  var seatsFCP = document.getElementById('seats[FCP]').value;
  var seatsFFC = document.getElementById('seats[FCC]').value;

  var seatValues = [seatsSTA, seatsSTP, seatsSTC, seatsFCA, seatsFCP, seatsFFC];
  var day = document.getElementById('movie[day]').value;
  var hour = document.getElementById('movie[hour]').value;
  var totalPrice = 0;
  var i = 0;

  if (
    day == movieDay[0] ||
    day == movieDay[1] ||
    day == movieDay[2] && hour == movieHours[3] ||
    day == movieDay[3] && hour == movieHours[3] ||
    day == movieDay[4] && hour == movieHours[3]
  ) {
    for (key in ticketPrices) {
      var price = ticketPrices[key]['Discounted Price'];
      var numticket = seatValues[i];
      totalPrice += parseFloat(price * numticket);
      i++;
    };
  } else {
    for (key in ticketPrices) {
      var price = ticketPrices[key]['Normal Price'];
      var numticket = seatValues[i];
      totalPrice += parseFloat(price * numticket);
      i++;
    };
  };

  // write result to span
  document.getElementById('total-price').innerHTML = "$" + totalPrice.toFixed(2);
}
