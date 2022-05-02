function validateForm()
{
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var category = document.getElementById("category").value;
   
    
    if(!fullname)
    {
        alert('You are required to enter your name before submiting');
        return false;
    }
    
    if(!email)
    {
        alert('You are required to enter your email before submiting');
        return false;
    }
    
    if(!phone)
    {
        alert('You are required to enter your phone before submiting');
        return false;
    }
    if(!category)
    {
        alert('You are required to enter your category before submiting');
        return false;
    }
}