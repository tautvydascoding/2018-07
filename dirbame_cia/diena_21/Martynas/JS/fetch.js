// =-=-=--=-=-=-= AJAX LOAD =-=-=-=-=-=-=
console.log("labas");

$(document).ready(function () {

  var limit = 3;
  var start = 0;
  var action = 'inactive';

  function load_country_data(limit, start) {
    $.ajax({
      url: "../fetch.php",
      method: "POST",
      data: {
        limit: limit,
        start: start
      },
      cache: false,
      success: function (data) {
        $('#load_data').append(data);
        if (data == '') {
          $('#load_data_msg').html("<button type='button' class='btn btn-info'>Aciu kad ziurejote</button>");
          action = 'active';
        } else {
          $('#load_data_msg').html("<button type='button' class='btn btn-primary'>Prasome palaukti....</button>");
          action = "inactive";
        }
      }
    });
  }

  if (action == 'inactive') {
    action = 'active';
    load_country_data(limit, start);
  }
  $(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
      action = 'active';
      start = start + limit;
      setTimeout(function () {
        load_country_data(limit, start);
      }, 1000);
    }
  });

});