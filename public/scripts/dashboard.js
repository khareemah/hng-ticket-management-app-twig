document.addEventListener("DOMContentLoaded", () => {
  const user = JSON.parse(localStorage.getItem("loggedInUser"));
  const tickets = JSON.parse(localStorage.getItem("tickets") || "[]");
  const userName = document.getElementById("userName");
  const logoutBtn = document.getElementById("logoutBtn");
  const ticketsContainer = document.getElementById("ticketsContainer");

  // Redirect if no user
  if (!user) {
    window.location.href = "/index.php?page=login";
    return;
  }

  // Display user name
  userName.textContent = user.name;

  // Filter tickets belonging to logged-in user
  const userTickets = tickets.filter((t) => t.userEmail === user.email);

  // Stats
  const total = userTickets.length;
  const open = userTickets.filter((t) => t.status === "open").length;
  const closed = userTickets.filter((t) => t.status === "closed").length;

  document.getElementById("totalTickets").textContent = total;
  document.getElementById("openTickets").textContent = open;
  document.getElementById("closedTickets").textContent = closed;

  // Render tickets
  if (userTickets.length === 0) {
    ticketsContainer.innerHTML = `<p class="text-gray-500 text-center py-4">No tickets yet. Create one above.</p>`;
  } else {
    ticketsContainer.innerHTML = userTickets
      .map(
        (t) => `
        <div class="border border-gray-200 p-4 rounded-lg flex justify-between items-start">
          <div>
            <h4 class="font-semibold text-gray-800">${t.title}</h4>
            <p class="text-sm text-gray-500">${t.description || "No description"}</p>
            <p class="text-xs text-gray-400 mt-1">Priority: <span class="capitalize">${t.priority}</span></p>
          </div>
          <span class="px-3 py-1 text-xs font-medium rounded-full ${
            t.status === "open"
              ? "bg-green-100 text-green-700"
              : "bg-gray-200 text-gray-600"
          }">
            ${t.status}
          </span>
        </div>
      `
      )
      .join("");
  }

  // Logout handler
  logoutBtn.addEventListener("click", () => {
    localStorage.removeItem("loggedInUser");
    window.location.href = "/index.php?page=login";
  });
});
