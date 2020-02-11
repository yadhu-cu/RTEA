function phone_number() {
    var b=document.getElementById("phoneNumber").value;
           
            
    if (b.match(/[0-9]/g) && b.length == 10) 
    {
    
       
    }
    else
      
        alert("Invalid Phone Number")

}
function test_ps() { 
    var str = document.getElementById("passWord").value; 

        if (str.match(/[a-z]/g) && str.match( 
            /[A-Z]/g) && str.match( 
            /[0-9]/g) && str.match( 
                /[^a-zA-Z\d]/g) && str.length >= 8)  
            {
         
        
            }
    else 
        
        alert("Invalid Password")

} 

function Password() {

    var str = document.getElementById("passWord").value; 
    var str1 = document.getElementById("confirmPassword").value;
    if (str!=str1) {
        alert("password is not match")
        return false;
        
    }
    return true;
    
}