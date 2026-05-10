document.addEventListener('DOMContentLoaded',function(){

    // const image = document.querySelectorAll('.images');
    // const img_view = document.querySelectorAll('.img-view');
    // const edit_img_icon = document.querySelectorAll('.edit-image-icon');

    // image.forEach((item,index)=>{
    //     item.addEventListener('change',function(event){
    //         if(event.target){
    //             let imgLink = URL.createObjectURL(item.files[0]);
    //             img_view[index].style.backgroundImage = `url(${imgLink})`;
    //             edit_img_icon[index].style.display ='none';
    //         }
    //     });
    // });

    const image1 = document.querySelector('#edit-image-1');
    const imge_view1 = document.querySelector('.edit-img-view1');
    image1.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image1.files[0]);
        imge_view1.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon1').style.display= 'none';
    });

    const image2 = document.querySelector('#edit-image-2');
    const imge_view2 = document.querySelector('.edit-img-view2');
    image2.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image2.files[0]);
        imge_view2.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon2').style.display= 'none';
    });
    
    const image3 = document.querySelector('#edit-image-3');
    const imge_view3 = document.querySelector('.edit-img-view3');
    image3.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image3.files[0]);
        imge_view3.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon3').style.display= 'none';
    });
    
    const image4 = document.querySelector('#edit-image-4');
    const imge_view4 = document.querySelector('.edit-img-view4');
    image4.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image4.files[0]);
        imge_view4.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon4').style.display= 'none';
    });
});