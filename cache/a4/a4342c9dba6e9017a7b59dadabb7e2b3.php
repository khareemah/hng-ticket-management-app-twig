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
  <!-- Include Alpine.js if not already -->
<script src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\" defer></script>

<nav x-data=\"{ open: false }\" class=\"bg-white border-b border-gray-200 backdrop-blur-md\">
  <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"flex justify-between items-center py-3\">
      <!-- Left Section -->
      <div>
        <h2 class=\"text-3xl font-bold\">Dashboard</h2>
        <p class=\"text-gray-600\">Welcome back, ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
      </div>

      <!-- Desktop Links -->
      <div class=\"hidden md:flex items-center gap-4\">
        <a href=\"/dashboard/tickets\" class=\"btn-primary\">Manage Tickets</a>
        <a href=\"/logout\" class=\"btn-secondary bg-[#fafafa] hover:bg-[#fafafa]\">Logout</a>
      </div>

      <!-- Mobile Menu Button -->
      <div class=\"md:hidden\">
        <button 
          @click=\"open = !open\" 
          class=\"text-gray-700 focus:outline-none\"
          aria-label=\"Toggle navigation\"
        >
          <svg 
            x-show=\"!open\"
            xmlns=\"http://www.w3.org/2000/svg\" 
            class=\"w-6 h-6\" 
            fill=\"none\" 
            viewBox=\"0 0 24 24\" 
            stroke=\"currentColor\"
          >
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" 
              d=\"M4 6h16M4 12h16M4 18h16\" />
          </svg>
          <svg 
            x-show=\"open\"
            xmlns=\"http://www.w3.org/2000/svg\" 
            class=\"w-6 h-6\" 
            fill=\"none\" 
            viewBox=\"0 0 24 24\" 
            stroke=\"currentColor\"
          >
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" 
              d=\"M6 18L18 6M6 6l12 12\" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Dropdown Menu -->
  <div 
    x-show=\"open\"
    x-transition
    class=\"md:hidden border-t border-gray-200 bg-white\"
  >
    <div class=\"px-4 py-3 space-y-2\">
      <a href=\"/dashboard/tickets\" class=\"block w-full text-center btn-primary\">Manage Tickets</a>
      <a href=\"/logout\" class=\"block w-full text-center btn-secondary bg-[#fafafa] hover:bg-[#fafafa]\">Logout</a>
    </div>
  </div>
</nav>


    <!-- Main Content -->
    <main class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-[#fafafa]\">
        
        <!-- Stats Grid -->
        <div class=\"grid md:grid-cols-4 gap-6 mb-12\">
  <div class=\"card border shadow-sm border-border p-4\">
    <span class=\"status-pill status-total font-medium\">Total tickets</span>
    <p class=\"text-4xl font-bold text-blue-600\" id=\"totalTickets\">0</p>
  </div>

  <div class=\"card border shadow-sm border-border p-4\">
    <div class=\"flex items-center justify-between mb-2\">
      <span class=\"status-pill status-open font-medium\">Open</span>
    </div>
    <p class=\"text-4xl font-bold text-[#556b2f]\" id=\"openTickets\">0</p>
  </div>

  <div class=\"card border shadow-sm border-border p-4\">
    <div class=\"flex items-center justify-between mb-2\">
      <span class=\"status-pill status-in_progress font-medium\">In progress</span>
 
    </div>
    <p class=\"text-4xl font-bold text-orange-600\" id=\"inProgressTickets\">0</p>
  </div>

  <div class=\"card border shadow-sm border-border p-4\">
    <div class=\"flex items-center justify-between mb-2\">
      <span class=\"status-pill status-closed\">Closed</span>
    </div>
    <p class=\"text-4xl font-bold text-gray-600\" id=\"closedTickets\">0</p>
  </div>
</div>


        <!-- Quick Actions -->
        <div class=\"card\">
            <h3 class=\"text-3xl font-bold mb-6\">Quick Actions</h3>
            <div class=\"flex gap-4 flex flex-col md:flex-row\">
                <a href=\"/dashboard/tickets/create\" class=\"btn-primary text-center flex-1\">Create New Ticket</a>
                <a href=\"/dashboard/tickets\" class=\"btn-secondary text-center border border-border bg-[#f1f1f1] hover:bg-[#f1f1f1] flex-1\">View All Tickets</a>
            </div>
        </div>
    </main>

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

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 128
        yield "<script>
    function updateStats() {
        const tickets = JSON.parse(localStorage.getItem('ticketapp_tickets') || '[]');
        document.getElementById('totalTickets').textContent = tickets.length;
        document.getElementById('openTickets').textContent = tickets.filter(t => t.status === 'open').length;
        document.getElementById('inProgressTickets').textContent = tickets.filter(t => t.status === 'in_progress').length;
        document.getElementById('closedTickets').textContent = tickets.filter(t => t.status === 'closed').length;
    }
    updateStats();

      // === Responsive navbar toggle ===
  document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuBtn && mobileMenu) {
      menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }
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
        return array (  205 => 128,  198 => 127,  84 => 17,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\dashboard.html.twig");
    }
}
