//Lataa sivun
function lataa(url) {
      $("#content").fadeTo("fast", 0, function() {
            $.get( url, function( data ) {
                  $( "#content" ).html( data );
                  $("#content").fadeTo("fast",1);
            });      
      });
}

//Lähettää lomakkeen ja lataa tuloksen
function laheta() {
   //$.post("animform.php", $("#animform").serialize(), function(data) {
      //$("#ladattu_tyyli").html(data);
   //});
   var elementti ="<link rel='stylesheet' href='animform.php?"+$("#animform").serialize() + "' />"; 
   $("head").append(elementti);

}
