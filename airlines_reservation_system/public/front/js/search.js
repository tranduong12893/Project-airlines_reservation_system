
// alias for document.getElementById()
function $(obj) {
    return document.getElementById(obj);
}

//function to enable returnDate and returnTime
function enableReturn(){
    var returnJourneyOption = $("returnJourney");
    var returnDate = $("returnDate");
    if(returnJourneyOption.checked){
        returnDate.disabled = false;
        returnDate.required = true;
    }
}

//function to disable returnDate and returnTime and change the background color and border color back to normal
function disableReturn(){
    var oneWayJourneyOption = $("oneWayJourney");
    var returnDate = $("returnDate");
    if(oneWayJourneyOption.checked){
        returnDate.disabled = true;
        returnDate.required = false;
        returnDate.style.backgroundColor = "";
        returnDate.style.border = "";
    }
}
