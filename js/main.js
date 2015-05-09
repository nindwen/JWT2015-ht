function lataa(url) {
      $("#content").fadeTo("fast", 0, function() {
            $.get( url, function( data ) {
                  $( "#content" ).html( data );
                  $("#content").fadeTo("fast",1);
            });      
      });
}
