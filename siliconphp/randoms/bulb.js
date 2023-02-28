
function changeBulbState() {
    //alert(document.getElementById('bulb'));
    if(document.getElementById('bulb').src=="https://media.geeksforgeeks.org/wp-content/uploads/OFFbulb.jpg")
        document.getElementById('bulb').src="https://media.geeksforgeeks.org/wp-content/uploads/ONbulb.jpg";
    else document.getElementById('bulb').src="https://media.geeksforgeeks.org/wp-content/uploads/OFFbulb.jpg";
}