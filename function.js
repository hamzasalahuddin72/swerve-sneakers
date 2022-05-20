const welcomeTimeout = setTimeout(welcomePopup, 2000);

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
        if( scrollEvent == false && 720 > entries[0].contentBoxSize[0].inlineSize) {
            document.querySelector('.nav-links').style.height = '0px';
            document.querySelector('.collapse-navbtn').style.display = 'none';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.section').style.marginTop = '70px';
            document.querySelector('.scroll-indicator').style.marginLeft = '0px';
            document.querySelector('.scroll-indicator').style.marginRight = '0px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        } else if(scrollEvent == true && 720 > entries[0].contentBoxSize[0].inlineSize) {
            document.querySelector('.nav-links').style.height = '70px';
            document.querySelector('.collapse-navbtn').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '140px';
            document.querySelector('.section').style.marginTop = '140px';
            document.querySelector('.scroll-indicator').style.marginLeft = '0px';
            document.querySelector('.scroll-indicator').style.marginRight = '0px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        } else if(1211 > entries[0].contentBoxSize[0].inlineSize) {
            document.querySelector('.nav-links').style.height = '70px';
            document.querySelector('.collapse-navbtn').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.section').style.marginTop = '70px';
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
        //for when display width is more than 1211px
        else if(entries[0].contentBoxSize[0].inlineSize > 1211) {
            document.querySelector('.nav-links').style.height = '70px'
            document.querySelector('.collapse-navbtn').style.display = 'none';
            document.querySelector('.scroll-indicator').style.display = 'flex';
            document.querySelector('.scroll-indicator').style.marginTop = '70px';
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
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
    if(e.key == 'Enter') {
        if(input.value == '') {
            alert("Please type something..")
        } else {
            console.log(input.value)
        }
    }
})

document.addEventListener('click', function(e){
    var searchBar = document.querySelector('.search-btn-field');
    var navSearch = document.querySelector('.nav-search');
    var searchInput = document.querySelector('#search-input');
    var navExpand = document.querySelector('.nav-expand');
    var collapseNavbtn = document.querySelector('.collapse-navbtn');
    var logo = document.querySelector('.logo');
    if(!searchBar.contains(e.target) && searchInput.style.display == 'block') {
        searchInput.style.display = 'none';
        collapseNavbtn.style.zIndex = '100';
        navExpand.style.zIndex = '100';
        logo.style.zIndex = '100';
        navSearch.className = 'nav-search';
        navSearch.setAttribute('onclick', 'toggleInput()');
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

function welcomePopup() {
    var welcomePopupBg = document.querySelector("#welcome-popup-bg");
    var welcomePopup = document.querySelector("#welcome-popup");
    welcomePopupBg.style.marginTop = "-100%";
    welcomePopup.style.background = "linear-gradient(to right, red 100%, black 0%)";
}