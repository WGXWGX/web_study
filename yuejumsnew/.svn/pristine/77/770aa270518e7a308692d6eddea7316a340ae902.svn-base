$(function(){
    $('#type').on('change',function(){
        var selectedId = $(this).find('option').eq(this.selectedIndex).val();
        location.href='admin/house/'+selectedId + '?search=<?php echo $search?>';
    });
    $('#editable-sample_new').on('click',function(){
        $(document.body).rightdialog({
            title:'添加房源',
            content:'js/right-dialog/add_house.php',
            delscroll:'.main-content'
        });
    });
});