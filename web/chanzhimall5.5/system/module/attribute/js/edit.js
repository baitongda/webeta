$().ready(function(){
    key = v.key;
    $(document).on('click', '.icon-plus', function()
    {
        $(this).parents('.input-group').after($('.row-custom').html().replace(/key/g, key));
        key ++;
    })

    $(document).on('click', '.icon-remove', function()
    {
        if($(this).parents('td').find('.input-group').size() > 1)
        {
            $(this).parents('.input-group').remove();
        }
        else
        {
            $(this).parents('.input-group').find('input').val('');
        }
        key ++;
    })
});
