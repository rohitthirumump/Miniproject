function validate()
{
    var mail = document.getElementById('mail');
    if(mailValidate(mail)){
        var ur=document.getElementById('youare');
        if(youare(ur)){
            // alert("Successfully submitted");
        }
    }
}

function mailValidate(mail){
    var proper = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (mail.value.match(proper))
    {
        return true;
    }
    alert("Enter a valid email address");
    return false; 
}

// owner/customer
function youare(ur)
{
    if(ur.value=="Default")
    {
        alert("Plz select if you are owner/customer");
    }
    else
    {
        return true;
    }
}