$().ready(function()
{
    $('.goodsDeleter').click(function()
    {
        $(this).parents('tr').remove();
        $('[name^=count]').change();
    });
})
