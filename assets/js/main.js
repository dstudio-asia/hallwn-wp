"use strict";

function HallwnDesktopTrapped(){
const  focusableElements =
    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
const modal = document.querySelector('#myOverlay'); 

const firstFocusableElement = modal.querySelectorAll(focusableElements)[0];
const focusableContent = modal.querySelectorAll(focusableElements);
const lastFocusableElement = focusableContent[focusableContent.length - 1]; 


document.addEventListener('keydown', function(e) {
  let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

  if (!isTabPressed) {
    return;
  }

  if (e.shiftKey) { 
    if (document.activeElement === firstFocusableElement) {
      lastFocusableElement.focus();
      e.preventDefault();
    }
  } else { 
    if (document.activeElement === lastFocusableElement) { 
      firstFocusableElement.focus(); 
      e.preventDefault();
    }
  }
});
}

function HallwnMobileTrapped(){
HallwnHeroNav.setAttribute("id", "myOverlay");
const  focusableElements =
    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
const modal = document.querySelector('#myOverlay'); 

const firstFocusableElement = modal.querySelectorAll(focusableElements)[0];
const focusableContent = modal.querySelectorAll(focusableElements);
const lastFocusableElement = focusableContent[focusableContent.length - 1]; 


document.addEventListener('keydown', function(e) {
  let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

  if (!isTabPressed) {
    return;
  }

  if (e.shiftKey) { 
    if (document.activeElement === firstFocusableElement) {
      lastFocusableElement.focus();
      e.preventDefault();
    }
  } else { 
    if (document.activeElement === lastFocusableElement) { 
      firstFocusableElement.focus(); 
      e.preventDefault();
    }
  }
});
}


let HallwnHeroNav = document.querySelector(".hero-nav");
let HallwnMenu = document.querySelector("#menu-bars");
let HallwnEscMenu = document.getElementById("escape-menu");
HallwnEscMenu.style.display = "none";

function HallwnMyMobileMenu(){
    HallwnMobileTrapped();
    HallwnHeroNav.classList.toggle("active");
    document.getElementById("myOverlay").style.display = "grid";
    document.getElementById("escape-menu").style.display = "block";
    document.getElementById("escape-menu").focus();
    HallwnHeroNav.style.display = "contents";
}


function HallwnEscapeMenu(){
  HallwnMenu.classList.remove("fa-times");
  HallwnHeroNav.classList.remove("active");
  document.getElementById("escape-menu").style.display = "none";
  document.getElementById("mobile").focus();
  location.reload();
}

function HallwnOpenSearch() {
    HallwnDesktopTrapped();
    document.getElementById("myOverlay").style.display = "block"; 
    HallwnHeroNav.removeAttribute("id", "myOverlay"); 
    document.querySelector("div.search-overlay").style.display = "block";
    document.getElementById("search-input").focus();
}

function HallwnCloseSearch() {
  document.getElementById("myOverlay").style.display = "none";
  HallwnMenu.classList.remove("fa-times");
  HallwnHeroNav.classList.remove("active");
  document.getElementById("escape-menu").style.display = "none";
  document.getElementById("mobile").focus();
  location.reload();
}