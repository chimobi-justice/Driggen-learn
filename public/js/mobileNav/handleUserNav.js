const openUserNav = document.getElementById("openUserNav");
const handleUserMobileSideNav = document.getElementById("userMobileSideNav");

const userNav = document.getElementById("userNav");
const asideNav = document.getElementById("asideNav");
const nav = document.getElementById("user-nav");
const userMainBody = document.getElementById("user-main-body");

openUserNav.addEventListener("click", () => {
    handleUserMobileSideNav.classList.toggle("toggleNav");
    // remove body not to scroll
    document.body.classList.toggle("removeBodyUnsroll");
    // add body opacity
    document.body.classList.toggle("bodyOpercity");
});

userNav.addEventListener("click", () => {
    asideNav.classList.toggle("toggleAsideNav");
    nav.classList.toggle("margin");
    userMainBody.classList.toggle("margin");
});
