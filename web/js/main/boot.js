var cookieOptions = {
    path:basePageEleve,
    expires: 365,
    secure:false
}

$(document).ready(function(){
   $(".dropdown-button").dropdown();
   $(".button-collapse").sideNav();
   Materialize.updateTextFields();
   var datePickerFr = {
        selectMonths: true,
        selectYears: 15,
        labelMonthNext: 'Mois suivant',
        labelMonthPrev: 'Mois précèdent',
        labelMonthSelect: 'Sélectionnez un mois',
        labelYearSelect: 'Sélectionnez une année',
        monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
        monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
        weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
        weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
        weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
        today: 'Aujourd\'hui',
        clear: '',
        close: 'Fermer',
        format: 'dd/mm/yyyy'
  };
   $('input[type=date]').pickadate(datePickerFr);
   getMessages();
});

function getMessages(){
    $.ajax({
       url : basePageEleve+'Ajax/Messages/top',
       type : 'GET',
       dataType : 'JSON',
       success : function(data){
           console.log(data);
           $('<span class="new badge blue" data-badge-caption="">'+data.data+'</span>').appendTo(".msgLink");
       }
    });
}