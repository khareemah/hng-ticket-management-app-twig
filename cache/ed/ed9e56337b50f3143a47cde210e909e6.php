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

/* edit-ticket.html.twig */
class __TwigTemplate_ba272c3550e232ab11fe0fb1ac865f9d extends Template
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
        yield "Edit Ticket - TicketFlow";
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
    <!-- Navigation -->
   <nav class=\"bg-white border-b border-gray-200\">
  <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"flex justify-between items-center h-16\">
      <!-- Logo / Title -->
      <h1 class=\"text-2xl font-bold\">Edit Ticket</h1>

      <!-- Desktop Links -->
      <div class=\"hidden md:flex items-center gap-4\">
        <a href=\"/dashboard\" class=\"block text-[#262626] hover:text-gray-600 w-full text-center border border-border px-3 py-2 rounded-md  bg-[#f1f1f1] font-semibold\">Dashboard</a>
        <a href=\"/logout\"
           class=\"block text-[#262626] hover:text-gray-600 w-full text-center border border-border px-3 py-2 rounded-md  bg-[#f1f1f1] font-semibold\">
          Logout
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button
        id=\"menu-toggle\"
        class=\"md:hidden p-2 rounded-md border border-gray-300 hover:bg-gray-100\"
        aria-label=\"Toggle navigation\"
      >
        <!-- Hamburger Icon -->
        <svg id=\"menu-open-icon\" class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\"
             fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                d=\"M4 6h16M4 12h16M4 18h16\" />
        </svg>

        <!-- Close Icon -->
        <svg id=\"menu-close-icon\" class=\"h-6 w-6 hidden\" xmlns=\"http://www.w3.org/2000/svg\"
             fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                d=\"M6 18L18 6M6 6l12 12\" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id=\"mobile-menu\" class=\"md:hidden hidden border-t border-gray-200 bg-white\">
    <div class=\"px-4 py-3 flex flex-col gap-2\">
      <a href=\"/dashboard\" class=\"block text-[#262626] hover:text-gray-600 w-full text-center border border-border px-3 py-2 rounded-md  bg-[#f1f1f1] font-semibold\">Dashboard</a>
      <a href=\"/logout\"
         class=\"block text-[#262626] hover:text-gray-600 w-full text-center border border-border px-3 py-2 rounded-md  bg-[#f1f1f1] font-semibold\">
        Logout
      </a>
    </div>
  </div>
</nav>

    <!-- Main Content -->
    <main class=\"max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
        

        <div class=\"card\">
            <form id=\"editTicketForm\" class=\"space-y-6\">
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Title</label>
                    <input type=\"text\" name=\"title\" class=\"input-field\" required>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2\">Description</label>
                    <textarea name=\"description\" class=\"input-field\" rows=\"5\"></textarea>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Status</label>
                        <select name=\"status\" class=\"input-field\" required>
                            <option value=\"\" disabled selected>Select an option</option>
                            <option value=\"open\">Open</option>
                            <option value=\"in_progress\">In Progress</option>
                            <option value=\"closed\">Closed</option>
                        </select>
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Priority</label>
                        <select name=\"priority\" class=\"input-field\">
                            <option value=\"\" disabled selected>Select an option</option>
                            <option value=\"low\">Low</option>
                            <option value=\"medium\">Medium</option>
                            <option value=\"high\">High</option>
                        </select>
                    </div>
                </div>

                <div class=\"flex gap-4\">
                    <button type=\"submit\" class=\"btn-primary\">Update Ticket</button>
                    <a href=\"/dashboard/tickets\" class=\"text-[#262626] hover:text-gray-600 w-[120px] text-center border border-border px-3 py-2 rounded-md\">Cancel</a>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class=\"bg-white border-t border-gray-200 mt-12 py-8 px-4\">
        <div class=\"max-w-[1440px] mx-auto text-center text-gray-600\">
            <p>&copy; 2025 TicketFlow. All rights reserved.</p>
        </div>
    </footer>
</div>
";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "<script>
document.addEventListener('DOMContentLoaded', () => {

    // Create toast container
    const toastContainer = document.createElement('div');
    toastContainer.id = 'toastContainer';
    toastContainer.className = 'fixed top-5 right-5 z-50 space-y-3';
    document.body.appendChild(toastContainer);

    // Helper functions
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        const color =
            type === 'success'
                ? 'bg-green-600 text-white'
                : type === 'error'
                ? 'bg-red-600 text-white'
                : 'bg-gray-800 text-white';

        toast.className = `\${color} px-4 py-3 rounded-lg shadow-lg transform transition-all duration-500 opacity-0 translate-y-2`;
        toast.textContent = message;

        toastContainer.appendChild(toast);

        // Animate in
        requestAnimationFrame(() => {
            toast.classList.remove('opacity-0', 'translate-y-2');
            toast.classList.add('opacity-100', 'translate-y-0');
        });

        // Auto remove after 3s
        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-y-2');
            setTimeout(() => toast.remove(), 500);
        }, 3000);
    }

    function loadTicket() {
        const ticketId = getQueryParam('id');
        if (!ticketId) {
            showToast('No ticket ID provided', 'error');
            setTimeout(() => window.location.href = '/dashboard/tickets', 1500);
            return;
        }

        const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
        const ticket = tickets.find(t => t.id === ticketId);

        if (!ticket) {
            showToast('Ticket not found', 'error');
            setTimeout(() => window.location.href = '/dashboard/tickets', 1500);
            return;
        }

        document.querySelector('input[name=\"title\"]').value = ticket.title;
        document.querySelector('textarea[name=\"description\"]').value = ticket.description;
        document.querySelector('select[name=\"status\"]').value = ticket.status;
        document.querySelector('select[name=\"priority\"]').value = ticket.priority;
    }

    const form = document.getElementById('editTicketForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const ticketId = getQueryParam('id');
            const formData = new FormData(this);

            const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
            const index = tickets.findIndex(t => t.id === ticketId);

            if (index !== -1) {
                tickets[index] = {
                    ...tickets[index],
                    title: formData.get('title'),
                    description: formData.get('description'),
                    status: formData.get('status'),
                    priority: formData.get('priority'),
                    updatedAt: new Date().toISOString(),
                };
                localStorage.setItem('ticketapp_tickets', JSON.stringify(tickets));

                showToast('Ticket updated successfully!', 'success');

                setTimeout(() => {
                    window.location.href = '/dashboard/tickets';
                }, 1500);
            } else {
                showToast('Ticket not found!', 'error');
            }
        });
    }

    loadTicket();

     const toggleBtn = document.getElementById(\"menu-toggle\");
  const mobileMenu = document.getElementById(\"mobile-menu\");
  const openIcon = document.getElementById(\"menu-open-icon\");
  const closeIcon = document.getElementById(\"menu-close-icon\");

  toggleBtn.addEventListener(\"click\", () => {
    mobileMenu.classList.toggle(\"hidden\");
    openIcon.classList.toggle(\"hidden\");
    closeIcon.classList.toggle(\"hidden\");
  });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "edit-ticket.html.twig";
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
        return array (  188 => 114,  181 => 113,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "edit-ticket.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\edit-ticket.html.twig");
    }
}
