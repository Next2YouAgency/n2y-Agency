Exclusivo para Administra&ccedil;&atilde;o
<div class="col-md-12">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cadastrarFuncionario">
		Cadastrar Funcionários
	</button>
	<br/>
	<br/>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#verFuncionarios">
		Ver todos
	</button>
	
	<!-- Modal -->
	<div class="modal fade" id="cadastrarFuncionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Cadastro de Funcionários</h4>
				</div>
				<div class="modal-body">
					<form action="includes/cadastrarFuncionarioConcluir.php" method="post">
						<?php include 'includes/cadastrarFuncionario.php';?>
				</div>
				<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Cadastrar">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Cadastro</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="verFuncionarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Todos os Funcionários</h4>
				</div>
				<div class="modal-body">
						<?php include 'includes/todosOsFuncionarios.php';?>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
</div>