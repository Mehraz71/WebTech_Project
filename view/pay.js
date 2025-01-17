function goToPayment(amount) {
  // You can save the amount in localStorage or pass it as a query parameter
  localStorage.setItem("paymentAmount", amount);

  // Redirect to another HTML file
  window.location.href = "payment.html";
}
