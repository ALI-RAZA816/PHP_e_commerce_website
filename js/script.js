document.addEventListener('DOMContentLoaded',function(){

    let cross = document.getElementsByClassName('nav-tab-cross')[0];
    let nav_bars = document.getElementsByClassName('nav-bars')[0];
    let header_nav_tab = document.getElementById('header-nav-tabs');
  
    nav_bars.addEventListener('click',function(){
        header_nav_tab.classList.add('active-menu');
        document.body.style.overflowY = 'hidden';
    });
    cross.addEventListener('click',function(){
        header_nav_tab.classList.remove('active-menu');
        document.body.style.overflowY = 'auto';
    });

    let user_icon = document.getElementsByClassName("user-icon")[0];
    const profile = document.querySelector(".profile");
    user_icon.addEventListener('click',function(){
        profile.classList.toggle('show-profile')
    });
    
    document.addEventListener('click',function(event){
        if(!user_icon.contains(event.target)){
            profile.classList.remove('show-profile')
        }
    })

});