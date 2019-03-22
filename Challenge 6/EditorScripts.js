const CSS_EXAMPLE_TEXT =
"h2{\n" +
"\tcolor: #FF6F61;\n" +
"\ttext-align: center;\n" +
"}\n\n" +
"p{\n" +
"\tfont-family: helvetica;\n" +
"\tfont-size: 20px;\n" +
"\tborder: 2px solid red;\n" +
"\tborder-radius: 12px;\n}";

function autoFillCSS(){
  var cssTextArea = document.getElementById('cssTextArea');
  if(cssTextArea == null)
  {
    console.log("cssTextArea null");
    return;
  }
  cssTextArea.value = CSS_EXAMPLE_TEXT;
}

const HTML_EXAMPLE_TEXT =
"<h2> Welcome to my text editor!</h2>\n" +
"<p>You can test and create your own HTML and CSS in this text editor</p>"

function autoFillHTML(){
  var htmlTextArea = document.getElementById("htmlTextArea");
  if(htmlTextArea == null)
  {
    console.log("htmlTextArea is null");
    return;
  }
  htmlTextArea.value = HTML_EXAMPLE_TEXT;
}

function populateHTML(){
  var htmlTextArea = document.getElementById("htmlTextArea");
  var previewDiv = document.getElementById("previewDiv")
  if(htmlTextArea == null || previewDiv == null)
  {
    console.log("failure to populate html");
    return;
  }

  previewDiv.innerHTML = htmlTextArea.value;
}

function addSelectorToCSS(content){
  console.log(content);
  var lines = content.split("\n");
  var buildUp = "";
  for(var i = 0; i < lines.length; i++){
    console.log(lines[i]);
    if(lines[i].indexOf("{") == -1){
      buildUp += lines[i] + "\n";
    }else{
      buildUp += "#previewDiv " + lines[i] + "\n"
    }

  }
  return buildUp;
}

var toggle = false;
function toggleCSS(){

  var CSSButton = document.getElementById("CSSButton");
  var style = document.getElementById("editableCSS");
  var cssTextArea = document.getElementById('cssTextArea');

  toggle = !toggle;
  if(toggle){
    CSSButton.style.backgroundColor = "yellow";
    style.innerHTML = addSelectorToCSS(cssTextArea.value);
  } else{
    CSSButton.style.backgroundColor = "green";
    style.innerHTML = "";
  }

}

function eraseTextAreaContent(){
  var cssTextArea = document.getElementById('cssTextArea');
  var CSSButton = document.getElementById("CSSButton");
  if(cssTextArea != null)
  {
    cssTextArea.value = "";
    toggle = false;
    CSSButton.style.backgroundColor = "green";
  }
  var htmlTextArea = document.getElementById("htmlTextArea");
  var style = document.getElementById("editableCSS");
  {
    htmlTextArea.value = "";
    style.innerHTML = "";
  }

  var previewDiv = document.getElementById("previewDiv");
  previewDiv.innerHTML = "";
}

function changeTitle(){
  var title = document.getElementsByTagName("title")[0];
  var header = document.getElementById("mainHeader");
  var prompt = window.prompt("Enter a new title", title.innerHTML);
  if(prompt == null || prompt == "")
    return;
  title.innerHTML = prompt;
  header.innerHTML = prompt;
}
