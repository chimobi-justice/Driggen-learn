const current_password = document.getElementById("current_password");
const current_password_feed_back_err = document.getElementById(
    "current_password_feed_back_err"
);

const new_password = document.getElementById("new_password");
const new_password_feed_back_err = document.getElementById(
    "new_password_feed_back_err"
);

const _handleKeyup = () => {
    if (current_password.value.length > 0) {
        current_password_feed_back_err.textContent = "";
    }

    if (new_password.value.length > 0) {
        new_password_feed_back_err.textContent = "";
    }
};

current_password.addEventListener("keyup", _handleKeyup);
new_password.addEventListener("keyup", _handleKeyup);
