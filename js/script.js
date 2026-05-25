// document.addEventListener('DOMContentLoaded',function(){

//     let cross = document.getElementsByClassName('nav-tab-cross')[0];
//     let nav_bars = document.getElementsByClassName('nav-bars')[0];
//     let header_nav_tab = document.getElementById('header-nav-tabs');
  
//     nav_bars.addEventListener('click',function(){
//         header_nav_tab.classList.add('active-menu');
//         document.body.style.overflowY = 'hidden';
//     });
//     cross.addEventListener('click',function(){
//         header_nav_tab.classList.remove('active-menu');
//         document.body.style.overflowY = 'auto';
//     });

//     let user_icon = document.getElementsByClassName("user-icon")[0];
//     const profile = document.querySelector(".profile");
//     user_icon.addEventListener('click',function(){
//         profile.classList.toggle('show-profile')
//     });
    
//     document.addEventListener('click',function(event){
//         if(!user_icon.contains(event.target)){
//             profile.classList.remove('show-profile')
//         }
//     });

// });

$(document).ready(function() {
    // Menu toggle
    var $cross = $('.nav-tab-cross');
    var $navBars = $('.nav-bars');
    var $headerNavTab = $('#header-nav-tabs');

    $navBars.on('click', function() {
        $headerNavTab.addClass('active-menu');
        $('body').css('overflowY', 'hidden');
    });

    $cross.on('click', function() {
        $headerNavTab.removeClass('active-menu');
        $('body').css('overflowY', 'auto');
    });

    // Profile dropdown
    var $userIcon = $('.user-icon');
    var $profile = $('.profile');

    $userIcon.on('click', function(event) {
        event.stopPropagation(); // prevent immediate closing
        $profile.toggleClass('show-profile');
    });

    $(document).on('click', function(event) {
        if (!$userIcon.is(event.target) && !$userIcon.has(event.target).length) {
            $profile.removeClass('show-profile');
        }
    });
});