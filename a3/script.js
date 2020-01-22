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
//----------------------------------------------------------------------------


window.onload = function test() {
  var button = document.getElementById('now-showing').getElementsByTagName('button');
  for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("click", addDayHour);
  }

  var moviePanels = document.getElementsByClassName("movie-box");

  for (var i = 0; i < moviePanels.length; i++) {
    moviePanels[i].addEventListener("click", addMovieGenre);
  };
}

// changes day/ movie hours hidden input to what text is on the button
function addDayHour(e) {
  // changes day
  for (var i = 0; i < movieDay.length; i++) {
    if (e.target.innerHTML.includes(movieDay[i])) {
      document.getElementById('movie[day]').value = movieDay[i];
      document.getElementById('booking-day').innerHTML = movieDay[i];
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


function openBooking(movie) {
  // clears day and hour when another movie is clicked.
  document.getElementById('movie[day]').value = "";
  document.getElementById('movie[hour]').value = "";
  document.getElementById('booking-day').innerHTML = "";
  document.getElementById('booking-hour').innerHTML = "";

  var tabcontent = document.getElementsByClassName("movie-name");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(movie).style.display = "inline";
}


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

  var day = document.getElementById('movie[day]').value;
  var hour = document.getElementById('movie[hour]').value;

  var i = (
    day == movieDay[0] ||
    day == movieDay[1] ||
    day == movieDay[2] && hour == movieHours[3] ||
    day == movieDay[3] && hour == movieHours[3] ||
    day == movieDay[4] && hour == movieHours[3]

  ) ? i = 0 : i = 1;

  var p1 = ticketSTA[i] * seatsSTA;
  var p2 = ticketSTP[i] * seatsSTP;
  var p3 = ticketSTC[i] * seatsSTC;
  var p4 = ticketFCA[i] * seatsFCA;
  var p5 = ticketFCP[i] * seatsFCP;
  var p6 = ticketFCC[i] * seatsFFC;
  var tprice = p1 + p2 + p3 + p4 + p5 + p6;

  // write result to span
  document.getElementById('total-price').innerHTML = "$" + tprice.toFixed(2);
}

///////////////////////////////////////////////////////////////////////////////

// const ticketSTA = [15, 20.50];
// const ticketSTP = [13, 18];
// const ticketSTC = [11, 15.50];
// const ticketFCA = [25, 30];
// const ticketFCP = [23, 27.50];
// const ticketFCC = [21, 25];

const ticketPrices = {
  standardAdult: {
    discountedPrice: "15",
    normalPrice: "20.50",
  },
  standardConcession: {
    discountedPrice: "13",
    normalPrice: "18",
  },
  standardChild: {
    discountedPrice: "11",
    normalPrice: "15.50",
  },
  firstClassAdult: {
    discountedPrice: "25",
    normalPrice: "30",
  },
  firstClassConcession: {
    discountedPrice: "23",
    normalPrice: "27.50",
  },
  firstClassChild: {
    discountedPrice: "21",
    normalPrice: "25",
  }
};



function calcTotalPrice2() {
  var seatsSTA = document.getElementById('seats[STA]').value;
  var seatsSTP = document.getElementById('seats[STP]').value;
  var seatsSTC = document.getElementById('seats[STC]').value;
  var seatsFCA = document.getElementById('seats[FCA]').value;
  var seatsFCP = document.getElementById('seats[FCP]').value;
  var seatsFFC = document.getElementById('seats[FCC]').value;

  var a = [seatsSTA, seatsSTP, seatsSTC, seatsFCA, seatsFCP, seatsFFC];
  console.log(a[0]);



  var day = document.getElementById('movie[day]').value;
  var hour = document.getElementById('movie[hour]').value;

  if (
    day == movieDay[0] ||
    day == movieDay[1] ||
    day == movieDay[2] && hour == movieHours[3] ||
    day == movieDay[3] && hour == movieHours[3] ||
    day == movieDay[4] && hour == movieHours[3]

  ) {
    for (key in ticketPrices) {
    //  console.log("price" + ticketPrices[key].discountedPrice);
      var price = ticketPrices[key].discountedPrice;
      console.log(price);
      for (var i = 0; i < a.length; i++) {
        var numticket = a[i];
        console.log("num"+numticket);

      };
      var totalPrice = price * numticket;
      console.log("price"+price);
      console.log(totalPrice);
    };
  } else {
    for (key in ticketPrices) {
    //  console.log("price" + ticketPrices[key].normalPrice);
      var price = ticketPrices[key].normalPrice;
      for (var i = 0; i < a.length; i++) {
        var numticket = a[i];
    //    console.log(numticket);
      };
      var totalPrice = price * numticket;

    };
  };

  // write result to span
  document.getElementById('total-price').innerHTML = "$" + totalPrice.toFixed(2);
}
