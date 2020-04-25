

$(document).ready(function() {

	function startTime() {
        var today = new Date();
        var d = today.getDate();
        var mn = parseInt(today.getMonth())+1;
        var a = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds(); 
        d = checkTime(d);
        mn = checkTime(mn);
        h = checkTime(h);
        m = checkTime(m);
        document.getElementById('hour').innerHTML =
        h + ":" + m; 
        document.getElementById('date').innerHTML =
        d + "/" +  mn + "/" + a; 
    }  
 
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    
    $( "#actualizar" ).click(function() {
        event.preventDefault();
        startTime();
    });

    if ( $( ".modulo-fechayhora" ).length ) {
 
        startTime();

    }
    
});
