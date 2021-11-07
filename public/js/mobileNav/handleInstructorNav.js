const openInstructorNav = document.getElementById("openInstructorNav");
const instructorMobileSideNav = document.getElementById(
    "instructorMobileSideNav"
);

const instructorNav = document.getElementById("instructorNav");
const asideNav = document.getElementById("asideNav");
const nav = document.getElementById("instructor-nav");
const instructorMainBody = document.getElementById("user-main-body");

openInstructorNav.addEventListener("click", () => {
    instructorMobileSideNav.classList.toggle("toggleNav");
    // remove body not to scroll
    document.body.classList.toggle("removeBodyUnsroll");
    // add body opacity
    document.body.classList.toggle("bodyOpercity");
});

instructorNav.addEventListener("click", () => {
    asideNav.classList.toggle("toggleAsideNav");
    nav.classList.toggle("margin");
    instructorMainBody.classList.toggle("margin");
});
