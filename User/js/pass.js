// Paswword validation
function test_str() { 
    var a;
            var b=document.getElementById("pno").value;
            
            if (b.match(/[0-9]/g) && b.length == 10) 
            {
            
                a = "valid Phone Number";
                alert(a)
                
            }
            else
                a = "Invalid Phone Number";
                alert(a)
                
    var res; 
    var str = document.getElementById("pwd").value; 
 
    if (str.match(/[a-z]/g) && str.match( 
            /[A-Z]/g) && str.match( 
            /[0-9]/g) && str.match( 
                /[^a-zA-Z\d]/g) && str.length >= 8)  
            {
        res="Valid Password";
        alert(res)
            }
    else 
        res = "Invalid Password"; 
        alert(res)
    
            
                    

} 

