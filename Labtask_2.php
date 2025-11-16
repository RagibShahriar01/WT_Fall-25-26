<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>

        
    </head>



<style>




form{
background-color:#2fa151ff;
padding:40px;
border-radius:10px;
width:300px;
margin:0 auto;
box-shadow:0 0 20px rgba(0,0,0,0.1)


}



#output{
    
    
    margin-top: 20px;
    text-align: center;
    font-size:16px;
    color:#2174c8ff;

}



#error{


    margin: top 10px;
    color:red;
    text-align: center;
}
    </style>



<body>


<form onsubmit= "return handleReg()">

<center>
    <h1 style= "color:black">Student Registration</h1>

</center>

<center>
    <label> Full Name</label>
    <br>

    <input type= "text" id="name"><br>
    <br>
   


    <label> Email:</label>
    <br>

    <input type= "text" id="email"><br>
    <br>





   <label> Password:</label>
   <br>

    <input type= "text" id="password"><br>
    <br>



    <label> Confirm Password:</label>
    <br>

    <input type= "text"id ="confirmpassword"><br>
    <br>



<input type= "button" value="Register" style="background-color:blue; color:white;"


</center>

<br>


<center>
    <h1 style="color:black">Course Registration</h1>

</center>


<center>
<label> Course Name:</label>
   
   <select id="courseid">

   <option value= "">Select Course</option>
   <option value="Web Tech">Web Tech</option>
   <option value="Algorithm">Algorithm</option>
</select>

<br>
<br>


   </center>

   

<center>
    
    <input type= "button" value="Add Course" style="background-color:blue; color:white;"

</center>

<br>
<br>

<center>
<input type= "text" placeholder= "Web Tech">
<button id= "Button" >Delete</button>

<br>

</center>




</form>




<div id="error"></div>
<div id ="output"></div>



<script>
function handleReg(){


    var name= document.gerElementById("name").value.trim();
    var email= document.gerElementById("email").value.trim();
    var password= document.gerElementById("password").value.trim();
    var confirmpassword= document.gerElementById("confirmpassword").value.trim();


var errorDiv= document.getElementById("error");
var outputDiv= document.getElementById("output");



errorDiv.innerHTML="";
output.innerHTML="";

if(name===""||email===""||password===""||confirmpassword===""){


    alert("Fill up All the Field");
}

else if (password!=confirmpassword){

    alert("Password did not Match");
}

else {

    alert("Registration Confirm")
}





outputDiv.innerHTML=
`
<strong>Registration Success</strong><br><br>
 Name: ${name}<br>
        ID: ${id}<br>
        Age: ${age}<br>
        Department: ${department};`

return false;

}






</script>




</body>

        </html>
        