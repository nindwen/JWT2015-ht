function lataa(url) {
      $.get( url, function( data ) {
            $( "#content" ).html( data );
      });      
}
