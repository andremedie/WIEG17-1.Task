function viewHoroscope() {
      $.ajax({
        url: "viewHoroscope.php",
        method: "GET",	
        success: function(result) {
			if(result == ""){ 
				$("#content").html("Välkommen 🐶");
				document.getElementById("save").style.display = "inline";
				document.getElementById("update").style.display = "none";
				document.getElementById("delete").style.display = "none";       				
			}
			else{
				$("#content").html(result);
				document.getElementById("save").style.display = "none";
				document.getElementById("update").style.display = "inline";
				document.getElementById("delete").style.display = "inline";       
			}
		},		
    });
}
function saveHoroscope() {
    $.ajax({
        url: "addHoroscope.php",
        method: "POST",
        data : {
            personnummer: $("#Input").val()
        },
    });
    viewHoroscope();
}

function updateHoroscope() {
    $.ajax({
        url: "updateHoroscope.php",
        method: "PUT",
        data : {
            personnummer: $("#Input").val()
        },
    });
    viewHoroscope();
}

function eraseHoroscope() {
    $.ajax({
        url: "deleteHoroscope.php",
        method: "DELETE",
    });
    viewHoroscope();
}