<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <header>
		<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
	</header>

  <main>
    <div id="center">
      <noscript>
        <b>Warning: JavaScript had to be enabled.</b>
        <br><br>
      </noscript>

      <div id="details-div">
        <details>
          <summary>How to use</summary>
          <p>Bookmarklets are browser bookmarks that execute JavaScript instead of opening a webpage. They're also known as bookmark applets, favlets, or JavaScript bookmarks.</p>
          <ol>
            <li>Type or paste your JavaScript code into the textbox.</li>
            <li>Drag and drop your bookmarklet to your browsers bookmark toolbar.</li>
          </ol>
        </details>
      </div>

      <form>
        <label for="title-input">Title:</label>
        <input id="title-input" onkeyup="generateBookmarklet()" value=""></input>
      </form>

      <form>
        <label for="code-textarea">Code:</label>
        <textarea id="code-textarea" onkeyup="generateBookmarklet()"></textarea>
      </form>

      <div id="actions">
        <div id="bookmark-div">
          <p>Bookmarklet:</p>
          <a id="bookmarklet-a" href="" title="Drag your bookmarklet to your bookmarks"></a>
        </div>

        <div id="buttons">
          <button onclick="runCode();" title="Test your bookmarklet">Run code</button>
          <button onclick="clearCode();" title="Clear the code textarea">Clear code</button>
        </div>
      </div>

      <hr>
      <div id="info">
        <form>
          <details id="output-details">
            <summary>More info</summary>
            <div id="output-div">
              <label for="output-textarea">Output:</label>
              <textarea id="output-textarea" readonly></textarea>
            </div>
          </details>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
