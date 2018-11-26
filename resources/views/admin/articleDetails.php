<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>编辑文章</title>
</head>
<body>
<div id="editor">


</div>
<button id="btn1">获取html</button>
<button id="btn2">获取text</button>

<!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->
<script type="text/javascript" src="/js/admin/wangEditor.js"></script>
<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.create()

    document.getElementById('btn1').addEventListener('click', function () {
        // 读取 html
        alert(editor.txt.html())
    }, false)

    document.getElementById('btn2').addEventListener('click', function () {
        // 读取 text
        alert(editor.txt.text())
    }, false)

</script>
</body>
</html>