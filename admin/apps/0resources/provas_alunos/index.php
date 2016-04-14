<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Provas On-Line</title>
	<script src="APP/js/jquery.min.js"></script>
	<script src="APP/js/bootstrap.min.js"></script>
	<link href="APP/css/bootstrap.min.css" rel="stylesheet">
	<link href="APP/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">
	<section class="col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 bg-warning img-rounded section-login">
		<form class="form-horizontal" action="login.php?action=login">
			<div class="form-group">
				<label for="nome_aluno" class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-10">
					<input type="text" id="nome_aluno" name="nome_aluno" placeholder="Digite seu nome" class="form-control" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="matricula_aluno" class="col-sm-2 control-label">Matrícula:</label>
				<div class="col-sm-10">
					<input type="number" id="matricula_aluno" name="matricula_aluno" placeholder="Digite sua matrícula" class="form-control" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="turma_aluno" class="col-sm-2 control-label">Turma:</label>
				<div class="col-sm-10">
					<input type="text" id="turma_aluno" name="turma_aluno" placeholder="Digite sua matrícula" class="form-control" required>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-3 col-sm-push-3">
					<input type="submit" class="btn btn-default btn-info" name="login">
				</div>
				<div class="col-sm-3 col-sm-push-3">
					<input type="reset" class="btn btn-default btn-info">
				</div>
			</div>
		</form>
	</section>
	<footer class="col-sm-12">
	<div class="pull-right col-sm-5">
		Sistema desenolvido por<br>
		N2Dev - Agência Digital
	</footer>
</body>
</html>