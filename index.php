<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Meta Tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">	
	<meta name="keywords" content="facebook, login, rede social">
	<meta name="description" content="A maior rede social do mundo">
	<meta name="author" content="Marcos Vinícius de Mello">
	<!---->
	<title>Login Facebook</title>
</head>
<body>
	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->

			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email" name="email" placeholder="E-mail" />
				</div><!--form-element-->

				<div class="form-element">
					<p>Senha:</p>
					<input type="password" name="password" placeholder="Senha" />
				</div><!--form-element-->

				<div class="form-element">
					<input type="submit" name="acao" value="Enviar" />
				</div><!--form-element-->

			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-conexoes">
				<img src="assets/conexoes.png" />
			</div><!--img-conexoes-->

			<div class="abrir-conta">
				<h2>Abra uma conta</h2>
				<h3>É gratuito e sempre será.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input type="text" placeholder="Nome" />
					</div><!--w50-->

					<div class="w50">
						<input type="text" placeholder="Sobrenome" />
					</div><!--w50-->

					<div class="w100">
						<input type="email" placeholder="E-mail" />
					</div><!--w100-->

					<div class="w100">
						<input type="password" placeholder="Senha" />
					</div><!--w100-->

					<div class="w100">
						<h2>Data de Nascimento</h2>
						<select name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select><!--nascimento-->
						<select name="nascimento-mes" class="nascimento">
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select><!--nascimento-->						
						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1960; $i <= 2023; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select><!--nascimento-->
						<div class="clear"></div>
					</div><!--w100-->
					<div class="w100">
						<div class="input-radio">
							<input type="radio" value="feminino" name="sexo" />
							<h2>Feminino</h2>
													
						</div><!--input-radio-->
						<div class="input-radio">
							<input type="radio" value="masculino" name="sexo" />
							<h2>Masculino</h2>	
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastre-se" />
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Inglês</a>
			<a href="#">Alemão</a>
			<a href="#">Chinês</a>
			<a href="#">Turco</a>
			<a href="#">Coreano</a>
			<a href="#">Espanhol</a>
			<a href="#">Inglês</a>
			<a href="#">Alemão</a>
			<a href="#">Chinês</a>
			<a href="#">Turco</a>
			<a href="#">Coreano</a>
		</div><!--center-->
	</section><!--linguas-->


	<section class="outros">
		<div class="center">
			<a href="#">Conversas</a>
			<a href="#">Idolos</a>
			<a href="#">Noticias</a>
			<a href="#">Ajuda</a>
			<a href="#">Outros</a>
			<a href="#">Politica</a>
			<a href="#">Tudo</a>
		</div>
	</section>

	<section class="copyright">
		<div class="center">
			<a href="https://omarcosvinicius.github.io/">Marcos Vinícius de Mello 2023 ©</a>
		</div><!--center-->
	</section><!--copyright-->
</body>
</html>