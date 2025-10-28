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
    <nav class=\"bg-white border-b border-gray-200 sticky top-0 z-50\">
        <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
            <div class=\"flex justify-between items-center h-16\">
                <div class=\"flex items-center\">
                    <h1 class=\"text-2xl font-bold text-purple-600\">TicketFlow</h1>
                </div>
                <div class=\"hidden md:flex items-center gap-4\">
                    ";
        // line 15
        if ((($tmp = ($context["isAuthenticated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "                        <a href=\"/dashboard\" class=\"text-gray-700 hover:text-purple-600\">Dashboard</a>
                    ";
        } else {
            // line 18
            yield "                        <a href=\"/login\" class=\"text-gray-700 hover:text-purple-600\">Login</a>
                        <a href=\"/register\" class=\"btn-primary\">Get Started</a>
                    ";
        }
        // line 21
        yield "                </div>
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

    <!-- Hero Section -->
    <section class=\"flex-1 flex items-center justify-center px-4 py-20\">
        <div class=\"max-w-4xl mx-auto text-center\">
            <h2 class=\"text-5xl font-bold mb-6 text-gray-900\">Manage Your Tickets Effortlessly</h2>
            <p class=\"text-xl text-gray-600 mb-8\">TicketFlow is a modern ticket management system designed to streamline your workflow and boost productivity.</p>
            <div class=\"flex gap-4 justify-center flex-wrap\">
                ";
        // line 39
        if ((($tmp = ($context["isAuthenticated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                    <a href=\"/dashboard\" class=\"btn-primary text-lg px-8 py-3\">Dashboard</a>
                ";
        } else {
            // line 42
            yield "                    <a href=\"/login\" class=\"btn-primary text-lg px-8 py-3\">Login</a>
                    <a href=\"/register\" class=\"btn-secondary text-lg px-8 py-3\">Get Started</a>
                ";
        }
        // line 45
        yield "            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class=\"bg-gray-50 py-20 px-4\">
        <div class=\"max-w-6xl mx-auto\">
            <h3 class=\"text-3xl font-bold text-center mb-12\">Why Choose TicketFlow?</h3>
            <div class=\"grid md:grid-cols-3 gap-8\">
                <div class=\"card text-center\">
                    <div class=\"text-4xl mb-4\">✓</div>
                    <h4 class=\"text-xl font-bold mb-2\">Easy to Use</h4>
                    <p class=\"text-gray-600\">Intuitive interface designed for teams of all sizes</p>
                </div>
                <div class=\"card text-center\">
                    <div class=\"text-4xl mb-4\">⚡</div>
                    <h4 class=\"text-xl font-bold mb-2\">Real-time Updates</h4>
                    <p class=\"text-gray-600\">Stay synchronized with instant ticket status changes</p>
                </div>
                <div class=\"card text-center\">
                    <div class=\"text-4xl mb-4\">🔒</div>
                    <h4 class=\"text-xl font-bold mb-2\">Secure & Reliable</h4>
                    <p class=\"text-gray-600\">Your data is protected with industry-standard security</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class=\"bg-purple-600 text-white py-20 px-4\">
        <div class=\"max-w-4xl mx-auto text-center\">
            <h3 class=\"text-3xl font-bold mb-4\">Ready to Get Started?</h3>
            <p class=\"text-lg mb-8\">Join thousands of teams using TicketFlow to manage their tickets efficiently.</p>
            <a href=\"/signup\" class=\"inline-block bg-white text-purple-600 font-bold py-3 px-8 rounded hover:bg-gray-100\">Start Free Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"bg-gray-900 text-white py-12 px-4\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"grid md:grid-cols-3 gap-8 mb-8\">
                <div>
                    <h4 class=\"font-bold mb-4\">TicketFlow</h4>
                    <p class=\"text-gray-400\">Modern ticket management for teams</p>
                </div>
                <div>
                    <h4 class=\"font-bold mb-4\">Product</h4>
                    <ul class=\"text-gray-400 space-y-2\">
                        <li><a href=\"#\" class=\"hover:text-white\">Features</a></li>
                        <li><a href=\"#\" class=\"hover:text-white\">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class=\"font-bold mb-4\">Company</h4>
                    <ul class=\"text-gray-400 space-y-2\">
                        <li><a href=\"#\" class=\"hover:text-white\">About</a></li>
                        <li><a href=\"#\" class=\"hover:text-white\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"border-t border-gray-800 pt-8 text-center text-gray-400\">
                <p>&copy; 2025 TicketFlow. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
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
        return array (  123 => 45,  118 => 42,  114 => 40,  112 => 39,  92 => 21,  87 => 18,  83 => 16,  81 => 15,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\index.html.twig");
    }
}
