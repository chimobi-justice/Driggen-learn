const email = document.getElementById("email");
const emailFeedBackErr = document.getElementById("emailFeedBackErr");

const password = document.getElementById("password");
const passwordFeedBackErr = document.getElementById("passwordFeedBackErr");

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
