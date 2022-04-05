let form = document.getElementById('form');
let name = document.getElementById('name');
let email = document.getElementById('email');
let number = document.getElementById('number');
let phone = document.getElementById('phone');
let date = document.getElementById('date');
let regname=  /^[a-zA-Z0-9]+$/;
let regnumbers = /^[0-9]+$/;
let regemail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
form.addEventListener('submit', (event)=>{
    if(!validiteform())
        event.preventDefault();

})

function validiteform(){
    let erreur = true;

    if (name.value.trim() == "") {
        document.getElementById('messagename').innerHTML ="Please fill the userName";
        erreur = false;
    }else if (name.value.match(regname)){
        document.getElementById('messagename').innerHTML = "";
      }else{
        document.getElementById('messagename').innerHTML = "user name invalid ";
        erreur = false;
    } 


    if (email.value == "") {
        document.getElementById('messageemail').innerHTML = "Enter Email";
        erreur =  false;
      
    }else if (email.value.match(regemail)){
        document.getElementById('messageemail').innerHTML = "";
    } else{
        document.getElementById('messageemail').innerHTML = "email invalid ";
        erreur = false;
    } 
    
       
    
     if(number.value.trim()==""){
        document.getElementById('messagenumber').innerHTML ="Please fill the number field";
        erreur = false ;
     }else if(number.value.match(regnumbers)){
        document.getElementById('messagenumber').innerHTML ="";
       }else  {
        document.getElementById('messagenumber').innerHTML ="Enrolle number invalid";
        erreur = false ;
       }


     if(phone.value.trim()==""){
        document.getElementById('messagephone').innerHTML ="Please fill the phone field";
        erreur = false ;
    }else if(phone.value.match(regnumbers)){
        document.getElementById('messagephone').innerHTML ="";
     }
     else{
        document.getElementById('messagephone').innerHTML = "phone invalid";
        erreur = false ;
     }

     if (date.value =="") {
        document.getElementById('messagedate').innerHTML ="Please fill the date";
        erreur = false;
     }else {
        document.getElementById('messagedate').innerHTML ="";
     }

     return erreur;
}



