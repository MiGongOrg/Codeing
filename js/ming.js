$(document).ready(function(){
  //顶部导航背景
  $(".nav a").each(function(){
    $this = $(this);
    if($this[0].href==String(window.location)){
      $this.addClass("hover");
    }
  });
  //tag 随机颜色
  var tags = $(".tagsColor");
  tags.each(function(){
    var x = 5;
    var y = 0;
    var rand = parseInt(Math.random() * (x - y + 1) + y);
    $(this).addClass("tags"+rand);
  });

  //提示tooltip
  $("[data-toggle='tooltip']").tooltip();

  //code desription
  $("li[data-toggle='modal']").click(function(){
    var oH2 = $(this).children().children("h2").html();
    var oArticle = $(this).children().children(".descriptionContent").html();
    $(".page-header > h2").html(oH2);
    $(".article").html(oArticle);
  });

  //full screen code js
  var oTopNav = $(".navbar").height();
  var oWinHeight = $(window).height();

  $(".fullScreen").click(function() {
    var oPreview = $(".preview").height();
    $(".description").slideToggle(500);
    $("footer").slideToggle(500);
    console.log(oPreview);
    if (oPreview > 600) {
      $(".preview").height(0);
    } else{
      $(".preview").animate({height: oWinHeight-oTopNav}, 500);
    }
  });

  // code plugin js
  var delay;
  var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
    lineNumbers: true,  //行号
    theme: "monokai",   //模板样式
    indentUnit : 4,     //缩进单位 4
    smartIndent : true, //是否智能缩进
    foldGutter: true,   //开启折叠代码
    mode: "text/html",
    viewportMargin: 1500,
    keyMap: "sublime",  //支持 sublime 快捷键
    scrollbarStyle : "simple",  //滚动条样式，"null"是没有，"native"是浏览器默认，添加 scrollbarStyle（CSS & JS）后可以定义"simple" and "overlay"
    extraKeys: {        //F11 全屏，Alt-F 搜索
      "F11": function(cm) {
        cm.setOption("fullScreen", !cm.getOption("fullScreen"));
      },
      "Esc": function(cm) {
        if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
      },
      "Ctrl-Q": function(cm){ //折叠代码快捷键
        cm.foldCode(cm.getCursor()); 
      },
      "Alt-F": "findPersistent"
    },
    gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]    //折叠
  });
  editor.foldCode(CodeMirror.Pos(5, 0));  //折叠行数
  editor.on("change", function() {        //Code 被修改时更新 Preview
    clearTimeout(delay);
    delay = setTimeout(updatePreview, 300);
  });

  function updatePreview() {
    var previewFrame = document.getElementById('preview');
    var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
    preview.open();
    preview.write(editor.getValue());
    preview.close();
  }
  editor.setSize("100%","100%");  //Code 高度和宽度
  setTimeout(updatePreview, 300);

  // 判断 Code 来源是否为空
  var oSourcecode = $(".codeBy > a").attr("href");
  if (oSourcecode === "") {
    $(".codeBy > a").attr("href","javascript:;");
  }

});

//About Me
console.log('%cAbout Me http://demo.migong.org/about/','background-image:-webkit-gradient( linear, left top, right top, color-stop(0, #fac),color-stop(1, #abc) );color:transparent;-webkit-background-clip: text;font-size:1em;');