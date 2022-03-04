<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Assemble</title>
<link rel="shortcut icon" href="favicon.png?rev=<?=time();?>" type="image/x-icon">
<link rel="stylesheet" href="https://github.com/flossely/base/blob/main/webrend.css"></style>
<script src="https://github.com/flossely/base/blob/main/base.js"></script>
</head>
<body>
<h2 align='center'>Welcome to the Web System Initial Setup</h2>
<p align='center'>Select the package set you want to install:</p>
<p align='center'>
<input type="button" onclick="seq('i,from,assemble,flossely;');" value="Update Assemble">
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,hsis,flossely;');" value="Base Package">
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,write,flossely;i,from,delete,flossely;i,from,move,flossely;i,from,copy,flossely;i,from,file,flossely;i,from,files,flossely;i,from,edit,flossely;i,from,font,flossely;i,from,watch,flossely;i,from,hsis,flossely;');" value="Advanced Package">
<input type="button" onclick="seq('i,from,base,flossely;i,from,basic,flossely;i,from,nixfonts,flossely;i,from,msfonts,flossely;i,from,entity,flossely;i,from,manager,flossely;i,from,hsis,flossely;');" value="Manager Package">
</p>
</body>
</html>
