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

/* index.html.twig */
class __TwigTemplate_f20415a8d8fad47b1bf9dc5e7d7ef17a extends Template
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
        yield "TicketFlow - Ticket Management System";
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
        yield "<div class=\"min-h-screen flex flex-col\">
  <!-- Navigation -->
  <nav class=\"bg-[#fafafa] border-b border-gray-200 sticky top-0 z-50\">
    <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8\">
      <div class=\"flex justify-between items-center h-16\">
        <div class=\"flex items-center\">
          <h1 class=\"text-2xl font-bold text-[#004cc0]\">TicketFlow</h1>
        </div>
        <div class=\"hidden md:flex items-center gap-4\">
          ";
        // line 15
        if ((($tmp = ($context["isAuthenticated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <a href=\"/dashboard\" class=\"btn-primary text-white\">Dashboard</a>
          ";
        } else {
            // line 18
            yield "            <a href=\"/login\" class=\"text-[#262626] hover:text-gray-600 w-[120px] text-center border border-border px-3 py-2 rounded-md\">Login</a>
            <a href=\"/signup\" class=\"btn-primary\">Get Started</a>
          ";
        }
        // line 21
        yield "        </div>
        <!-- Mobile Menu Button -->
        <div class=\"md:hidden\">
          <button id=\"mobileMenuBtn\" class=\"text-[#262626]\">
            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                d=\"M4 6h16M4 12h16M4 18h16\"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id=\"mobileMenu\" class=\"hidden md:hidden bg-white border-t border-gray-200\">
      <div class=\"px-4 py-4 flex flex-col space-y-3\">
        ";
        // line 37
        if ((($tmp = ($context["isAuthenticated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "          <a href=\"/dashboard\" class=\"block btn-primary text-white font-medium\">Dashboard</a>
        ";
        } else {
            // line 40
            yield "          <a href=\"/login\" class=\"block text-[#262626] hover:text-gray-600 border border-border px-3 py-2 rounded-md text-center\">Login</a>
          <a href=\"/signup\" class=\"btn-primary text-center\">Get Started</a>
        ";
        }
        // line 43
        yield "      </div>
    </div>
  </nav>

  <!-- Hero Section -->

  <section class=\"relative py-40 md:py-20 overflow-hidden\" style=\"border:\">
  <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"grid md:grid-cols-2 gap-12 items-center\">
      <div>
        <h1 class=\"text-5xl md:text-6xl font-bold text-foreground mb-6 text-balance\">
          Manage Your Tickets Effortlessly
        </h1>
        <p class=\"text-xl text-muted-foreground mb-8 text-pretty\">
          TicketFlow is a modern ticket management system designed to
          streamline your workflow and boost productivity.
        </p>

        <div class=\"flex gap-4\">
          ";
        // line 62
        if ((($tmp = ($context["isAuthenticated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "            <a 
              href=\"/dashboard\"
              class=\"px-8 py-3 bg-primary text-primary-foreground rounded-md hover:bg-primary/90 transition font-medium btn-primary\"
            >
              Dashboard
            </a>
          ";
        } else {
            // line 70
            yield "            <a 
              href=\"/login\"
              class=\"bg-background border border-border text-black hover:bg-background px-4 py-2 rounded-md transition font-medium w-[120px] flex items-center justify-center\"
            >
              Login
            </a>
            <a 
              href=\"/signup\"
              class=\"bg-primary  btn-primary rounded-md text-primary-foreground px-4 py-2 hover:bg-primary/90 transition font-medium\"
            >
              Get Started
            </a>
          ";
        }
        // line 83
        yield "        </div>
      </div>
    </div>
      <!-- Decorative circles -->
          <div class=\"relative h-96 hidden md:block\">
            <div
              class=\"absolute top-0 right-0 w-64 h-64 bg-primary/30 rounded-full blur-3xl\"
            ></div>
            <div
              class=\"absolute bottom-0 left-0 w-48 h-48 bg-accent/30 rounded-full blur-3xl\"
            ></div>
          </div>
        </div>
  </div>
</section>


  <!-- Features Section -->
  <section class=\"bg-[#004cc0]/10 py-10 mt-[-1px]\">
    <div class=\"max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8\">
     <h2 class=\"text-4xl font-bold text-center mb-12 text-foreground\">
         Why Choose TicketFlow?
      </h2>
      <div class=\"grid md:grid-cols-3 gap-8\">
        <div class=\"card border border-border rounded-lg p-8 shadow-sm hover:shadow-md transition-shadow\">
          <div class=\"text-4xl mb-4\">✓</div>
          <h3 class=\"text-xl font-semibold mb-2 text-card-foreground\">Easy to Use</h3>
          <p class=\"text-gray-600\">Intuitive interface designed for teams of all sizes</p>
        </div>
        <div class=\"card border border-border rounded-lg p-8 shadow-sm hover:shadow-md transition-shadow\">
          <div class=\"text-4xl mb-4\">⚡</div>
          <h3 class=\"text-xl font-semibold mb-2 text-card-foreground\">Real-time Updates</h3>
          <p class=\"text-gray-600\">Stay synchronized with instant ticket status changes</p>
        </div>
        <div class=\"card border border-border rounded-lg p-8 shadow-sm hover:shadow-md transition-shadow\">
          <div class=\"text-4xl mb-4\">🔒</div>
          <h3 class=\"text-xl font-semibold mb-2 style=\"border: 3px solid green\">Secure & Reliable</h4>
          <p class=\"text-gray-600\">Your data is protected with industry-standard security</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class=\"py-20 bg-[#fafafa]\">
    <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 text-center\">
      <h2 class=\"text-4xl font-bold mb-6 text-foreground\">
        Ready to Get Started?
      </h2>
      <p class=\"text-xl text-muted-foreground mb-8 max-w-2xl mx-auto text-[#262626]\">
        Join thousands of teams using TicketFlow to manage their tickets <br />
        efficiently.
      </p>
      <a href=\"/signup\" class=\"inline-block  btn-primary rounded-lg text-white 0 font-bold py-3 px-8 rounded \">
    Start Free Today
  </a>
  </div>
    </section>


  <!-- Footer -->
 <footer class=\"border-t border-[#fafafa] py-12 bg-[#004cc0]/10\">
  <div class=\"max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"grid md:grid-cols-4 gap-8 mb-8\">
      <div>
        <h3 class=\"font-bold text-lg mb-4 text-foreground\">TicketFlow</h3>
        <p class=\"text-muted-foreground\">
          Modern ticket management for teams
        </p>
      </div>

      <div>
        <h4 class=\"font-semibold mb-4 text-foreground\">Product</h4>
        <ul class=\"space-y-2 text-muted-foreground\">
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              Features
            </a>
          </li>
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              Pricing
            </a>
          </li>
        </ul>
      </div>

      <div>
        <h4 class=\"font-semibold mb-4 text-foreground\">Company</h4>
        <ul class=\"space-y-2 text-muted-foreground\">
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              About
            </a>
          </li>
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              Contact
            </a>
          </li>
        </ul>
      </div>

      <div>
        <h4 class=\"font-semibold mb-4 text-foreground\">Legal</h4>
        <ul class=\"space-y-2 text-muted-foreground\">
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              Privacy
            </a>
          </li>
          <li>
            <a href=\"#\" class=\"hover:text-foreground transition\">
              Terms
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"border-t border-border pt-8 text-center text-muted-foreground\">
      <p>&copy; 2025 TicketFlow. All rights reserved.</p>
    </div>
  </div>
</footer>

</div>

<!-- JS -->
<script>
  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById(\"mobileMenuBtn\");
  const mobileMenu = document.getElementById(\"mobileMenu\");

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener(\"click\", () => {
      mobileMenu.classList.toggle(\"hidden\");
    });
  }

  // Initialize localStorage if needed
  if (!localStorage.getItem(\"ticketapp_tickets\")) {
    localStorage.setItem(\"ticketapp_tickets\", JSON.stringify([]));
  }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  168 => 83,  153 => 70,  144 => 63,  142 => 62,  121 => 43,  116 => 40,  112 => 38,  110 => 37,  92 => 21,  87 => 18,  83 => 16,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\index.html.twig");
    }
}
