document.addEventListener('DOMContentLoaded',function(){

    const image = document.querySelectorAll('.images');
    const img_view = document.querySelectorAll('.img-view');
    const edit_img_icon = document.querySelectorAll('.edit-image-icon');

    image.forEach((item,index)=>{
        item.addEventListener('change',function(event){
            if(event.target){
                let imgLink = URL.createObjectURL(event.target.files[0]);
                img_view[index].style.backgroundImage = `url(${imgLink})`;
                edit_img_icon[index].style.display ='none';
            }
        });
    });
});