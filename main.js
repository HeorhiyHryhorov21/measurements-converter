$(document).ready(function () {

    $('#form-conv').submit(function(event) {
        event.preventDefault();
        var from = $('select[name="from"]').val();
        var to = $('select[name="to"]').val();
        var amount = $('input[type="number"]').val();

        $.post( 'includes/exrate.php', { from: from, to: to, amount:amount }, function(data,status){
            $('h3#result').text(data+' '+to);
        });

    });

    $('.unit-form').submit(function(event) {
        event.preventDefault();
        var from = $('select[name="from"]').val();
        var to = $('select[name="to"]').val();
        var amount = $('input[type="number"]').val();

        $.post( 'includes/unit_calc.php' , { from: from, to: to, amount:amount }, function(data,status){
            $('h3#result').text(data+' '+to);
        });
    });
});