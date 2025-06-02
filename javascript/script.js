$(function () {
  // Inicijalizacija datepickera
  $("#dolazak, #odlazak").datepicker({
    dateFormat: "dd.mm.yy",
    minDate: 0
  });

  // Inicijalizacija popovera
  $('#popoverData').popover();

  // Validacija forme pri submitu
  $('form').on('submit', function (e) {
    e.preventDefault(); // Spriječi slanje forme

    var requiredFields = ['ime', 'prezime', 'email', 'odrasli', 'dolazak', 'odlazak'];
    var isValid = true;

    requiredFields.forEach(function (id) {
      var field = $('#' + id);
      if (!field.val().trim()) {
        field.addClass('is-invalid');
        isValid = false;
      } else {
        field.removeClass('is-invalid');
      }
    });

    if (isValid) {
      // Ovdje možeš dodati slanje forme (AJAX ili obični submit)
      // this.submit(); // ako želiš normalno slanje
      alert('Rezervacija uspješno poslana!');
    }
  });
});
