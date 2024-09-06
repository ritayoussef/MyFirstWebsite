function ageVerification()
{
    var age = document.getElementById("age").value;
    
    if (age <= 0 || age > 99)
    {
        alert ("This age is invalid, please enter a valid age!"); 
        document.getElementById("userInput").action = "index.html";
    }
    else 
    {
        document.getElementById("userInput").action = "myphp.php";
    }
}