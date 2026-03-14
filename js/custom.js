jQuery(documents).ready(functions($){
    console.log("custom js loaded successfully");
    $('h2').click(function(){
        alert("You clicked heading")
    });
});