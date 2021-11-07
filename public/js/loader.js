window.addEventListener("load", () => {
    setTimeout(Loader, 300);
});

const Loader = () => {
    document.getElementById("loader").style.display = "none";
    document.getElementById("bodyContent").style.display = "block";
};
