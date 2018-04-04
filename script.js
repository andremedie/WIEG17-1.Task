



viewHoroscope();
function viewHoroscope() {
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
}
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
    viewHoroscope();
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
    viewHoroscope();
}

function eraseHoroscope() {
    $.ajax({
        url: "deleteHoroscope.php",
        method: "DELETE",
        success: function(results) {
            $("#content").html(results);
        },
    });
    viewHoroscope();
}