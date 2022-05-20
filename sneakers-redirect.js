var state = false;
var searchOn = false;
var navBtnsExpand = false;
var navBtnsShow = false;
var inputShow = false;

window.onscroll = function() {
    scrollIndiator();
    navBtnsExpand = false;
}

function scrollIndiator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    var scrollEvent = this.oldScroll > this.scrollY;
    this.oldScroll = this.scrollY;

    new ResizeObserver (entries => {
        //for when display width is less than  720px
        if( scrollEvent == false && entries[0].contentBoxSize[0].inlineSize < 720) {
            document.querySelector('.nav-links').style.height = '0px';
            document.querySelector('.collapse-navbtn').style.display = 'none';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.section2').style.marginTop = '70px';
            document.querySelector('.sneaker-image').style.marginTop = '70px';
            document.querySelector('.sneaker-info-container').style.marginTop = '260px';
            document.querySelector('.scroll-indicator').style.marginLeft = '0px';
            document.querySelector('.scroll-indicator').style.marginRight = '0px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        } else if(scrollEvent == true && entries[0].contentBoxSize[0].inlineSize < 720) {
            document.querySelector('.nav-links').style.height = '70px';
            document.querySelector('.collapse-navbtn').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '140px';
            document.querySelector('.section2').style.marginTop = '140px';
            document.querySelector('.sneaker-image').style.marginTop = '140px';
            document.querySelector('.scroll-indicator').style.marginLeft = '0px';
            document.querySelector('.scroll-indicator').style.marginRight = '0px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        } 
        //for when display width is more than 1211px
        else if(entries[0].contentBoxSize[0].inlineSize > 1211) {
            document.querySelector('.nav-links').style.height = '70px'
            document.querySelector('.collapse-navbtn').style.display = 'none';
            document.querySelector('.section2').style.marginTop = '70px';
            document.querySelector('.sneaker-image').style.marginTop = '70px';
            document.querySelector('.sneaker-info-container').style.marginTop = '400px';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        }else if(entries[0].contentBoxSize[0].inlineSize > 720) {
            document.querySelector('.nav-links').style.height = '70px';
            document.querySelector('.collapse-navbtn').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.section2').style.marginTop = '70px';
            document.querySelector('.sneaker-image').style.marginTop = '70px';
            document.querySelector('.sneaker-info-container').style.marginTop = '400px';
            document.querySelector('.scroll-indicator').style.marginLeft = '0px';
            document.querySelector('.scroll-indicator').style.marginRight = '0px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        }
        //for when display width is less than  1211px
        else if(scrolled > 1 && entries[0].contentBoxSize[0].inlineSize < 1211) {
            document.querySelector('.nav-links').style.height = '70px'
            document.querySelector('.collapse-navbtn').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        } else if(scrolled < 1 && entries[0].contentBoxSize[0].inlineSize < 1211) {
            document.querySelector('.scroll-indicator').style.width = '0%';
        }
    }).observe(document.body)
}

function togglePopup() {
    state = !state;
    var popup = document.querySelector(".nav-popup");
    var popupBtn = document.querySelector(".nav-expand");
    if(state == true) {
        popup.style.display = 'flex';
        document.querySelector('.fa-bars').style.transform = "rotate(90deg)";
        document.documentElement.style.overflow = 'hidden';
        document.addEventListener('click', function(e){
            var navPopup = document.querySelector('.nav-popup');
            if(!navPopup.contains(e.target) && !popupBtn.contains(e.target)) {
                popup.style.display = 'none';
                document.querySelector('.fa-bars').style.transform = "rotate(0deg)";
                state = false;
            }
        })
    } else {
        popup.style.display = 'none';
        document.querySelector('.fa-bars').style.transform = "rotate(0deg)";
        document.documentElement.style.overflow = 'visible';
    }
    new ResizeObserver (entries => {
        if(entries[0].contentBoxSize[0].inlineSize > 720) {
            document.documentElement.style.overflow = 'visible';
        } else if(entries[0].contentBoxSize[0].inlineSize < 720 && popup.style.display == 'flex') {
            document.documentElement.style.overflow = 'hidden';
        }
    }).observe(document.body)
}

function collapseNavbtns() {
    navBtnsExpand = !navBtnsExpand;
    var navBtnsWrap = document.querySelector('.nav-links');
    if(navBtnsExpand == true) {
        navBtnsWrap.style.height = 'auto';
    } else {
        navBtnsWrap.style.height = '70px';
    }
    console.log(navBtnsExpand)
}

function toggleInput() {
    var searchInput = document.querySelector('#search-input');
    var navExpand = document.querySelector('.nav-expand');
    var collapseNavbtn = document.querySelector('.collapse-navbtn');
    var logo = document.querySelector('.logo');
    var navSearch = document.querySelector('.nav-search');
    searchInput.style.display = 'block';
    navExpand.style.zIndex = '-100';
    collapseNavbtn.style.zIndex = '-100';
    searchInput.focus();
    logo.style.zIndex = '-100';
    navSearch.className = 'nav-search nav-search-after';
    navSearch.setAttribute('onclick', 'inputFetch()');
}

function inputFetch() {
    var input = document.querySelector('#search-input');
    if(input.value == '') {
        alert("Please type something..")
    } else {
        console.log(input.value)
    }
}

var input = document.querySelector('#search-input');
input.addEventListener('keyup', function(e){
    if(e.key == 'Enter' ) {
        if(input.value == '') {
            alert("Please type something..")
        } else {
            console.log(input.value)
        }
    }
})

document.addEventListener('click', function(e){
    var searchBar = document.querySelector('.search-btn-field');
    var searchInput = document.querySelector('#search-input');
    var navExpand = document.querySelector('.nav-expand');
    var collapseNavbtn = document.querySelector('.collapse-navbtn');
    var logo = document.querySelector('.logo');
    if(!searchBar.contains(e.target) && searchInput.style.display == 'block') {
        searchInput.style.display = 'none';
        collapseNavbtn.style.zIndex = '100';
        navExpand.style.zIndex = '100';
        logo.style.zIndex = '100';
        inputShow = !inputShow;
    }
})

document.addEventListener('click', function(e){
    var navBtnsWrap = document.querySelector('.nav-links');
    var navCollapseBtn = document.querySelector('.collapse-navbtn');
    if(!navCollapseBtn.contains(e.target) && !navBtnsWrap.contains(e.target) && navBtnsWrap.style.height == 'auto') {
        navBtnsWrap.style.height = '70px';
        navBtnsExpand = !navBtnsExpand;
    }
})

document.addEventListener('click', function(e){
    var navBtnsWrap = document.querySelector('.nav-links');
    var navCollapseBtn = document.querySelector('.collapse-navbtn');
    if(!navCollapseBtn.contains(e.target) && !navBtnsWrap.contains(e.target) && navBtnsWrap.style.height == 'auto') {
        navBtnsWrap.style.height = '0px';
        navBtnsExpand = !navBtnsExpand;
    }
})

function reviewPopup(){
    var reviewBtn = document.querySelector('#review-button');
    reviewBtn.addEventListener('click', function(){
        document.addEventListener('click', function(){
        var reviewPopup = document.querySelector('.write-review-popup');
        reviewPopup.style.display = 'flex';
        document.documentElement.style.overflow = 'hidden'
        document.addEventListener('click', function(e){
            var reviewPopupBg = document.querySelector('.write-review-popup');
            var reviewPopup = document.querySelector('.sneaker-review');
            if(!reviewPopup.contains(e.target)){
                reviewPopupBg.style.display = 'none';
                document.documentElement.style.overflow = 'visible'
            }
        })
        })
    }  
)}

function closeStatusMsg() {
    var statusMsg = document.querySelector(".review-submit-confirmation");
    statusMsg.style.display = 'none';
    document.documentElement.style.overflow = 'visible';
}

document.addEventListener('click', function(e) {
    var statusMsg = document.querySelector(".review-submit-confirmation");
    var statusMsgContainer = document.querySelector(".status-container");
    if(!statusMsgContainer.contains(e.target)) {
        closeStatusMsg();
    }
    if(statusMsg.style.display = 'flex') {
        document.documentElement.style.overflow = 'hidden';
    }
})

var rentalBtn = document.querySelector('#rental-button');
rentalBtn.addEventListener('click', function(){
    document.addEventListener('click', function(){
    var rentalPopup = document.querySelector('#rent-container');
    rentalPopup.style.display = 'flex';
    document.documentElement.style.overflow = 'hidden'
    document.addEventListener('click', function(e){
        var reviewPopupBg = document.querySelector('#rent-container');
        var rentalPopup = document.querySelector('.sneaker-rent');
        if(!rentalPopup.contains(e.target)){
            reviewPopupBg.style.display = 'none';
            document.documentElement.style.overflow = 'visible'
        }
    })
    })
})

var slider = document.querySelector("#range-slider");
var output = document.querySelector("#day-count");
output.innerHTML = slider.value + " DAY";

slider.oninput = function() {
    var sliderValue;
    if (this.value < 2) {
        sliderValue = " DAY";
    } else {
        sliderValue = " DAYS"
    }
    output.innerHTML = this.value + sliderValue;

    var value = (this.value-this.min)/(this.max-this.min)*100;
    slider.style.background = "linear-gradient(to right, red 0%, red " + value + "%, white " + value + "%, white 100%)";
}