function matchpass(){
    var firstpassword=document.register.password.value;
    var secondpassword=document.register.password2.value;
    if(firstpassword==secondpassword){
        return true;
    }
    else{
        alert("password must be same!");
        return false;
    }
}