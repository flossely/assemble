<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Assemble</title>
<link rel="shortcut icon" href="favicon.png?rev=<?=time();?>" type="image/x-icon">
<style>
body, font, a, p, b, i, strong, em, li {
    background-color: #dcdad5;
    color: #222222;
    font-family: sans-serif;
    font-size: 14pt;
}
table, tr, td, th {
    background-color: #dcdad5;
    color: #000;
    font-family: sans-serif;
    font-size: 14pt;
    text-align: center;
}
input[type=text], textarea {
    background-color: #fff;
    color: #000;
    box-sizing: border-box;
    box-shadow: inset -1px -1px #0a0a0a, inset 1px 1px #fff, inset -1.5px -1.5px #808080, inset 1.5px 1.5px #dfdfdf;
    font-family: sans-serif;
    font-size: 14pt;
}
input[type=button], select {
    background-color: #dfdfdf;
    color: #000;
    box-sizing: border-box;
    box-shadow: inset -1px -1px #0a0a0a, inset 1px 1px #fff, inset -2px -2px #808080, inset 2px 2px #dfdfdf;
    font-family: sans-serif;
    font-size: 14pt;
}
.top {
    border: none;
    position: absolute;
    width: 98%;
    height: 15%;
    top: 0%;
}
.panel {
    border: none;
    position: absolute;
    width: 96%;
    height: 82%;
    top: 15%;
    overflow-y: scroll;
}
.actionButton {
    background-color: #c0c0c0;
    color: #000;
    font-size: 16pt;
    width: 29px;
    position: relative;
}
.inputPanel {
    background-color: #fff;
    color: #000;
    border: none;
    text-align: center;
    position: relative;
    font-family: sans-serif;
    font-size: 16pt;
    overflow-x: scroll;
    width: 90%;
    height: 40%;
}
.outputPanel {
    background-color: #fff;
    color: #000;
    border: none;
    text-align: center;
    position: relative;
    font-family: sans-serif;
    font-size: 16pt;
    overflow-x: scroll;
    width: 90%;
    height: 40%;
}
.actionIcon {
    height: 10%;
    position: relative;
}
</style>
<script>
function get(key, pkg, repo, user) {
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.location.reload();
        }
    }
    xmlhttp.open("GET","get.php?key="+key+"&pkg="+pkg+"&repo="+repo+"&user="+user,false);
    xmlhttp.send();
}
function seq(data) {
    var arr = data.toString('').split(';');
    for (var el of arr) {
        var sp = el.toString('').split(',');
        var key = sp[0];
        var pkg = sp[1];
        var repo = sp[2];
        var user = sp[3];
        if (window.XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        } else {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.location.reload();
            }
        }
        xmlhttp.open("GET","get.php?key="+key+"&pkg="+pkg+"&repo="+repo+"&user="+user,false);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<h2 align='center'>Welcome to the Web System Initial Setup</h2>
<p align='center'>Select the package set you want to install:</p>
<p align='center'>
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,hsis,flossely;');" value="Base Package">
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,write,flossely;i,from,delete,flossely;i,from,move,flossely;i,from,copy,flossely;i,from,libedit,flossely;i,from,hsis,flossely;');" value="Advanced Package">
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,entity,flossely;i,from,manager,flossely;i,from,hsis,flossely;');" value="Manager Package">
</p>
</body>
</html>
