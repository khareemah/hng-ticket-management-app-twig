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
    <!-- Navigation -->
    <nav class=\"bg-white border-b border-gray-200\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"flex justify-between items-center h-16\">
                <h1 class=\"text-2xl font-bold text-purple-600\">TicketFlow</h1>
                <div class=\"hidden md:flex items-center gap-4\">
                    <a href=\"/dashboard\" class=\"text-gray-700 hover:text-purple-600\">Dashboard</a>
                    <a href=\"/logout\" class=\"btn-secondary\">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
        <div class=\"flex justify-between items-center mb-8\">
            <div>
                <h2 class=\"text-3xl font-bold\">Tickets</h2>
                <p class=\"text-gray-600\">Manage all your tickets</p>
            </div>
            <a href=\"/dashboard/tickets/create\" class=\"btn-primary\">Create Ticket</a>
        </div>

        <!-- Filters -->
        <div class=\"card mb-6\">
            <div class=\"flex gap-4 flex-wrap\">
                <button class=\"filter-btn active\" data-filter=\"all\">All</button>
                <button class=\"filter-btn\" data-filter=\"open\">Open</button>
                <button class=\"filter-btn\" data-filter=\"in_progress\">In Progress</button>
                <button class=\"filter-btn\" data-filter=\"closed\">Closed</button>
            </div>
        </div>

        <!-- Tickets List -->
        <div id=\"ticketsList\" class=\"space-y-4\">
            <!-- Tickets will be loaded here by JavaScript -->
        </div>
    </main>

    <!-- Footer -->
    <footer class=\"bg-white border-t border-gray-200 mt-12 py-8 px-4\">
        <div class=\"max-w-7xl mx-auto text-center text-gray-600\">
            <p>&copy; 2025 TicketFlow. All rights reserved.</p>
        </div>
    </footer>
</div>
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "<style>
    .filter-btn {
        padding: 0.5rem 1rem;
        border: 1px solid var(--border);
        border-radius: 0.375rem;
        background-color: white;
        cursor: pointer;
        transition: all 0.2s;
    }

    .filter-btn.active {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
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
    }

    .ticket-card:hover {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "<script>
    let currentFilter = 'all';

    function loadTickets() {
        const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
        const filtered = currentFilter === 'all' ? tickets : tickets.filter(t => t.status === currentFilter);
        
        const ticketsList = document.getElementById('ticketsList');
        
        if (filtered.length === 0) {
            ticketsList.innerHTML = '<div class=\"card text-center py-12\"><p class=\"text-gray-600\">No tickets found</p></div>';
            return;
        }

        ticketsList.innerHTML = filtered.map(ticket => `
            <div class=\"ticket-card\">
                <div class=\"flex-1\">
                    <h3 class=\"text-lg font-bold mb-2\">\${ticket.title}</h3>
                    <p class=\"text-gray-600 mb-3\">\${ticket.description}</p>
                    <div class=\"flex gap-2 flex-wrap\">
                        <span class=\"status-badge status-\${ticket.status}\">\${ticket.status.replace('_', ' ')}</span>
                        <span class=\"priority-\${ticket.priority} font-medium\">\${ticket.priority.charAt(0).toUpperCase() + ticket.priority.slice(1)} Priority</span>
                    </div>
                </div>
                <div class=\"flex gap-2\">
                    <a href=\"/dashboard/tickets/edit?id=\${ticket.id}\" class=\"btn-secondary text-sm\">Edit</a>
                    <button onclick=\"deleteTicket('\${ticket.id}')\" class=\"btn-secondary text-sm bg-red-50 text-red-600 hover:bg-red-100\">Delete</button>
                </div>
            </div>
        `).join('');
    }

    function deleteTicket(id) {
        if (confirm('Are you sure you want to delete this ticket?')) {
            const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
            const filtered = tickets.filter(t => t.id !== id);
            localStorage.setItem('ticketapp_tickets', JSON.stringify(filtered));
            loadTickets();
        }
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
        return array (  174 => 90,  167 => 89,  131 => 56,  124 => 55,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tickets.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\tickets.html.twig");
    }
}
