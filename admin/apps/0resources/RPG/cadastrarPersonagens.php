<form action="cadastrarConcluir.php" method="post" class="col-md-8 col-md-push-2" enctype="multipart/form-data">
	<h1>Cadastrando o Bestiário</h1>
	<div class="form-group">
		<label for="nome"><span>Nome:</span></label>			
		<input type="text" name="nome" class="form-control">		
	</div>
	<div class="form-group">
		<label for="img"><span>Imagem:</span></label>
		<input type="file" name="img" class="form-control">
	</div>
	<div class="form-group">
		<label for="descr"><span>Descrição Completa:</span></label>
		<textarea name="descr" class="form-control"></textarea>		
	</div>
	<div class="form-group">
		<label for="arma_usada"><span>Arma Usada:</span></label>
		<select name="arma_usada" class="form-control">
			<!--Buscar no banco de dados-->
			<option value="punhal">Punhal</option>
			<option value="punhal">Punhal</option>
			<option value="punhal">Punhal</option>
			<option value="punhal">Punhal</option>
			<option value="punhal">Punhal</option>
		</select>
	</div>
	<h2>Atributos</h2>
	<div class="form-group col-md-6">
		<label for="atk"><span>Nível de Ataque:</span></label>
		<input type="number" name="atk" class="form-control">		
	</div>
	<div class="form-group col-md-6">
		<label for="def"><span>Nível de Defesa:</span></label>
		<input type="number" name="def" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="res"><span>Nível de Resistência:</span></label>
		<input type="number" name="res" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="dex"><span>Nível de Destreza:</span></label>
		<input type="number" name="dex" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="intl"><span>Nível de Inteligência:</span></label>
		<input type="number" name="intl" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="spd"><span>Nível de Velocidade:</span></label>
		<input type="number" name="spd" class="form-control">
	</div>
	<div class="form-group col-md-6">
		<label for="hp"><span>Healt Points:</span></label>
		<input type="number" name="hp" class="form-control" disabled title="O HP será: ATK+DEF+SPD">
	</div>
	<div class="form-group col-md-6">
		<label for="mp"><span>Magical Points:</span></label>
		<input type="number" name="mp" class="form-control" disabled title="O MP será: RES+DEX+INT">
	</div>
	<h2>Habilidades</h2>
<?php
	for($i = 1; $i <= 10;$i++){
	?>
	<div class="form-group col-md-6">
		<label for="hab<?php echo $i?>"><span>Habilidade <?php echo $i?>:</span></label>
		<input type="text" name="hab<?php echo $i?>" class="form-control">
	</div>
	<?php
	}
	?>
	<h2>Técnicas</h2>
	<?php
	for($a = 1; $a <= 10; $a++){
	?>
	<div class="form-group col-md-6">
		<label for="tec<?php echo $a?>"><span>Técnica <?php echo $a?>:</span></label>
		<input type="text" name="tec<?php echo $a?>" class="form-control">
	</div>
	<?php
	}
?>
	<div class="form-group">
		<label for="item"><span>Item:</span></label>
		<select name="item" class="form-control">
			<!--Buscar no banco de dados-->
			<option value="potion">Poção</option>
			<option value="potion">Poção</option>
			<option value="potion">Poção</option>
			<option value="potion">Poção</option>
			<option value="potion">Poção</option>
			<option value="potion">Poção</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success form-control">
	</div>
</form>