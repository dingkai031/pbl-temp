function submitButtonToggle(submitButton) {
  if (submitButton) {
    if (submitButton.disabled) {
      submitButton.removeAttribute("disabled");
    } else {
      submitButton.setAttribute("disabled", "");
    }
    submitButton
      .querySelector(".submit-button-spinner")
      .classList.toggle("d-none");
    submitButton
      .querySelector(".submit-button-text")
      .classList.toggle("d-none");
  }
}

async function sendData(url = "", data = {}) {
  const response = await fetch(url, {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  });
  return response.json();
}
