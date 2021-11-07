const openNav = document.getElementById("openNav");
const mobileSideNav = document.getElementById("mobileSideNav");

openNav.addEventListener("click", () => {
    mobileSideNav.classList.toggle("toggleNav");
    // remove body not to scroll
    document.body.classList.toggle("removeBodyUnsroll");
    // add body opacity
    document.body.classList.toggle("bodyOpercity");
});
