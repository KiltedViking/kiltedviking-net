<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ditt namn &auml;r</title>
  <style>
    body { font-family: Verdana, Helvetica, sans-serif; }
  </style>
</head>
<body>
  <h1>Behandlande PHP-sida</h1>
  <p>Ditt namn är <b><?= $_REQUEST['txtNamn'] ?></b></p>
  <hr />
  <h2>Koden i detta PHP-dokument</h2>
  <p><tt><font color="#0000c0">&lt;html&gt;<br />
  &lt;head&gt;<br />
  &nbsp; &lt;title&gt;</font>Ditt namn &amp;auml;r<font color="#0000c0">&lt;/title&gt;<br />
  &lt;/head&gt;<br />
  &lt;body&gt;<br />
  &nbsp; &lt;h1&gt;</font><font color="#000000">Behandlande PHP-sida</font><font color="#0000c0">&lt;/h1&gt;<br />
  &nbsp; &lt;p&gt;</font><font color="#000000">Ditt namn &amp;auml;r </font><font color="#0000c0">&lt;b&gt;</font><font color="#800000">&lt;?= $_REQUEST[&apos;txtNamn&apos;] ?&gt;</font><font color="#0000c0">&lt;b&gt;&lt;/p&gt;</font><br />
  <font color="#0000c0">
  &lt;/body&gt;<br />
  &lt;/html&gt;</font>
  </tt></p>
</body>
</html>
