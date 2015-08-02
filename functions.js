$(document).ready(function(){

    $("#getNameBtn").on('click', function() {
    //alert("Get Name Button Clicked!");

    $.ajax({
            type: 'POST',
            url: 'handler.php',
            data:JSON.stringify({
                taskId: 1,
                name:'Ali'
            }),
            headers: {
                'content-type': 'application/json'
            },

            success: function(response) {
                response = $.parseJSON(response);
                var result = "";
                result += response;
                document.getElementById('getNameSpan').innerHTML = result;
            },
            error: function() {
                alert("Error Ajaxing");
            }

        });

    });

    $("#submitNewName").on('click',function(){
        var name = $("#newNameInput").val();
        $ajaxvalue = $.ajax({
            type: 'POST',
            async: false,
            url: 'handler.php',
            data: JSON.stringify({
                taskId: 2,
                name: name
            }),
            headers:{
                'content-type':'application/json'
            },

            success: function(response){
                var result = "";
                result += $.parseJSON(response);
                // $ equals to jQuery
                document.getElementById('newNameSpan').innerHTML = result; //can be converted to jQuery
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
                //alert("Error ajaxing task id number 2");
            }

        });
        console.log( $ajaxvalue);



    });







});// END OF JQUERY



function testFunction(){
	return "Mohamad";
}