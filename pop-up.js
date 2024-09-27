// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
var counter = 0;
    
function showModal() {
   
        setInterval(function(){
            

            if(counter < 1 ){
                modal.style.display = "block";
                counter++;
            }else{
                modal.style.display = "none";
            }
        }, 3500);
}
