<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
	</head>
	<body>
        <div class="container">
            <div class="navbar navbar-default">
                <div class="navbar-inner">
                    {menubar}
				</div>
            </div>
            <div id="content">
                <h1>{pagetitle}</h1>
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2018,  <a href="mailto:someone@somewhere.com">Piyotr Kao</a> & <a href="mailto:someone@somewhere.com">Daniel Katz</a>.
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
	</body>
</html>