
<?php $user = $_GET['u']; ?>
<html lang="pt-br">
<head>
  <title>Chat</title>
  <meta charset="utf-8"/>
  <link href="assets/css/reset.css" rel="stylesheet">
  <link href="assets/css/style_chat.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
  <!--
  <script src="assets/js/script_chat.js"></script>
  --> 
</head>
<body>
<div class="chatContainer">
	<div class="chatHeader">
		<h3> Bem-vindo <?php echo ucwords($user); ?></h3>
	</div>
	<div class="chatMessages"></div>
	<div class="chatBottom">
		<form action='#' onsubmit="return false;" id="chatForm">
			<input type="hidden" id="name" value="<?php echo $user; ?>" />
			<input type="text" name="text" id="text" value="" placeholder="Digite sua pergunta"/>
			<input type="submit" name="submit" value="Post" />
		</form>
	</div>
</div>
</body>	
</html>