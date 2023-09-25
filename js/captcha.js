function generateCaptcha() {
  const operators = ["+", "-", "*", "/"];
  const operator = operators[Math.floor(Math.random() * operators.length)];
  const num1 = Math.floor(Math.random() * 10) + 1;
  const num2 = Math.floor(Math.random() * 10) + 1;
  const equation = `${num1} ${operator} ${num2}`;
  const answer = eval(equation);
  return { equation, answer };
}

// Function to reload the captcha
function reloadCaptcha() {
  const captcha = generateCaptcha();
  document.getElementById(
    "captchaEquation"
  ).textContent = `${captcha.equation}`;
  document.getElementById("hiddenField").value = captcha.equation;
  return captcha.answer;
}

let correctAnswer = reloadCaptcha();

// Function to clear the result message
function clearResultMessage() {
  document.getElementById("resultMessage").textContent = "";
}

function resetForm() {
  document.getElementById("captchaForm").reset();
}

// Form submission and validation
document.getElementById("captchaForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const userAnswer = parseFloat(document.getElementById("userAnswer").value);

  if (userAnswer === correctAnswer) {
    document.getElementById("resultMessage").textContent =
      "Correct! Captcha passed.";

    // Create a new form element for submission
    const form = document.createElement("form");
    form.action = "https://formspree.io/f/myyqjvkk"; // Replace with your target page
    form.method = "POST";

    // Clone and append the relevant fields
    const userAnswerInput = document
      .getElementById("userAnswer")
      .cloneNode(true);
    const hiddenFieldInput = document
      .getElementById("hiddenField")
      .cloneNode(true);
    form.appendChild(userAnswerInput);
    form.appendChild(hiddenFieldInput);
    document.body.appendChild(form);
    form.submit();

    setTimeout(clearResultMessage, 2000);
    setTimeout(resetForm, 2000);

    correctAnswer = setTimeout(reloadCaptcha, 2000);
  } else {
    document.getElementById("resultMessage").textContent =
      "Incorrect! Please try again.";
    // Reload captcha after incorrect answer
    correctAnswer = reloadCaptcha();
  }
});
