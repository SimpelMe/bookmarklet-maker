function generateBookmarklet(){
  var title = document.getElementById("title-input").value ;
  var code  = document.getElementById("code-textarea").value;
  var link  = document.getElementById("bookmarklet-a");
  var codeOutput = document.getElementById("output-textarea");

  var output = "javascript:" +  encodeURIComponent("(function(){" + cleanCode(code) +  "})();");

  link.text = title;
  link.href = output;
  codeOutput.value = output;
}

function runCode(){
  var code  = document.getElementById("code-textarea").value;
  eval(code);
}

function clearCode(){
  document.getElementById("title-input").value = "";
  document.getElementById("code-textarea").value = "";
  document.getElementById("output-textarea").value = "";
}

function cleanCode(code){
  return code.trim()
}
