<?php include "cabecera.htm"; ?>

<div class="container">
	</br></br>
		<form action="listado.php" method="post">
			<div class="form-floating">
  				<input type="text" class="form-control" name="titulo">
  				<label for="titulo">Título</label>
			</div>
			</br>
			<div class="form-floating">
  				<input type="text" class="form-control" name="year">
  				<label for="year">Año</label>
			</div>
			</br>
			<div class="form-floating">
  				<select class="form-control" name="tipo">
					<option></option>
					<option>movie</option>
					<option>series</option>
					<option>episode</option>
					<option>game</option>
				</select>
  				<label for="tipo">Tipo</label>
			</div>
			</br>
			<button class="btn btn-outline-primary btn-lg" type="submit">Buscar</button>
			</br></br>
    		</form>
</div>

<?php include "pie.htm"; ?>
	
	
	


	
	
