window.onload = function(){
function validar () {
var email, password, expresion;
email = document.getElementById("email").value;
password = document.getElementById("password").value;

expresion = /\w+@\w+\.+[a-z]/;
if (email === "") {
  alert ("el campo email esta vacio");
  return false;
}
else if (password === "") {
  alert ("El campo password se encuentra vacio");
  return false;
}
  else if (!expresion.test(email))
   {
    alert ("El correo es invalido");
    return false;
     }
 else if (password.length<8){
   alert ("La contraseña debe tener al menos 8 caracteres");
   return false;
 }
}

}
