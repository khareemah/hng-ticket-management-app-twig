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

/* login.html.twig */
class __TwigTemplate_a549fb4d92e5bf35ddcc1794888c0ad4 extends Template
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
        yield "Login - TicketFlow";
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
        yield "<div class=\"min-h-screen bg-[#f1f1f1] flex items-center justify-center px-4 py-12\">
    <div class=\"w-full max-w-md\">
        <div class=\"card\">
            <h2 class=\"text-3xl font-bold mb-1\">Welcome Back</h2>
            <p class=\"text-gray-600 mb-6\">Sign in to your TicketFlow account</p>

            ";
        // line 12
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                <div class=\"mb-4 p-3 rounded-lg bg-red-100 border border-red-300 text-red-700 text-sm font-normal\">
                ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 17
        yield "
            <form method=\"POST\" class=\"space-y-4\">
                <div>
                    <label class=\"block text-sm font-medium mb-2\">Email</label>
                    <input type=\"email\" name=\"email\" class=\"input-field\" required>
                </div>

                <div>
                    <label class=\"block text-sm font-medium mb-2\">Password</label>
                    <input type=\"password\" name=\"password\" class=\"input-field\" required>
                </div>

                <button type=\"submit\" class=\"btn-primary w-full py-2\">Sign In</button>
            </form>

            <p class=\"text-center mt-6 text-gray-600\">
                Don't have an account? <a href=\"/signup\" class=\"text-blue-600 hover:underline font-semibold\">Sign up</a>
            </p>

            <div class=\"mt-8 pt-8 border-t border-gray-200\">
                <p class=\"text-sm font-medium mb-3\">Demo Credentials:</p>
                <p class=\"text-sm text-gray-600  \">Email: <span class=\"bg-gray-100 px-2 py-1  bg-[#CFE5FF] rounded\">test@example.com</span></p>
                <p class=\"text-sm text-gray-600\">Password: <span class=\"bg-gray-100 px-2 py-1 bg-[#CFE5FF] rounded\">password123</span></p>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.html.twig";
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
        return array (  89 => 17,  83 => 14,  80 => 13,  78 => 12,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\login.html.twig");
    }
}
