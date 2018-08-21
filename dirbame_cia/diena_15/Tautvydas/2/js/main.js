console.log("Labas");
 
$('li').hover(function () {
    var carId = $(this).val();
    $.post('ajax.php', {id: carId}, function(data){
        $('#detail').html(data);
    });
    $('#detail').toggleClass('d-none');
})