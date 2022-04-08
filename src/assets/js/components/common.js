let windowLocation = window.location.href;
console.log(windowLocation);
if (!windowLocation.includes("privacy")) {
  const allQuestions = document.querySelectorAll(".faq-block");
  allQuestions.forEach((question) => {
    question.addEventListener("click", () => {
      question.classList.toggle("faq-block--active");
    });
  });

  const darkLayer = document.querySelector(".dark-layer");
  const applyBtns = document.querySelectorAll(".apply-btn");
  const closeForm = document.getElementById("closeForm");
  const applyFormScreen = document.getElementById("applyForm");
  const burgerMenu = document.querySelector(".mobile-header__burger-menu");
  const mobileMenu = document.querySelector(".mobile-menu");
  const mobileNavigation = document.getElementById("mobileNavigation");
  const allLinks = mobileNavigation.querySelectorAll(".navigation-link");

  applyBtns.forEach((button) => {
    button.addEventListener("click", () => {
      darkLayer.classList.toggle("js--hidden");
    });
  });

  closeForm.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });

  burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("mobile-header__burger-menu--active");
    mobileMenu.classList.toggle("mobile-menu--active");
    document.querySelector("body").classList.toggle("disable-body");
  });

  allLinks.forEach((link) => {
    link.addEventListener("click", () => {
      burgerMenu.classList.toggle("mobile-header__burger-menu--active");
      mobileMenu.classList.toggle("mobile-menu--active");
      document.querySelector("body").classList.toggle("disable-body");
    });
  });

  $(document).ready(function () {
    $("#userPhone").inputmask();
  });
}
