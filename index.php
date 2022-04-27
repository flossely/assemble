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
function get(key, host = '', pkg, repo, branch = '', user, bulk) {
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            if (bulk !== true) {
                document.location.reload();
            }
        }
    }
    xmlhttp.open("GET","get.php?key="+key+"&host="+host+"&pkg="+pkg+"&repo="+repo+"&branch="+branch+"&user="+user,false);
    xmlhttp.send();
}
function getPackage(layout) {
    if (layout == 'fine') {
        get('i','','from','base','','flossely',true);
        get('i','','from','file','','flossely',true);
        get('i','','from','entity','','flossely',true);
        get('i','','from','nerdamer','','flossely',true);
        get('i','','from','msfonts','','flossely',true);
        get('i','','from','nixfonts','','flossely',true);
        get('i','','from','baron','','eurohouse',true);
        get('i','','from','eurohouse','','eurohouse',true);
        window.location.reload();
    } else {
        get('i','','from','base','','flossely',true);
        get('i','','from','msfonts','','flossely',true);
        get('i','','from','nixfonts','','flossely',true);
        get('i','','from','gnome','','flossely',true);
        get('i','','from','hsis','','flossely',true);
        window.location.reload();
    }
}
</script>
</head>
<body>
<h2 align='center'>Welcome to the Web System Initial Setup</h2>
<p align='center'>Cheap Beer or Fine Wine?</p>
<p align='center'>
<img style="height:15%;position:relative;" src="sw.cheap.png" title="Cheap Beer" onclick="getPackage('cheap');"> 
<img style="height:15%;position:relative;" src="sw.fine.png" title="Fine Wine" onclick="getPackage('fine');">
</p>
<p align='center'>
<input type="button" onclick="get('i','','from','assemble','','flossely',false);" value="Update Assemble">
</p>
</body>
</html>
