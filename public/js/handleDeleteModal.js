const openDeleteModal = document.getElementById("deleteAccount");
const deleteModal = document.getElementById("accountPermanentlyDeleteBox");
const cancleDelete = document.getElementById("cancleDelete");

cancleDelete.addEventListener(
    "click",
    () => (deleteModal.style.display = "none")
);

const clickBtn = () => {
    if (openDeleteModal) {
        deleteModal.style.display = "block";
    }
};

openDeleteModal.addEventListener("click", clickBtn);
