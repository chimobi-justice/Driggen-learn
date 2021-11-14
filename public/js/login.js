const email = document.getElementById("email");
const emailFeedBackErr = document.getElementById("emailFeedBackErr");

const password = document.getElementById("password");
const passwordFeedBackErr = document.getElementById("passwordFeedBackErr");

const loginButton = document.getElementById("login");

let isLoading = true;

loginButton.addEventListener("click", () => {
    if (isLoading && email.value.length > 1 && password.value.length > 1) {
        loginButton.textContent = "loading...";
        isLoading = false;
    } else if (
        isLoading &&
        !emailFeedBackErr.textContent &&
        !passwordFeedBackErr.textContent
    ) {
        loginButton.textContent = "Loading...";
        isLoading = false;
    } else {
        loginButton.textContent = "Login";
        isLoading = false;
    }
});

const _handleKeyup = () => {
    if (email.value.length > 0) {
        emailFeedBackErr.textContent = "";
    }

    if (password.value.length > 0) {
        passwordFeedBackErr.textContent = "";
    }
};

email.addEventListener("keyup", _handleKeyup);
password.addEventListener("keyup", _handleKeyup);
