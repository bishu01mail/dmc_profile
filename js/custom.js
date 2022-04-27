
const mobileDrawer = document.querySelector(".mobile_nav");
const body = document.querySelector("body");
const csp_bun_close = document.querySelectorAll(".csp_bun_close");
const modal = document.querySelectorAll(".modal");

function drawer(props){
    
    if(props){
        mobileDrawer.style.right = "0";
    }else{
        mobileDrawer.style.right = "-50%";
    }
}

 
function cspVideo(videoUrl){
    const csp_modal_video = document.querySelector(".csp_modal_video");

    if(videoUrl){
        csp_modal_video.src = videoUrl;
    }

}

Array.from(csp_bun_close).map(el => {
    el.addEventListener('click', function(){
        el.nextElementSibling.lastElementChild.pause()
    })
})
Array.from(modal).map(el => {
    el.addEventListener('click', function(){
        el.querySelector(".csp_modal_video").pause()
    })
})
