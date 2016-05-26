$(document).ready(function()
{
    if(typeof(v.key) == 'undefined') v.key = 1;
    $(document).on('click', '.icon-plus', function()
    {
        $(this).parents('.row-attribute').after($('.row-custom').html().replace(/key/g, v.key));
        v.key ++;
    })
})
