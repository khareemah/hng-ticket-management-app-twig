document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm");
  const signupForm = document.getElementById("signupForm");
  const demoBtn = document.getElementById("demoBtn");

  if (signupForm) {
    signupForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const name = document.getElementById("signupName").value.trim();
      const email = document.getElementById("signupEmail").value.trim();
      const password = document.getElementById("signupPassword").value.trim();
      const error = document.getElementById("signupError");

      if (!name || !email || !password) {
        error.textContent = "All fields are required.";
        error.classList.remove("hidden");
        return;
      }

      const users = JSON.parse(localStorage.getItem("users") || "[]");
      if (users.find((u) => u.email === email)) {
        error.textContent = "Email already registered.";
        error.classList.remove("hidden");
        return;
      }

      users.push({ name, email, password });
      localStorage.setItem("users", JSON.stringify(users));
      alert("Signup successful! Please login.");
      window.location.href = "/index.php?page=login";
    });
  }

  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const email = document.getElementById("loginEmail").value.trim();
      const password = document.getElementById("loginPassword").value.trim();
      const error = document.getElementById("loginError");

      const users = JSON.parse(localStorage.getItem("users") || "[]");
      const user = users.find(
        (u) => u.email === email && u.password === password
      );

      if (!user) {
        error.classList.remove("hidden");
        return;
      }

      localStorage.setItem("loggedInUser", JSON.stringify(user));
      window.location.href = "/index.php?page=dashboard";
    });
  }

  // DEMO LOGIN BUTTON LOGIC
  if (demoBtn) {
    demoBtn.addEventListener("click", () => {
      const demoUser = {
        name: "Demo User",
        email: "demo@ticketflow.com",
        password: "123456",
      };

      // Ensure demo user exists in localStorage
      const users = JSON.parse(localStorage.getItem("users") || "[]");
      const exists = users.find((u) => u.email === demoUser.email);
      if (!exists) {
        users.push(demoUser);
        localStorage.setItem("users", JSON.stringify(users));
      }

      // Auto-fill and auto-login
      document.getElementById("loginEmail").value = demoUser.email;
      document.getElementById("loginPassword").value = demoUser.password;

      // Optional: auto-submit
      setTimeout(() => loginForm.requestSubmit(), 500);
    });
  }
});
