document.getElementById("search").addEventListener("click", function() {
    var card1 = document.getElementById("remove1");
    var card2 = document.getElementById("remove2");
    var card3 = document.getElementById("remove3");
    if(document.getElementById("form1").value !== null){
      card1.style.display="none";
      card2.style.display="none";
      card3.style.display="none";
        //remove1.style.display = "none";
        // remove2.style.display = "none";
        // remove3.style.display = "none";
    }
});

document.searchTrips = function() {
    alert("Entered function!");

}