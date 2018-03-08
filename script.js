
      $.ajax({
        url: "viewHoroscope.php",
        method: "GET",
        data : {
            personnummer: $("#Input").val()
        },
        success: function(results) {
            $("#content").html(results);
        },
    });

function saveHoroscope() {
    $.ajax({
        url: "addHoroscope.php",
        method: "POST",
        data : {
            personnummer: $("#Input").val()
        },
        success: function(results) {
            $("#content").html(results);
        },
    });

}

function updateHoroscope() {
    $.ajax({
        url: "updateHoroscope.php",
        method: "PUT",
        data : {
            personnummer: $("#Input").val()
        },
        success: function(results) {
            $("#content").html(results);
        },
    });
}

function eraseHoroscope() {
  console.log("test2");  
}