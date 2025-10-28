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

/* create-ticket.html.twig */
class __TwigTemplate_87b874eee8668577e87afc69d6d5a843 extends Template
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
        yield "Create Ticket - TicketFlow";
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
    <main class=\"max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
        <div class=\"mb-8\">
            <h2 class=\"text-3xl font-bold\">Create New Ticket</h2>
            <p class=\"text-gray-600\">Add a new ticket to your system</p>
        </div>

        <div class=\"card\">
            <form id=\"createTicketForm\" class=\"space-y-6\">
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Title</label>
                    <input type=\"text\" name=\"title\" class=\"input-field\" required>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2\">Description</label>
                    <textarea name=\"description\" class=\"input-field\" rows=\"5\" required></textarea>
                </div>

                <div class=\"grid md:grid-cols-2 gap-6\">
                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Status</label>
                        <select name=\"status\" class=\"input-field\" required>
                            <option value=\"open\">Open</option>
                            <option value=\"in_progress\">In Progress</option>
                            <option value=\"closed\">Closed</option>
                        </select>
                    </div>

                    <div>
                        <label class=\"block text-sm font-medium mb-2\">Priority</label>
                        <select name=\"priority\" class=\"input-field\" required>
                            <option value=\"low\">Low</option>
                            <option value=\"medium\">Medium</option>
                            <option value=\"high\">High</option>
                        </select>
                    </div>
                </div>

                <div class=\"flex gap-4\">
                    <button type=\"submit\" class=\"btn-primary\">Create Ticket</button>
                    <a href=\"/dashboard/tickets\" class=\"btn-secondary\">Cancel</a>
                </div>
            </form>
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

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "<script>
    document.getElementById('createTicketForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const ticket = {
            id: Math.random().toString(36).substr(2, 9),
            title: formData.get('title'),
            description: formData.get('description'),
            status: formData.get('status'),
            priority: formData.get('priority'),
            createdAt: new Date().toISOString(),
            updatedAt: new Date().toISOString(),
        };

        const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
        tickets.push(ticket);
        localStorage.setItem('ticketapp_tickets', JSON.stringify(tickets));

        alert('Ticket created successfully!');
        window.location.href = '/dashboard/tickets';
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
        return "create-ticket.html.twig";
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
        return array (  151 => 77,  144 => 76,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "create-ticket.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\create-ticket.html.twig");
    }
}
