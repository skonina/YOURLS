// main.js
var client = new ZeroClipboard( document.getElementById("zclip"), {
  moviePath: "js/ZeroClipboard.swf"
} );

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}


function changeText(str){
    document.getElementById("zclip").innerHTML = str;
}

client.on( "load", function(client) {
  // alert( "movie is loaded" );

  client.on( "complete", function(client, args) {
    changeText('Copied!');
  } );
} );