(function($) {
    console.log('Alert.js loaded'); // Debug log

    showSwal = function(type) {
      'use strict';
      if (type === 'warning-message-and-cancel') {
        swal({
          title: 'Apakah anda yakin?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          buttons: {
            cancel: {
              text: "Cancel",
              value: null,
              visible: true,
              className: "btn btn-danger",
              closeModal: true,
            },
            confirm: {
              text: "OK",
              value: true,
              visible: true,
              className: "btn btn-primary",
              closeModal: true
            }
          }
        }).then((willLogout) => {
          if (willLogout) {
            console.log('Logging out...'); // Debug log
            document.getElementById('logout-form').submit(); // Mengirim formulir
          }
        });
      }
      // ... kode lainnya tetap sama
    }

  })(jQuery);
