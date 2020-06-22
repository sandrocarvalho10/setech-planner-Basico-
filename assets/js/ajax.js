$(function () {

 // var id = $('.concluir').attr('data-id');
 //
 // console.log(id);
 var cont = $('.contador').attr('data-id');
 var i;


 for (i = 0; i < cont; i++) {
  $('#concluir' + i).click(function () {
   var id = $(this).attr('data-id');
//   alert(id);
   
//   $.ajax({
//    url: './../default/classes/TarefasCrud.php',
//    method: 'post',
//    dataType: 'JSON',
//    data: {
//       'id': id
////       'id_get' : 2
//    },
//    beforeSend: function () {
//     $("#concluir" + i).html("Enviando");
//    }
//   }).success(function (msg) {
//    window.location = 'http://localhost/rh/default/classes/TarefasCrud.php';
////    //   window.alert('foi');
//   
//
//   }).fail(function (jqXHR, textStatus, msg) {
//    alert(msg);
//   })
  })
 }

});
