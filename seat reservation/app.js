$(function () {
   
    $('.card').click(function () {
     $(this).children('form').trigger('submit');
 });
 });