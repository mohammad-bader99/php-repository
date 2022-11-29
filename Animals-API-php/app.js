$(function () {
   
   $('.card-wrapper').click(function () {
    // -> div.card-wrapper -> [div.card] -> div.card -> form -> trigger
    $(this).children('form').trigger('submit');
});
});