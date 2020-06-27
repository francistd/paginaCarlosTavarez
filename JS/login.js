$(document).ready(function(){

    $('#usuari').focus();
  
   $('#btnLoginn').click(function(e){
    e.preventDefault();
  
    if ($('#usuari').val()==="") {
      swal("Por Favor!", "Debes introducir un usuario!","error");
      return false;
    }
    if ($('#pwd').val()==="") {
      swal("Por Favor!", "Debes introducir una contraseña!","error");
      return false;
    }
    if ($('#pwd').val().length < 8) {
      swal("Contraseña!", " Introduzca almenos 8 caracteres!","error");
      return false;
    }
    
    datos=$('#formLogin').serialize();
    $.ajax({
      type:"POST",
      url:"Procesos/Login/login.php",
      data:datos,
      success:function(r){
          if(r==1){
            window.location="administrador";
          }else{
            swal({title: "Usuario/Contraseña incorrecta", text:"Intente nueva vez",icon: "error"});
          }
      }
    });
  
  });
  
  });