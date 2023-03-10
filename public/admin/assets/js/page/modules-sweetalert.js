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

  $(".deleteForm").click(function(e) {
    e.preventDefault();

    const dataID = $(this).val();
    swal({
      title: 'Are you sure?',
      text: `Once deleted, you will not be able to recover this imaginary!`,
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: '/users/admin/'+dataID,
          type: 'DELETE',
          data: {
            "_token": "{{ csrf_token() }}",
          },
          success: function(res){
            console.log(res)
            swal('WSsh! Your data has been deleted!', {
              icon: 'success',
            });
          },
          error: function(err){
            console.log(err)
            swal('Hhh! Can\'t delete data!', {
              icon: 'error',
            });
          }

        });
      } else {
        swal('Your data is safe!');
      }
    });
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