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

/* base.html.twig */
class __TwigTemplate_ca5be053bf468727a92e9873f810f4ea extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extra_css' => [$this, 'block_extra_css'],
            'content' => [$this, 'block_content'],
            'extra_js' => [$this, 'block_extra_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <style>
        :root {
            <!-- Updated all color variables from purple to blue to match original design -->
            --background: #faf8f6;
            --foreground: #262420;
            --card: #ffffff;
            --card-foreground: #262420;
            --primary: #004cc0;
            --primary-foreground: #ffffff;
            --secondary: #ddf4ff;
            --secondary-foreground: #262420;
            --muted: #ddf4ff;
            --muted-foreground: #79747e;
            --accent: #0969da;
            --accent-foreground: #ffffff;
            --destructive: #b3261e;
            --destructive-foreground: #ffffff;
            --border: #ddf4ff;
            --input: #f5f3f0;
            --ring: #0969da;
            --status-open: #4caf50;
            --status-in-progress: #ff9800;
            --status-closed: #757575;
        }

        body {
            background-color: var(--background);
            color: var(--foreground);
            font-family: \"Geist\", system-ui, -apple-system, sans-serif !important;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--primary-foreground);
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: opacity 0.2s;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--secondary-foreground);
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: 1px solid var(--border);
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .btn-secondary:hover {
            background-color: var(--border);
        }

        .input-field {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid var(--border);
            border-radius: 0.375rem;
            background-color: var(--input);
            color: var(--foreground);
            font-size: 1rem;
        }

        .input-field:focus {
            outline: none;
            border-color: var(--ring);
            box-shadow: 0 0 0 3px rgba(9, 105, 218, 0.1);
        }

        .card {
            background-color: var(--card);
            color: var(--card-foreground);
            border-radius: 0.5rem;
            border: 1px solid var(--border);
            padding: 1.5rem;
        }

        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
        }

             .status-pill {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: capitalize;
}
  .status-open {
  background-color: rgba(85, 107, 47, 0.12);
  color: #556b2f; 
}

.status-total {
  background-color: rgba(59, 130, 246, 0.1); /* soft blue tint */
  color: #2563eb; /* Tailwind blue-600 */
}
    .status-in_progress {
  background-color: rgba(245, 124, 0, 0.1);
  color: #f57c00;
}

        .status-closed {
            background-color: rgba(117, 117, 117, 0.1);
            color: var(--status-closed);
        }

        .priority-high {
            color: #d32f2f;
        }

        .priority-medium {
            color: #f57c00;
        }

        .priority-low {
            color: #388e3c;
        }

        .error-message {
            background-color: rgba(179, 38, 30, 0.1);
            color: #b3261e;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
        }

        .success-message {
            background-color: rgba(76, 175, 80, 0.1);
            color: #4caf50;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
        }
    </style>
    ";
        // line 156
        yield from $this->unwrap()->yieldBlock('extra_css', $context, $blocks);
        // line 157
        yield "</head>
<body>
    ";
        // line 159
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 160
        yield "    <script src=\"/js/app.js\"></script>
    ";
        // line 161
        yield from $this->unwrap()->yieldBlock('extra_js', $context, $blocks);
        // line 162
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "TicketFlow - Ticket Management System";
        yield from [];
    }

    // line 156
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  257 => 161,  247 => 159,  237 => 156,  226 => 6,  219 => 162,  217 => 161,  214 => 160,  212 => 159,  208 => 157,  206 => 156,  53 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\user\\Desktop\\twig ticket app\\templates\\base.html.twig");
    }
}
