function validate()
{
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let forks = document.getElementById("fork").value;
    let spoons = document.getElementById("spoon").value;
    let knives = document.getElementById("knife").value;
    let free = document.getElementById("free");
    let threeDay = document.getElementById("3Day");
    let overnight = document.getElementById("overnight");
    
    if(username.length == 0|| password.length == 0 || forks.length == 0 || forks < 0 || isNaN(forks) || spoons.length == 0 || spoons < 0 || isNaN(spoons) || knives.length == 0 || isNaN(knives) || knives < 0|| (document.getElementById("free").checked == false && document.getElementById("3Day").checked == false && document.getElementById("overnight").checked == false))
        {
            alert("Please make sure all fields are filled out and valid numbers entered.")
            return false;
        }
    if(username.search("@") == -1)
        {
            alert("Please enter a valid email address.");
            return false;
        }
    return true;
}