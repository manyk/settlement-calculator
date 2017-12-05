jQuery(document).ready(function($){

  $('.calculate').click(function(e){

    e.preventDefault();

    var medical_expenses = 0;
    var property_damages = 0;
    var lost_earnings = 0;
    var future_medical = 0;

    var damages_multiplier = 1;

    if(Number($('#medicalExpenses').val()) >= 0){
      medical_expenses = Number($('#medicalExpenses').val());
    }

    if(Number($('#propertyDamages').val()) >= 0){
      property_damages = Number($('#propertyDamages').val());
    }

    if(Number($('#lostEarnings').val()) >= 0){
      lost_earnings = Number($('#lostEarnings').val());
    }

    if(Number($('#futureMedical').val()) >= 0){
      future_medical = Number($('#futureMedical').val());
    }

    if(Number($('#damagesMultiplier').val()) > 0){
      damages_multiplier = Number($('#damagesMultiplier').val());
    }

    var total = ( ( medical_expenses + future_medical ) * damages_multiplier ) + lost_earnings + future_medical + property_damages;
    var without_damages = medical_expenses + future_medical + lost_earnings + future_medical + property_damages;
    var just_damages = total - without_damages;

    $('#settlementEstimate').html('$' + total.toLocaleString());


    $('.calculator-form').hide('slow',function(){
      $('.calculator-results').show('fast');
    });

  });

});
