function convertType(){
  var choice = prompt("Enter '1' for F to C, Enter '2' for C to F", "1 or 2");
    if (choice == 1) {
      alert("you entered 1 for F to C");

    } else if (choice == 2) {
      alert("you entered 2 for C to F")
    } else{
      alert("you did not enter 1 or 2, please try again.")
      Temperature();
    }
}
function converttoF(){
  ctemp = prompt("Enter the temperature in Celsius you want to convert to Fahrenheit", "0");
  if (!isNan(ctemp)) {
      alert("The value you entered is not a number, please try again.")
      fucntion converttoF();
  }
  else {
    var ftemp = (ctemp*1.8) + 32;
    alert("Farenheit: " + ftemp);
  }
}
function converttoC(){


}
