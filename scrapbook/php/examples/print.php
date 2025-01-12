<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output to page - PHP - Kilted Viking's Scrapbook</title>
    <link rel="stylesheet" href="/css/prism/prism.css" />
    <link rel="stylesheet" href="../../scrapbook-examples.css" />
</head>
<body>
    <div class="container">
        <?php 
            // 2024-12-22Doesn't work in Bitnami...
            // error_reporting(E_ALL); 
            // ini_set("display_errors", 1);
        ?>
        <h1>Output to page</h1>
        <p>This page displays output using PHP functions <code>print</code> and <code>echo</code>.</p>

        <hr />
        <h2>Function <code>print</code></h2>
        <p>Function accepts an expression (like a string) as argument which is output as a string. 
            (Parenthesis around argument aren't required and the function always returns 1.)</p>

        <h3>Code</h3>
        <p></p>

        <pre><code class="language-php">&lt;?php
    print &quot;Hello PHP!&quot;;
?&gt;</code></pre>

        <h3>Result</h3>
        <p>
            <?php
                print "Hello PHP!";
            ?>
        </p>

        <hr />
        <h2>Function <code>echo</code></h2>
        <p>Function accepts one or more arguments which are output as string and parenthesis
            aren't allowed (and function doesn't return anything).</p>

        <h3>Code</h3>
        <pre><code class="language-php">&lt;?php
    echo &quot;Hello PHP!&quot;, &quot; &quot;, &quot;This is output using <code>echo</code> function.&quot;;
?&gt;</code></pre>

        <p>Second argument is a space to add space between the two sentences.</p>

        <h3>Result</h3>
        <p>
            <?php
                echo "Hello PHP!", " ", "This is output using <code>echo</code> function.";
            ?>
        </p>

        <hr />
        <footer>
            <p><b>Created by:</b> Bj&ouml;rn G. D. Persson. <b>Updated:</b> 2024-12-22.</p>
        </footer>
    </div>
    <script src="/js/prism/prism.js"></script>
</body>
</html>