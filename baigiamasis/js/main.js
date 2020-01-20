// scroll to contacts
$("#contacts").click(function() {
    $('html,body').animate({
        scrollTop: $("footer").offset().top},
        'slow');
});

// Email check funkcija (patikrina ar tinkamas email formatas)
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
  return false;
}else{
  return true;
  }
}
    var sumaTotal = 0;
$(".suma").each(function(index, value){
    sumaTotal += parseFloat($(value).text());
    console.log(parseFloat($(value).text()));
});

$('.suma-total').html(sumaTotal.toFixed(2));

//  prekiu krepselis
$('.kiekis-input').on('click', function(){
  var kiekis = $(this).parent().parent().find(".inputo-plotis").val();
  var href = $(this).parent().find(".kiekis-input").attr('href', function(index, attr){
    return attr + "&y=" + kiekis;
    });
  });

  $('.textbox').on('change', function(){
    var kiekis = $(this).val();
    var index = $(this).parent().parent().find(".inputas").val();
    var kaina = $(this).parent().parent().find(".kaina").text();
    var suma = (kiekis * kaina).toFixed(2);
    var sumaTotal = 0;
    var kiekisTotal = 0;

    $(this).parent().parent().find(".suma").html(suma);

    $(".suma").each(function(index, value){
      sumaTotal += parseFloat($(value).text());
      console.log(parseFloat($(value).text()));
    });
    $('.suma-total').html(sumaTotal.toFixed(2));

    $(".textbox").each(function(index, value){
      kiekisTotal += parseFloat($(value).val());
    });
    $('.kiekis-total').html(kiekisTotal.toFixed());

   $.ajax({
      url:'../controler/changeSessKiekis.php',
      type: "post",
      data:{"kiekis": kiekis, "index": index  },
      dataType:"html",
      success:function(){
      // console.log("Pakeitem reiksme.");
      }
   });
  });

  //registracija + validacija
  $('#register').on("click", function(e) {
  let name = $('#name').val();
  let lname = $('#lname').val();
  let password = $('#password').val();
  let passRepeat = $('#password-repeat').val();
  let email = $('#email').val();
  let address = $('#address').val();
  let city = $('#city').val();
  let zip = $('#zip').val();
  let country = $('#country').val();
  let tel = $('#tel').val();
  let check = "False";
  email = email.toLowerCase();

if (name === "") {
  $('#name').css({"border-color":"red"});
  $('#msg_name').html("<li class='text-danger mt-1'>* Iveskite varda!</li>");
  check = "True";
} else {
            $('#name').css({"border-color":"green"});
            $('#msg_name').empty();
       }

if (lname === "") {
  $('#lname').css({"border-color":"red"});
  $('#msg_lname').html("<li class='text-danger mt-1'>* Iveskite pavarde!</li>");
  check = "True";
} else {
            $('#lname').css({"border-color":"green"});
            $('#msg_lname').empty();
       }
if (address === "") {
  $('#address').css({"border-color":"red"});
  $('#msg_address').html("<li class='text-danger mt-1'>* Iveskite adresa!</li>");
  check = "True";
} else {
            $('#address').css({"border-color":"green"});
            $('#msg_address').empty();
       }

if (city === "") {
  $('#city').css({"border-color":"red"});
  $('#msg_city').html("<li class='text-danger mt-1'>* Iveskite miesta!</li>");
  check = "True";
} else {
            $('#city').css({"border-color":"green"});
            $('#msg_city').empty();
       }

if (zip === "") {
  $('#zip').css({"border-color":"red"});
  $('#msg_zip').html("<li class='text-danger mt-1'>* Iveskite pasto koda!</li>");
  check = "True";
} else {
            $('#zip').css({"border-color":"green"});
            $('#msg_zip').empty();
       }

if (country === "") {
  $('#country').css({"border-color":"red"});
  $('#msg_country').html("<li class='text-danger mt-1'>* Iveskite varda!</li>");
  check = "True";
} else {
            $('#country').css({"border-color":"green"});
            $('#msg_country').empty();
       }

if (tel === "") {
  $('#tel').css({"border-color":"red"});
  $('#msg_tel').html("<li class='text-danger mt-1'>* Iveskite telefono numeri!</li>");
  check = "True";
} else if (tel.length < 6) {
  $('#tel').css({"border-color":"red"});
  $('#msg_tel').html("<li class='text-danger mt-1'>* Ivestas tel. numeris per trumpas!</li>");
    check = "True";
} else {
            $('#tel').css({"border-color":"green"});
            $('#msg_tel').empty();
       }

if (password === "" ) {
  $('#password').css({"border-color":"red"});
  $('#msg_password').html("<li class='text-danger mt-1'>* Iveskite slaptazodi!</li>");
  check = "True";
} else if (password.length < 8) {
  $('#password').css({"border-color":"red"});
  $('#msg_password').html("<li class='text-danger mt-1'>* Slaptazodis turi buti ilgesnis nei 8 simboliai!</li>");
    check = "True";
} else if (password !== passRepeat) {
  $('#password-repeat').css({"border-color":"red"});
  $('#password').css({"border-color":"red"});
  $('#msg_password_repeat').html("<li class='text-danger mt-1'>* Slaptazodziai nesutampa!</li>");
  check = "True";
} else { $('#password-repeat').css({"border-color":"green"});
         $('#password').css({"border-color":"green"});
         $('#password-repeat').empty();
         $('#msg_password_repeat').empty();
        }

  if(IsEmail(email)==false){
      $('#email').css({"border-color":"red"});
      $('#msg_email').html("<li class='text-danger mt-1'>* Iveskite El.Pasta!</li>");
    } else {
      $('#email').css({"border-color":"green"});
      $('#msg_email').empty();
    }

  if (check === "True") {
    e.preventDefault();
  } else {
    $.ajax({
      url: "../controler/userCreate.php",
      type: "POST",
      data: {
            name: name,
            lname: lname,
            password: password,
            email: email,
            address: address,
            city: city,
            zip: zip,
            country: country,
            tel: tel
          },
    success: function() {
      // window.location='index.php';
      alert("Registracija sekminga, galite prisijungti!");
    }
  });
}
});

  //loginas + validacija
  $('#login').on('click', function() {
  let email = $('#email-login').val();
  let password = $('#password-login').val();
  let check = "False";

  if (email === "") {
    $('#email-login').css({"border-color":"red"});
    $('#msg_email_login').html("<li class='text-danger mt-1'>* Laukas tuscias!</li>");
    check = "True";
  } else if (IsEmail(email)==false){
      $('#email-login').css({"border-color":"red"});
      $('#msg_email_login').html("<li class='text-danger mt-1'>* Email formatas: example@email.com!</li>");
  } else {
      $('#email-login').css({"border-color":"green"});
      $('#msg_email_login').empty();
  }

  if (password === "" ) {
    $('#password').css({"border-color":"red"});
    $('#msg_password').html("<li class='text-danger mt-1'>* Iveskite slaptazodi!</li>");
    check = "True";
  } else if (password.length < 8) {
    $('#password').css({"border-color":"red"});
    $('#msg_password').html("<li class='text-danger mt-1'>* Slaptazodis turi buti ilgesnis nei 8 simboliai!</li>");
      check = "True";
  }

  if (check === "True") {
    e.preventDefault();
  } else {
    $.ajax({
      url: "../controler/login.php",
      type: "POST",
      data: {password: password, email: email,},
      success: function(message) {
        if (message === "True") {
          location.reload();
        } else {
          alert('Neteisingai ivestas email arba password');
          location.reload();
      }
    }
  });
}
});
