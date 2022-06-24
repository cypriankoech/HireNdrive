const login_btn = document.querySelector("#login-btn");
const registration_btn = document.querySelector("#registration-btn");
const container =  document.querySelector(".container");

registration_btn.addEventListener("click", () => {
    container.classList.add("registration-mode");
});

login_btn.addEventListener("click", () => {
    container.classList.remove("registration-mode");
});