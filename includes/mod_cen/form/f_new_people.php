<form action="index.php?men=people&id=1" method="POST" >
	<div>
		<div>
			<div>Tipo</div>
			<div>
				<select name="userType">';
		  				<option selected value="alumno">Alumno</option>								  						
						<option value="tutor">Tutor</option>								  							
						<option value="profesor">Profesor</option>								  								  										
						<option value="preceptor">Preceptora</option>								  						
						<option value="director">Director</option>								  						
						<option value="rti">RTI</option>			  						
				</select>
		  	</div>
		</div>

		<div>
			DNI:<br>
			<input name="dni" id="dni" type="text" value="<?php echo $info_people->dni ?>"size="8"  placeholder="solo números"   pattern="[0-9]{8}" required>			
		</div>
		<div>
			CUIL:<br>
			<input name="cuil" id="cuil" type="text" value="<?php echo $info_people->cuil ?>" size="11"  placeholder="solo números"   pattern="[0-9]{11}" >
		</div>
		<div>
			Apellido:<br>
			<input type="text" id="lastName" name="lastName" value="<?php echo $info_people->lastName ?>" placeholder="ingrese apellido"   size="50" required >

		</div>
		<div>
			Nombre:<br>
			<input type="text" id="firstName" name="firstName" value="<?php echo $info_people->firstName ?>" placeholder="ingrese nombre" size="50" required >
		</div>
		<div>
			Fecha de Nacimiento:<br>
			<input type="date" id="birthDate" name="birthDate" value="<?php echo $info_people->birthDate ?>">
		</div>
		<div>
			Sexo:<br>
			<?php 
			//var_dump($info_people);
			if($info_people->gender<>NULL){
				?>				
				<input type="radio" id="genderf" name="gender" value="f" <?php if($info_people->gender=='f') echo "checked"; ?> >Femenino	
				<input type="radio" id="genderm" name="gender" value="m" <?php if($info_people->gender=='m') echo "checked"; ?> >Masculino
				<?php
			}else{
				?>
				<input type="radio" id="genderf" name="gender" value="f" checked>Femenino	
				<input type="radio" id="genderm" name="gender" value="m" >Masculino
				<?php
			}
			?>
			
			
		</div>
		<div>
			Dirección:<br>
			<input size="40" type="text" id="address" value="<?php echo $info_people->address ?>" name="address" >
		</div>
		<div>
			Teléfono:<br>
			<input type="text" id="telephone" name="telephone"  value="<?php echo $info_people->telephone ?>" placeholder="Nº Teléfono, solo números" size="40" title="Ingresar solo números" pattern="[0-9]{1,18}" >
		</div>
		<div>
			Celular:<br>
			<input type="text" name="cellPhone" id="cellPhone" value="<?php echo $info_people->cellPhone ?>" placeholder="Nº Teléfono, solo números" size="40" title="Ingresar solo números" pattern="[0-9]{7,18}">
		</div>
		<div>
			Correo Electrónico:</br>
			<input type="email" id="email" name="email" value="<?php echo $info_people->email ?>" placeholder="ingrese correo electronico" size="50" >
		</div>
		<div>
			<input type="hidden" id="peopleId" name="peopleId" value="<?php echo $info_people->peopleId ?>"/>				
			<input type="hidden" id="dateUpdate" name="dateUpdate" value="<?php echo date('Y-d-m h:i:s') ?>"/>
			<input type="hidden" id="userUpdate" name="userUpdate" value="<?php echo $_SESSION['peopleId'] ?>"/>
			<input type="submit" name="newUser" value="Aplicar cambios" />
		</div>
		<div></div>

	</div>
</form>