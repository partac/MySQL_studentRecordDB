$(document).ready(function() {
    $("#btnAdd").click(function() {
        // TODO when the Add Record button is clicked
        var name = $("#name").val();
        var program_id = $("#program_id").val();
        var start_year = $("#start_year").val();
        var serverURL = "addStudent.php?name=" + name + "&program_id=" + program_id + "&start_year=" + start_year;
        $.get(serverURL, function(data, status){
            $("#status").text(data + " record(s), " + name + ", has been added to database.");
        });
    }); 
    $("#btnReload").click(function(){
        // TODO when the Reload button is clicked
        $.get("getAllStudents.php", function(data, status){
            $("#records").empty();

            // Loop over data/records from PHP response 
            $.each(data, function(index, record){
                $("#records").append(
                    "<li>" + record['id'] + ": " + record['name'] + ", " 
                    + record['program_id'] + ", " + record['start_year'] + "</li>"
                );
            }); 
        });
    });
});