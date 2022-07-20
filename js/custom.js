
var player;
const mobileDrawer = document.querySelector(".mobile_nav");
const body = document.querySelector("body");
const csp_bun_close = document.querySelectorAll(".csp_bun_close");
const modal = document.querySelectorAll(".modal");
const submitContactForm = document.querySelector("#submitContactForm");
const thankYouMsg = document.querySelector("#thankYouMsg");
// const msgClose = document.querySelector("#msgClose");

function drawer(props){
    
    if(props){
        mobileDrawer.style.right = "0";
    }else{
        mobileDrawer.style.right = "-50%";
    }
}

 
function cspVideo(el,videoUrl){
    // const csp_modal_video = document.querySelector(".csp_modal_video");

    const csp_modal_video= el.parentElement.nextElementSibling;

    if(videoUrl){
        csp_modal_video.src = videoUrl;
    }

}
function cspYTvideo(videoUrl){
    const csp_modal_video = document.querySelector(".csp_modal_video iframe");

    if(videoUrl){
        csp_modal_video.src = videoUrl;
    }

}

function msgClose(){
    thankYouMsg.style.right = "-500px";
}


setTimeout(function(){
    thankYouMsg.style.right = "0";
    setTimeout(function(){
        thankYouMsg.style.right = "-500px";
    }, 10000)
}, 1000)

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


// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
    // create the global player from the specific iframe (#video)
    player = new YT.Player('video', {
        events: {
            // call this function when player is ready to use
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    var stopButton = document.getElementById("yPlayer");
    stopButton.addEventListener("click", function() {
        player.stopVideo();
    });

}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);