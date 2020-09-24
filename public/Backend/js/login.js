$(document).ready(function(){
  $('#form-login').on('submit', function(e){
    e.preventDefault();
    if($('.btn-login').val() == 'Login'){
      $.ajax({
        url:'/login',
        method:'POST',
        dataType:'JSON',
        cache:false,
        data:{
          _token:token,
          email:email,
          password:password
        },
        sucess:function(data){
            if(data.error){
              Swal({
                title:'Login Gagal',
                text: data.error,
                type:'error'
              })
            }else if(data.sucess){
              Swal({
                title:'Login Berhasil',
                text: data.sucess,
                type:'sucess'
              }).then(function(){
                window.location.href = '/'
              })
            }
        }
      })
    }
  });

});
