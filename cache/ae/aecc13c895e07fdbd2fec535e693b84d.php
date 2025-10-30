<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* tickets.html.twig */
class __TwigTemplate_7b74347a4217926ea2b3069e6a5a93a2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'extra_css' => [$this, 'block_extra_css'],
            'extra_js' => [$this, 'block_extra_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Tickets - TicketFlow";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"min-h-screen bg-gray-50\">
  <!-- Header -->
  <header class=\"bg-card border-b border-border sticky top-0 z-40 backdrop-blur-md\">
    <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center bg-white\">
      <!-- Left: Title -->
      <div>
        <h1 class=\"text-2xl font-bold\">Tickets</h1>
        <p class=\"text-muted-foreground text-sm sm:text-base\">
          Manage all your support tickets
        </p>
      </div>

      <!-- Right: Desktop Menu -->
      <div class=\"hidden sm:flex gap-4 items-center\">
        <a href=\"/dashboard/tickets/create\"
           class=\"px-4 py-2 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition btn-primary\">
          Create Ticket
        </a>
        <a href=\"/dashboard\"
           class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition bg-[#f1f1f1]\">
          Dashboard
        </a>
        <form action=\"/logout\" method=\"POST\" class=\"inline\">
          <button type=\"submit\"
                  class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition bg-[#f1f1f1]\">
            Logout
          </button>
        </form>
      </div>

      <!-- Mobile Menu Button -->
      <button id=\"menuToggle\" class=\"sm:hidden p-2 rounded-md border border-border hover:bg-gray-100 transition\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6 text-gray-700\" fill=\"none\"
             viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                d=\"M4 6h16M4 12h16M4 18h16\" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id=\"mobileMenu\" class=\"sm:hidden hidden flex flex-col gap-2 px-4 pb-4 bg-white border-t border-border\">
      <a href=\"/dashboard/tickets/create\"
         class=\"px-4 py-2 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition btn-primary\">
        Create Ticket
      </a>
      <a href=\"/dashboard\"
         class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition bg-[#f1f1f1]\">
        Dashboard
      </a>
      <form action=\"/logout\" method=\"POST\" class=\"inline\">
        <button type=\"submit\"
                class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition bg-[#f1f1f1] w-full text-left\">
          Logout
        </button>
      </form>
    </div>
  </header>

  <!-- Main -->
  <main class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-[#fafafa]\">
    <!-- Filters -->
    <div class=\"flex gap-4 flex-wrap mb-6\">
      <button class=\"filter-btn active\" data-filter=\"all\">All</button>
      <button class=\"filter-btn\" data-filter=\"open\">Open</button>
      <button class=\"filter-btn\" data-filter=\"in_progress\">In Progress</button>
      <button class=\"filter-btn\" data-filter=\"closed\">Closed</button>
    </div>

    <!-- Tickets -->
    <div id=\"ticketsList\" class=\"space-y-4\"></div>
  </main>

  <!-- Toast Container (Top Right) -->
  <div id=\"toastContainer\" class=\"fixed top-5 right-5 z-50 space-y-3\"></div>

  <!-- Footer -->
  <footer class=\"bg-[#004cc0]/10 border-t border-gray-200 mt-12 py-12 px-4\">
    <div class=\"border-t border-border pt-8 text-center text-muted-foreground\">
      <p>&copy; 2025 TicketFlow. All rights reserved.</p>
    </div>
  </footer>
</div>
";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "<style>
  .filter-btn {
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: all 0.2s;
    background-color: #d2e6ff;
    color: black;
    font-weight: 500;
  }

  .filter-btn.active {
    color: white;
    background-color: #0049c1;
  }

  .ticket-card {
    background-color: white;
    border: 1px solid var(--border);
    border-radius: 0.5rem;
    padding: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: start;
    gap: 1rem;
    position: relative;
  }

  .ticket-card:hover {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .confirm-inline {
    padding: 1rem 1.25rem;
    border-radius: 0.5rem;
    margin-top: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    animation: fadeIn 0.2s ease-in-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .confirm-inline button {
    border-radius: 0.375rem;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
  }
</style>
";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield "<script>
  // Handle mobile menu toggle
  document.getElementById('menuToggle').addEventListener('click', () => {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  });

  let currentFilter = 'all';
  let openConfirmId = null;

  function loadTickets() {
    const tickets = JSON.parse(localStorage.getItem(\"ticketapp_tickets\") || \"[]\");
    const filtered =
      currentFilter === \"all\"
        ? tickets
        : tickets.filter(t => t.status === currentFilter);

    const ticketsList = document.getElementById(\"ticketsList\");

    if (filtered.length === 0) {
      ticketsList.innerHTML = `
        <div class=\"bg-white border border-border rounded-lg p-8 sm:p-12 text-center\">
          <p class=\"text-gray-700 text-lg mb-4\">No tickets found</p>
          <a href=\"/dashboard/tickets/create\"
             class=\"text-white bg-primary rounded-md px-6 py-3 text-[14px] btn-primary\">
            Create your first ticket
          </a>
        </div>`;
      return;
    }

    ticketsList.innerHTML = filtered.map(ticket => `
      <div class=\"ticket-card flex flex-col\" id=\"ticket-\${ticket.id}\">
        <div class=\"flex w-full justify-between items-start\">
          <div class=\"flex-1\">
            <h3 class=\"text-lg font-bold mb-2\">\${ticket.title}</h3>
            <p class=\"text-gray-600 mb-3\">\${ticket.description || ''}</p>
            <div class=\"flex gap-2 flex-wrap\">
              <span class=\"status-badge status-\${ticket.status}\">
                \${ticket.status.replace(\"_\", \" \")}
              </span>
              <span class=\"priority-\${ticket.priority ?? 'none'} font-medium\">
                \${ticket.priority 
                  ? (ticket.priority.charAt(0).toUpperCase() + ticket.priority.slice(1) + ' Priority')
                  : ''}
              </span>
            </div>
          </div>
          <div class=\"flex gap-2\">
            <a href=\"/dashboard/tickets/edit?id=\${ticket.id}\"
               class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition bg-[#f1f1f1]\">Edit</a>
            <button onclick=\"toggleConfirm('\${ticket.id}')\"
                    class=\"px-4 py-2 border border-border rounded-lg hover:bg-secondary transition text-red-600\">Delete</button>
          </div>
        </div>
        <div id=\"confirm-\${ticket.id}\" class=\"hidden w-full flex flex-col items-start gap-3 bg-[#FFEAEA] confirm-inline text-red-600\">
          <span>Are you sure you want to delete this ticket?</span>
          <div class=\"flex gap-2\">
            <button onclick=\"cancelConfirm('\${ticket.id}')\" class=\"bg-white border border-border hover:bg-white\">Cancel</button>
            <button onclick=\"deleteTicket('\${ticket.id}')\" class=\"bg-red-600 hover:bg-red-700 text-white\">Delete</button>
          </div>
        </div>
      </div>
    `).join(\"\");
  }

  function toggleConfirm(id) {
    if (openConfirmId && openConfirmId !== id) {
      document.getElementById(`confirm-\${openConfirmId}`).classList.add('hidden');
    }
    const el = document.getElementById(`confirm-\${id}`);
    el.classList.toggle('hidden');
    openConfirmId = el.classList.contains('hidden') ? null : id;
  }

  function cancelConfirm(id) {
    document.getElementById(`confirm-\${id}`).classList.add('hidden');
    openConfirmId = null;
  }

  // ✅ Toast Notification (Top-right, Green)
  function showToast(message, type = \"success\") {
    const toastContainer = document.getElementById(\"toastContainer\");
    const toast = document.createElement(\"div\");

    const color =
      type === \"success\"
        ? \"bg-green-600 text-white\"
        : type === \"error\"
        ? \"bg-red-600 text-white\"
        : \"bg-gray-800 text-white\";

    toast.className = `\${color} px-4 py-3 rounded-lg shadow-lg transform transition-all duration-500 opacity-0 translate-y-2`;
    toast.textContent = message;
    toastContainer.appendChild(toast);

    // Animate in
    requestAnimationFrame(() => {
      toast.classList.remove(\"opacity-0\", \"translate-y-2\");
      toast.classList.add(\"opacity-100\", \"translate-y-0\");
    });

    // Auto remove
    setTimeout(() => {
      toast.classList.add(\"opacity-0\", \"translate-y-2\");
      setTimeout(() => toast.remove(), 500);
    }, 3000);
  }

  function deleteTicket(id) {
    const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
    const filtered = tickets.filter(t => t.id !== id);
    localStorage.setItem('ticketapp_tickets', JSON.stringify(filtered));
    loadTickets();
    openConfirmId = null;
    showToast(\"Ticket deleted successfully\", \"success\");
  }

  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      currentFilter = this.dataset.filter;
      loadTickets();
    });
  });

  loadTickets();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tickets.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  232 => 148,  225 => 147,  167 => 92,  160 => 91,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tickets.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\tickets.html.twig");
    }
}
