// Paswword validation
function test_str() { 
    var a;
            var b=document.getElementById("phoneNumber").value;
            var str = document.getElementById("password").value; 
            
            if (b.match(/[0-9]/g) && b.length == 10) 
            {
            
                if (str.match(/[a-z]/g) && str.match( 
                    /[A-Z]/g) && str.match( 
                    /[0-9]/g) && str.match( 
                        /[^a-zA-Z\d]/g) && str.length >= 8)  
                    {
                 
                alert(res)
                    }
            else 
                res = "Invalid Password"; 
                alert(res)
            }
            else
                a = "Invalid Phone Number";
                alert(a)
                
    
    
 
    
    
            
                    

} 

