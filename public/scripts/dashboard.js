document.addEventListener("DOMContentLoaded", () => {
  const user =
    JSON.parse(localStorage.getItem("loggedInUser")) ||
    JSON.parse(localStorage.getItem("user"));
  const userNameSpan = document.getElementById("userName");
  const logoutBtn = document.getElementById("logoutBtn");

  // Redirect if not logged in
  if (!user) {
    window.location.href = "index.php?page=login";
    return;
  }

  // Show user's name
  userNameSpan.textContent = user.name || user.email || "User";

  // Load tickets from localStorage
  const tickets = JSON.parse(localStorage.getItem("tickets")) || [];

  // Calculate stats
  const total = tickets.length;
  const open = tickets.filter((t) => t.status === "open").length;
  const resolved = tickets.filter((t) => t.status === "resolved").length;

  // Render counts
  document.getElementById("totalTickets").textContent = total;
  document.getElementById("openTickets").textContent = open;
  document.getElementById("resolvedTickets").textContent = resolved;

  // Logout logic
  logoutBtn.addEventListener("click", () => {
    localStorage.removeItem("user");
    window.location.href = "index.php?page=login";
  });
});
