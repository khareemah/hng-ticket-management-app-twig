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

/* dashboard.html.twig */
class __TwigTemplate_4d7eca64a3f8ceba64a24a059c5571ec extends Template
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
        yield "Dashboard - TicketFlow";
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
                <h1 class=\"text-2xl font-bold text-blue-600\">TicketFlow</h1>
                <div class=\"hidden md:flex items-center gap-4\">
                    <a href=\"/dashboard/tickets\" class=\"btn-primary\">Manage Tickets</a>
                    <a href=\"/logout\" class=\"btn-secondary\">Logout</a>
                </div>
                <div class=\"md:hidden\">
                    <button id=\"mobileMenuBtn\" class=\"text-gray-700\">
                        <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
        <div class=\"mb-8\">
            <h2 class=\"text-3xl font-bold\">Dashboard</h2>
            <p class=\"text-gray-600\">Welcome back, ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
        </div>

        <!-- Stats Grid -->
        <div class=\"grid md:grid-cols-4 gap-6 mb-12\">
            <div class=\"card\">
                <p class=\"text-gray-600 text-sm font-medium mb-2\">Total Tickets</p>
                <p class=\"text-4xl font-bold text-blue-600\" id=\"totalTickets\">0</p>
            </div>
            <div class=\"card\">
                <p class=\"text-gray-600 text-sm font-medium mb-2\">Open</p>
                <p class=\"text-4xl font-bold text-green-600\" id=\"openTickets\">0</p>
            </div>
            <div class=\"card\">
                <p class=\"text-gray-600 text-sm font-medium mb-2\">In Progress</p>
                <p class=\"text-4xl font-bold text-orange-600\" id=\"inProgressTickets\">0</p>
            </div>
            <div class=\"card\">
                <p class=\"text-gray-600 text-sm font-medium mb-2\">Closed</p>
                <p class=\"text-4xl font-bold text-gray-600\" id=\"closedTickets\">0</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class=\"card\">
            <h3 class=\"text-xl font-bold mb-6\">Quick Actions</h3>
            <div class=\"flex gap-4 flex-wrap\">
                <a href=\"/dashboard/tickets/create\" class=\"btn-primary\">Create New Ticket</a>
                <a href=\"/dashboard/tickets\" class=\"btn-secondary\">View All Tickets</a>
            </div>
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

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "<script>
    function updateStats() {
        const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
        document.getElementById('totalTickets').textContent = tickets.length;
        document.getElementById('openTickets').textContent = tickets.filter(t => t.status === 'open').length;
        document.getElementById('inProgressTickets').textContent = tickets.filter(t => t.status === 'in_progress').length;
        document.getElementById('closedTickets').textContent = tickets.filter(t => t.status === 'closed').length;
    }
    updateStats();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.html.twig";
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
        return array (  151 => 74,  144 => 73,  98 => 31,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\dashboard.html.twig");
    }
}
