document.addEventListener('DOMContentLoaded',function(){
    
    const image1 = document.querySelector('#image-1');
    const imge_view1 = document.querySelector('.img-view1');
    image1.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image1.files[0]);
        imge_view1.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon1').style.display= 'none';
    });

    const image2 = document.querySelector('#image-2');
    const imge_view2 = document.querySelector('.img-view2');
    image2.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image2.files[0]);
        imge_view2.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon2').style.display= 'none';
    });
    
    const image3 = document.querySelector('#image-3');
    const imge_view3 = document.querySelector('.img-view3');
    image3.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image3.files[0]);
        imge_view3.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon3').style.display= 'none';
    });
    
    const image4 = document.querySelector('#image-4');
    const imge_view4 = document.querySelector('.img-view4');
    image4.addEventListener('change',function(){
        let imgeLink = URL.createObjectURL(image4.files[0]);
        imge_view4.style.backgroundImage = `url(${imgeLink})`;
        document.querySelector('.image-icon4').style.display= 'none';
    });

})