let windowLocation = window.location.href;
console.log(windowLocation);
if (!windowLocation.includes("privacy")) {
  const allQuestions = document.querySelectorAll(".faq-block");
  allQuestions.forEach((question) => {
    question.addEventListener("click", () => {
      question.classList.toggle("faq-block--active");
    });
  });
}
