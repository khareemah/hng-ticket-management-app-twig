# 🎟️ TicketFlow — PHP + Twig Ticket Management System

**TicketFlow** is a simple, browser-based ticket management system built with **PHP**, **Twig**, and **JavaScript**.  
It allows users to create, edit, and manage tickets directly from the browser with persistent storage using `localStorage`.

---

## 🚀 Features

- 🧾 **Create, view, edit, and delete tickets**
- 🎯 **Filter tickets by status** — All, Open, In Progress, Closed
- ⚡ **Assign priorities** — Low, Medium, High
- 💾 **Save tickets in localStorage**
- 🧭 **Responsive navigation bar** with mobile toggle
- 💻 **Clean, modern UI** built with Tailwind CSS and custom styling
- 🪄 **Twig templating** for reusable layouts and components

---

## 🧰 Tech Stack

| Technology           | Description                                            |
| -------------------- | ------------------------------------------------------ |
| **PHP 8+**           | Backend logic and routing                              |
| **Twig**             | Templating engine for clean and modular frontend views |
| **JavaScript (ES6)** | Handles dynamic UI updates and localStorage            |
| **Tailwind CSS**     | Utility-first CSS for styling                          |
| **localStorage**     | Stores tickets persistently in the browser             |

---

## 📂 Project Structure

```
ticketflow/
├── public/
│   ├── index.php               # Main entry point
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css       # Custom styles
│   │   └── js/
│   │       └── tickets.js      # Ticket logic
│   └── ...
├── templates/
│   ├── base.html.twig          # Base layout (header, footer)
│   ├── dashboard/
│   │   ├── index.html.twig     # Ticket list page
│   │   ├── create.html.twig    # Create ticket page
│   │   └── edit.html.twig      # Edit ticket page
│   └── components/
│       └── navbar.html.twig    # Responsive navigation
├── src/
│   ├── Controller/
│   │   └── TicketController.php
│   └── ...
├── composer.json
└── README.md
```

---

## ⚙️ Setup Instructions

### 1️⃣ Clone the repository

```bash
git clone https://github.com/yourusername/ticketflow.git
cd ticketflow
```

### 2️⃣ Install PHP dependencies

```bash
composer install
```

### 3️⃣ Run a local PHP server

```bash
php -S localhost:8000 -t public
```

Then visit:
👉 [http://localhost:8000](http://localhost:8000)

---

## 💡 How Tickets Work

Tickets are handled **entirely in the browser** using `localStorage`, allowing the app to run without a database.

Each ticket is saved as a JSON object like this:

```json
{
  "id": "1xfkrc9jh",
  "title": "Example Ticket",
  "description": "This is a test ticket.",
  "status": "in_progress",
  "priority": "high",
  "createdAt": "2025-10-28T15:33:02.259Z",
  "updatedAt": "2025-10-28T15:33:02.259Z"
}
```

Tickets are stored under:

```js
localStorage.getItem("ticketapp_tickets");
```

---

## 🧭 Available Pages

| Route                             | Template                     | Description             |
| --------------------------------- | ---------------------------- | ----------------------- |
| `/dashboard/tickets`              | `dashboard/index.html.twig`  | Lists all tickets       |
| `/dashboard/tickets/create`       | `dashboard/create.html.twig` | Create new ticket       |
| `/dashboard/tickets/edit?id={id}` | `dashboard/edit.html.twig`   | Edit existing ticket    |
| `/dashboard`                      | `dashboard.html.twig`        | Dashboard overview page |

---

## 🖌️ Customization

You can easily tweak:

- **Colors and theme:** via `:root` CSS variables in `style.css`
- **Buttons:** via `.btn-primary` and `.btn-secondary`
- **Status styles:** via `.status-open`, `.status-in-progress`, `.status-closed`
- **Priority colors:** via `.priority-low`, `.priority-medium`, `.priority-high`

---

## 🧑‍💻 Author

**Kareemah Ajimobi**  
Frontend & PHP Developer — passionate about creating clean, responsive web apps.

---

## 📄 License

This project is open-source under the **MIT License**.
