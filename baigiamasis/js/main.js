// scroll to contacts
$("#contacts").click(function() {
    $('html,body').animate({
        scrollTop: $("footer").offset().top},
        'slow');
});
// scroll to about
// $("#about").click(function() {
//     $('html,body').animate({
//         scrollTop: $("#to-about").offset().top},
//         'slow');
// });
$('.kiekis-input').on('mouseover', function(){
  var kiekis = $(this).parent().parent().find(".inputo-plotis").val();
  var href = $(this).parent().find(".kiekis-input").attr('href', function(index, attr){
    return attr + "&y=" + kiekis;
  });
  // href + "&y=" + kiekis;
  // console.log("kiekis: " + kiekis);
  // console.log("href: " + href);
  });

  $('.textbox').on('change', function(){
    var kiekis = $(this).val();
    var index = $(this).parent().parent().find("#inputas").val();
    var a = 10;
    
    // console.log("kiekis: " + kiekis);
    console.log("index: " + index);
   $.ajax({
      url:'../controler/changeSessKiekis.php',
      type: "post",
      data:{"kiekis": kiekis, "index": index },
      dataType:"html",
      success:function(){
      console.log("Pakeitem reiksme.");
      }
   });
  });



// var kiekis = $(".inputo-plotis").val();
// var kiekis = $(".inputo-plotis").select().val();
// console.log("---------");
// console.log("kiekis " + kiekis);
// console.log("---------");
// $( ".inputo-plotis" ).click(function() {
//   var kiekis = $(".inputo-plotis").select().val();
//   $( ".inputo-plotis" ).change().val();
//   console.log(kiekis);
// });
