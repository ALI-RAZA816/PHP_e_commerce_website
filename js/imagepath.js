$(document).ready(function(){
    $('.images').on('click',function(){
        var imgpath = $(this).attr('src');
        $('.preview-img').attr('src',imgpath);
    })
})