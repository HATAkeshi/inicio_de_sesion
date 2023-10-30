$('#formRegistro').submit(function(e){
    e.preventDefault();
    var email =$.trim(("#exampleInputEmail1").val());
    var password =$.trim(("#inputPassword5").val());
    alert(email);
});