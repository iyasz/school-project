"use strict";

$("#swal-1").click(function() {
	swal('Hello');
});

$("#swal-2").click(function() {
	swal('Good Job', 'You clicked the button!', 'success');
});

$("#swal-3").click(function() {
	swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function() {
	swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function() {
	swal('Good Job', 'You clicked the button!', 'error');
});

function getDeleteForm(id, route){
  // e.preventDefault();

    // const dataID = $(this).val();
    const dataID = id;
    swal({
      title: 'Are you sure?',
      text: `Are you sure you want to delete this data?`,
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          url: route+dataID,
          type: 'DELETE',
          success: function(res){
            swal('WSsh! Your data has been deleted!', {
              icon: 'success',
            })
          },
          error: function(err){
            swal('Hhh! Can\'t delete data!', {
              icon: 'error',
            });
          }
        });
        
        setTimeout(() => {
          location.reload();
        }, 1700);   

      }
    });
  };

$(".deleteForm").click(function() {
    getDeleteForm($(this).val(), $(this).attr('route'))
});

 


  

$("#swal-7").click(function() {
  swal({
    title: 'What is your name?',
    content: {
    element: 'input',
    attributes: {
      placeholder: 'Type your name',
      type: 'text',
    },
    },
  }).then((data) => {
    swal('Hello, ' + data + '!');
  });
});

$("#swal-8").click(function() {
  swal('This modal will disappear soon!', {
    buttons: false,
    timer: 3000,
  });
});