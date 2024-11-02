(function($) {
    console.log('Alert.js loaded'); // Debug log

    showSwal = function(type) {
      'use strict';
      if (type === 'warning-message-and-cancel') {
        swal({
          title: 'Apakah anda yakin ingin keluar?',
          text: "Anda tidak akan bisa mengembalikannya!",
          icon: 'warning',
          buttons: {
            cancel: {
              text: "Batal",
              value: null,
              visible: true,
            //   className: "btn btn-outline-primary btn-cancel",
              closeModal: true,
            },
            confirm: {
              text: "Keluar",
              value: true,
              visible: true,
            //   className: "btn btn-danger btn-confirm",
              closeModal: true
            }
          }
        }).then((willLogout) => {
          if (willLogout) {
            document.getElementById('logout-form').submit(); // Mengirim formulir
          }
        });
      }
      // ... kode lainnya tetap sama
    }

  })(jQuery);
