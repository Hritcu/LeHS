/**
✅ 1. get the Menu and Nav as variables
✅ 2. add a `click` event listener on Menu Btn
✅ 3. (run on click) -> modify Nav styling to show
4. add a `click` event listener on the entire page
5. check if that click is inside NavPanel
  -> YES: do nothing
  -> NO: close it
 */

let menuBtn = document.getElementById("menuBtn");
let navPanel = document.getElementById("navPanel");

console.log(menuBtn);
console.log(navPanel);


menuBtn.addEventListener("click", onMenuClick);
document.addEventListener('click', onDocClick);
document.addEventListener('keyup', onKeyPress);


function onMenuClick(event) {
    // console.log("Hello from onMenuClick");
    // console.log(event);

    // navPanel.style.transform = 'translateX(0)';
    navPanel.classList.add("is--open");
}

function onDocClick(e) {
    if (navPanel.contains(e.target) || menuBtn.contains(e.target)) {
        console.log("You clicked inside the NavPanel. Ignore!");
    } else {
        console.log("You clicked outside, remove class and hide NAV");
        navPanel.classList.remove("is--open");
    }
}

function onKeyPress(e) {
    if (e.key === 'Escape') {
        navPanel.classList.remove("is--open");
    }
}