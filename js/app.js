// Mobile menu toggle
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
if (mobileMenuBtn) {
  mobileMenuBtn.addEventListener("click", () => {
    // Add mobile menu functionality if needed
  });
}

// Initialize localStorage if needed
if (!localStorage.getItem("ticketapp_tickets")) {
  localStorage.setItem("ticketapp_tickets", JSON.stringify([]));
}
