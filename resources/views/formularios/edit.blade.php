@extends('layouts.app')
@section('content')
	{!! Form::model($cuestionario, ['route' => ['cuestionario.update', $cuestionario->id], 'method'=>'PUT', 'class'=>'formulario']) !!}
	<div class="container">
		<div class="panel panel-primary">

		<div class="panel-heading"><h2>Datos Personales</h2></div><br>
 		<div class="panel-body">
        <div class="col-md-6">
        
			<div class="form-group">
				{!!Form::label('nombre','Nombre completo:')!!}<br>
				{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese aquí el nombre'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('identificacion','Número de cédula:')!!}<br>
				{!!Form::text('identificacion',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la cédula'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('edad','Edad:')!!}<br>
				{!!Form::text('edad',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la edad'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('estado_civil','Estado Civil:')!!}<br>
				{!!Form::select('estado_civil', ['SOLTERO' => 'Soltero/a','CASADO' => 'Casado/a','DIVORCIADO' => 'Divorciado/a','VIUDO' => 'Viudo/a'], null, 
				['class'=>'form-control','placeholder' => 'Seleccione el estado civil...'])!!}
			</div>
	    </div>
	    <div class="col-md-6">
			<div class="form-group">
				{!!Form::label('nacionalidad','Nacionalidad:')!!}<br>
				{!!Form::text('nacionalidad',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la nacionalidad'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('residencia','Residencia:')!!}<br>
				{!!Form::text('residencia',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la residencia'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('puesto','Puesto del empleado:')!!}<br>
				{!!Form::text('puesto',null,['class'=>'form-control','placeholder'=>'Ingrese aquí el puesto'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('empresa','Empresa:')!!}<br>
				{!!Form::select('empresa', ['COOPELESCA' => 'Coopelesca'], null, 
				['class'=>'form-control','placeholder' => 'Seleccione una empresa...'])!!}<br>
			</div>
	</div>		
	</div>
    </div>

	<div class="clearfix"></div>

	<div class="panel panel-primary">
	<div class="panel-heading"><h2>Encuesta Médica</h2></div><br>
	<div class="panel-body">
    <ul class="list-group">
	<div class="col-md-6">
	
			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','1. ¿Practica usted algún deporte o actividad adicional?')!!}<br>
                <div class="radio">                                 
				<input type="radio" name="p1" id="p1S" value="SI" onclick="toggle(this,'uno' )"> 
				<label for="p1S">Sí</label>
		
				<input type="radio" name="p1" id="p1N" value="NO" onclick="toggle(this,'uno')">
				<label for="p1N">No</label>
				</div>
				<div id="uno" style="display:none">
				{!!Html::decode(Form::label('p1a','<small>Si su respuesta anterior fue sí, ¿Con cuanta frecuencia?</small>'))!!}
				{!!Form::select('p1a', [
					'5 o más veces a la semana' => '5 o más veces a la semana', 
					'De 3 a 4 veces por semana'=>'De 3 a 4 veces por semana', 
					'De 1 a 2 veces por semana'=>'De 1 a 2 veces por semana', 
					'Menos de 1 vez por semana'=>'Menos de 1 vez por semana'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
			    </div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','2. ¿Usted fuma?')!!}<br>
                <div class="radio">                                 
				<input type="radio" name="p2" id="p2S" value="SI" onclick="toggle(this,'dos')"> 
				<label for="p2S">Sí</label>
		
				<input type="radio" name="p2" id="p2N" value="NO" onclick="toggle(this,'dos')">
				<label for="p2N">No</label>
				</div>
				<div id="dos" style="display: none">
				{!!Html::decode(Form::label('p2a','<small>Si su respuesta anterior fue sí, ¿Cuánto fuma? </small>'))!!}
				{!!Form::select('p2a', [
					'Más de 2 paquetes por día' => 'Más de 2 paquetes por día', 
					'De 1 a 2 paquetes por día'=>'De 1 a 2 paquetes por día', 
					'De medio a 1 paquete por día'=>'De medio a 1 paquete por día', 
					'Menos de 10 cigarros al día'=>'Menos de 10 cigarros al día',
					'Fumador social( fuma de vez en cuando )'=>'Fumador social( fuma de vez en cuando )'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','3. ¿Consume usted alcohol?')!!}<br>
                <div class="radio">                                 
				<input type="radio" name="p3" id="p3S" value="SI" onclick="toggle(this,'tres')"> 
				<label for="p3S">Sí</label>
		
				<input type="radio" name="p3" id="p3N" value="NO" onclick="toggle(this,'tres')">
				<label for="p3N">No</label>
				</div>
				<div id="tres" style="display: none;">
				{!!Html::decode(Form::label('p3a','<small>Si su respuesta anterior fue sí, ¿Cuánto consume?</small>'))!!}
				{!!Form::select('p1a', [
					'Una vez cada 3 meses' => 'Una vez cada 3 meses', 
					'Una vez al mes'=>'Una vez al mes', 
					'Una vez cada 15 días'=>'Una vez cada 15 días', 
					'Una vez por semana'=>'Una vez por semana',
					'Todos los días'=>'Todos los días'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
                </div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','4. Indique si ha tenido problemas de salud en los últimos 6 meses (Cualquier tipo de problema o síntoma aunque no tenga diagnóstico médico ni haya consultado con un médico)')!!}<br>
				<div class="radio">
				<input type="radio" name="p4" id="p4S" value="SI"> 
				<label for="p4S">Sí</label>
		
				<input type="radio" name="p4" id="p4N" value="NO">
				<label for="p4N">No</label>
				</div><br>
			</div>
			</li>
			
			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','5. Indique si tiene algún tipo de examen pendiente (De laboratorio, radiografías, ultrasonidos, tomografías, electrocardiograma o de cualquier otro tipo)')!!}<br>
				<div class="radio">
				<input type="radio" name="p5" id="p5S" value="SI"> 
				<label for="p5S">Sí</label>
		
				<input type="radio" name="p5" id="p5N" value="NO">
				<label for="p5N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','6. Indique cuando fue la última vez que consultó con un médico')!!}<br>
				{!!Form::select('p6', [
					'Hace más de 1 año' => 'Hace más de 1 año', 
					'De 6 meses a 1 año'=>'De 6 meses a 1 año', 
					'De 3 a 6 meses'=>'De 3 a 6 meses', 
					'De 1 a 3 meses'=>'De 1 a 3 meses',
					'Ha consultado en este último mes'=>'Ha consultado en este último mes'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','7. ¿Su peso y su condicion general (Estado de ánimo, apetito, apariencia, color de piel, etc) han tenido alguna variación en los últimos 6 meses?')!!}<br>
				<div class="radio">
				<input type="radio" name="p7" id="p7S" value="SI"> 
				<label for="p7S">Sí</label>
		
				<input type="radio" name="p7" id="p7N" value="NO">
				<label for="p7N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','8. ¿Utiliza o ha utilizado algún tipo de droga?')!!}<br>
				<div class="radio">
				<input type="radio" name="p8" id="p8S" value="SI"> 
				<label for="p8S">Sí</label>
		
				<input type="radio" name="p8" id="p8N" value="NO">
				<label for="p8N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','9. ¿Utiliza o ha utilizado algún medicamente recientemente?')!!}<br>
				<div class="radio">
				<input type="radio" name="p9" id="p9S" value="SI"> 
				<label for="p9S">Sí</label>
		
				<input type="radio" name="p9" id="p9N" value="NO">
				<label for="p9N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','10. ¿Ha habido en su familia muertes por enfermedad de: Corazón - Circulación - Diabetes?')!!}<br>
				<div class="radio">
				<input type="radio" name="p10" id="p10S" value="SI"> 
				<label for="p10S">Sí</label>
		
				<input type="radio" name="p10" id="p10N" value="NO">
				<label for="p10N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','11. ¿Ha tenido o se encuentra en tratamiento de rehabilitación física o mental?')!!}<br>
				<div class="radio">
				<input type="radio" name="p11" id="p11S" value="SI"> 
				<label for="p11S">Sí</label>
		
				<input type="radio" name="p11" id="p11N" value="NO">
				<label for="p11N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','12. ¿Ha tenido o se encuentra en tratamiento con insulina, cortisona u otro tipo de hormona?')!!}<br>
				<div class="radio">
				<input type="radio" name="p12" id="p12S" value="SI"> 
				<label for="p12S">Sí</label>
		
				<input type="radio" name="p12" id="p12N" value="NO">
				<label for="p12N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','13. ¿Se ha sometido a algún tipo de examen radiológico por enfermedad o chequeo médico, por ejemplo Rx Torax, ultrasonido, gastroscopía, mamografía, etc?')!!}<br>
				<div class="radio">
				<input type="radio" name="p13" id="p13S" value="SI"> 
				<label for="p13S">Sí</label>
		
				<input type="radio" name="p13" id="p13N" value="NO">
				<label for="p13N">No</label>
				</div><br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','14. ¿Le han practicado electrocardiograma, electroencefalogramas, o similares?')!!}<br>
				<div class="radio">
				<input type="radio" name="p14" id="p14S" value="SI"> 
				<label for="p14S">Sí</label>
		
				<input type="radio" name="p14" id="p14N" value="NO">
				<label for="p14N">No</label>
				</div><br>
			</div>
			</li>

            <li class="list-group-item">

            {!!Form::label('pregunta','15. ¿Padece o ha padecido usted de?: ')!!}<br><br>
            
            <div class="checkbox">
 			{!!Form::checkbox('check2', 'SI',false,['class'=> 'checkbox', 'id'=>'check2', 'onclick'=>'showContent("check2","ocultar1")']) !!}

            {!!Html::decode(Form::label('check2', '<span class="glyphicon glyphicon-th-list"></span>',['for'=>'check2']))  !!}<br><br>
            </div>

            <div id="ocultar1" style="display: none">

			<ul id="lista1" class="list-group">
			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15a. Dolor de cabeza crónico, vértigo, epilepsia o convulsiones, estados depresivos o ansiosos, o alguna otra enfermedad del sistema nervioso.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15a" id="p15aS" value="SI"> 
				<label for="p15aS">Sí</label>
		
				<input type="radio" name="p15a" id="p15aN" value="NO">
				<label for="p15aN">No</label>
				</div>
			</div></li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15b. Enfermedades o alguna perturbación de los ojos u oídos.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15b" id="p15bS" value="SI"> 
				<label for="p15bS">Sí</label>
		
				<input type="radio" name="p15b" id="p15bN" value="NO">
				<label for="p15bN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15c. Presion arterial elevada, soplos cardíacos, infartos u otra enfermedad del corazón, fiebre reumática, dificultades en la respiración, dolor de pecho, várices, fiebitis, hemofilia u otras enfermedades del aparato circulatorio.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15c" id="p15cS" value="SI"> 
				<label for="p15cS">Sí</label>
		
				<input type="radio" name="p15c" id="p15cN" value="NO">
				<label for="p15cN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15d. Ronquera crónica, asma, bronquitis crónica u otras enfermedades del aparato respiratorio.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15d" id="p15dS" value="SI"> 
				<label for="p15dS">Sí</label>
		
				<input type="radio" name="p15d" id="p15dN" value="NO">
				<label for="p15dN">No</label>
				</div>
			</div></li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15e. Úlcera gástrica, sangrado digestivo, hepatitis u otras enfemedades del hígado y del aparato digestivo.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15e" id="p15eS" value="SI"> 
				<label for="p15eS">Sí</label>
		
				<input type="radio" name="p15e" id="p15eN" value="NO">
				<label for="p15eN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15f. Dislipidemia(alteración del metabolismo lípídico(grasas), con su consecuente alteración de las concentraciones de lípidos y lipoproteínas en la sangre) ¿Se ha realizado exámenes de colesterol y triglíceridos?</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15f" id="p15fS" value="SI"> 
				<label for="p15fS">Sí</label>
		
				<input type="radio" name="p15f" id="p15fN" value="NO">
				<label for="p15fN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15g. Enfermedades en riñones, vejiga, próstata, genitales, enfermedades venéreas o albuminiria: presencia de albúmina(proteína hidrosoluble que se encuentra en el plasma sanguíneo) en la orina.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15g" id="p15gS" value="SI"> 
				<label for="p15gS">Sí</label>
		
				<input type="radio" name="p15g" id="p15gN" value="NO">
				<label for="p15gN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15h. Artritis, afecciones o deformidades en la columna, lumbalgia, ciática, reumatismo, gota u otras enfermedades en los huesos o articulaciones.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15h" id="p15hS" value="SI"> 
				<label for="p15hS">Sí</label>
		
				<input type="radio" name="p15h" id="p15hN" value="NO">
				<label for="p15hN">No</label>
				</div>
			</div></li>	

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15i. Diabetes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15i" id="p15iS" value="SI"> 
				<label for="p15iS">Sí</label>
		
				<input type="radio" name="p15i" id="p15iN" value="NO">
				<label for="p15iN">No</label>
				</div>
			</div></li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15j. Tumores, cáncer o quistes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15j" id="p15jS" value="SI"> 
				<label for="p15jS">Sí</label>
		
				<input type="radio" name="p15j" id="p15jN" value="NO">
				<label for="p15jN">No</label>
				</div><br>
			</div>
			</li>
			</ul>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','16. ¿Le han practicado alguna prueba para detectar el SIDA?')!!}<br>
				<div class="radio">
				<input type="radio" name="p16" id="p16S" value="SI" onclick="toggle(this,'cuatro')"> 
				<label for="p16S">Sí</label>
		
				<input type="radio" name="p16" id="p16N" value="NO" onclick="toggle(this,'cuatro')">
				<label for="p16N">No</label><br>
				</div>
				<div id="cuatro" style="display: none">
				{!!Html::decode(Form::label('p16a','<small>Si la respuesta anterior fue sí, indique la causa:</small>'))!!}<br>
				{!!Form::text('p16a',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la causa'])!!}
				</div>
			</div>
			</li>

		<li class="list-group-item"><br>
		{!!Form::label('pregunta','17. ¿En los últimos años ha padecido o padece de?: ')!!}

		<div class="checkbox">
		   {!!Form::checkbox('check3', 'SI',false,['class'=> 'checkbox', 'id'=>'check3', 'onclick'=>'showContent("check3","ocultar2")']) !!}
            {!!Html::decode(Form::label('check3', '<span class="glyphicon glyphicon-th-list"></span>',['for'=>'check3']))  !!}<br><br>
		</div>

         <div id="ocultar2" style="display: none">
        <ul id="lista2" class="list-group">
			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17a. Fiebre de origen desconocido.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17a" id="p17aS" value="SI"> 
				<label for="p17aS">Sí</label>
		
				<input type="radio" name="p17a" id="p17aN" value="NO">
				<label for="p17aN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17b. Diarreas persistentes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17b" id="p17bS" value="SI"> 
				<label for="p17bS">Sí</label>
		
				<input type="radio" name="p17b" id="p17bN" value="NO">
				<label for="p17bN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17c. Lesiones orales o en la piel.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17c" id="p17cS" value="SI"> 
				<label for="p17cS">Sí</label>
		
				<input type="radio" name="p17c" id="p17cN" value="NO">
				<label for="p17cN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17d. Inflamación de ganglios.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17d" id="p17dS" value="SI"> 
				<label for="p17dS">Sí</label>
		
				<input type="radio" name="p17d" id="p17dN" value="NO">
				<label for="p17dN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17e. Sudoración nocturna.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17e" id="p17eS" value="SI"> 
				<label for="p17eS">Sí</label>
		
				<input type="radio" name="p17e" id="p17eN" value="NO">
				<label for="p17eN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17f. Dolores persistentes en miembros o articulaciones.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17f" id="p17fS" value="SI"> 
				<label for="p17fS">Sí</label>
		
				<input type="radio" name="p17f" id="p17fN" value="NO">
				<label for="p17fN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17g. Pérdidas de la fuerza vital o normal.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17g" id="p17gS" value="SI"> 
				<label for="p17gS">Sí</label>
		
				<input type="radio" name="p17g" id="p17gN" value="NO">
				<label for="p17gN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17a. Meningitis.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17h" id="p17hS" value="SI"> 
				<label for="p17hS">Sí</label>
		
				<input type="radio" name="p17h" id="p17hN" value="NO">
				<label for="p17hN">No</label>
				</div><br>
			</div>
			</li>		
		</ul>
		</div>
		</li>
		</div><!--Fin del col -->
		<div class="col-md-6">

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','18. ¿En los últimos 6 meses ha aumentado o disminuido de peso?')!!}<br>
				<div class="radio">
				<input type="radio" name="p18" id="p18S" value="SI" onclick="toggle(this, 'cinco')"> 
				<label for="p18S">Sí</label>
		
				<input type="radio" name="p18" id="p18N" value="NO" onclick="toggle(this, 'cinco')">
				<label for="p18N">No</label>
				</div>

				<div id="cinco" style="display: none">

				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p18a','<small>¿Cuantos kilos?</small>'))!!}
				{!!Form::text('p18a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p18b','<small>Causa:</small>'))!!}
				{!!Form::text('p18b',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','19. ¿Ha estado hospitalizado?')!!}<br>

				<div class="radio">
				<input type="radio" name="p19" id="p19S" value="SI" onclick="toggle(this,'seis')"> 
				<label for="p19S">Sí</label>
		
				<input type="radio" name="p19" id="p19N" value="NO" onclick="toggle(this,'seis')">
				<label for="p19N">No</label>
				</div>

				<div id="seis" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p19a','<small>Causa:</small>'))!!}
				{!!Form::text('p19a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p19b','<small>Fecha:</small>'))!!}
				{!!Form::text('p19b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p19c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p19c',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','20. ¿Le han practicado algún tipo de operación?')!!}<br>

				<div class="radio">
				<input type="radio" name="p20" id="p20S" value="SI" onclick="toggle(this,'siete')"> 
				<label for="p20S">Sí</label>
		
				<input type="radio" name="p20" id="p20N" value="NO" onclick="toggle(this,'siete')">
				<label for="p20N">No</label>
				</div>

				<div id="siete" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p20a','<small>Causa:</small>'))!!}
				{!!Form::text('p20a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p20b','<small>Fecha:</small>'))!!}
				{!!Form::text('p20b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p20c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p20c',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','21. ¿Piensa someterse a alguna intervención quirúrgica en un futuro próximo?')!!}<br>

				<div class="radio">
				<input type="radio" name="p21" id="p21S" value="SI" onclick="toggle(this,'ocho')"> 
				<label for="p21S">Sí</label>
		
				<input type="radio" name="p21" id="p21N" value="NO" onclick="toggle(this,'ocho')">
				<label for="p21N">No</label>
				</div>

				<div id="ocho" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p21a','<small>Causa:</small>'))!!}
				{!!Form::text('p21a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','22. ¿Ha sido incapacitado por enfermedad o accidente?')!!}<br>

				<div class="radio">
				<input type="radio" name="p22" id="p22S" value="SI" onclick="toggle(this,'nueve')"> 
				<label for="p22S">Sí</label>
		
				<input type="radio" name="p22" id="p22N" value="NO" onclick="toggle(this,'nueve')">
				<label for="p22N">No</label>
				</div>

				<div id="nueve" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p22a','<small>Causa:</small>'))!!}
				{!!Form::text('p22a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p22b','<small>Fecha:</small>'))!!}
				{!!Form::text('p22b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p22c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p22c',null,['class'=>'form-control'])!!}<br>

				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','23. ¿Tiene o ha tenido algún padecimiento que no se le haya mencionado?')!!}<br>

				<div class="radio">
				<input type="radio" name="p23" id="p23S" value="SI" onclick="toggle(this,'diez')"> 
				<label for="p23S">Sí</label>
		
				<input type="radio" name="p23" id="p23N" value="NO" onclick="toggle(this,'diez')">
				<label for="p23N">No</label>
				</div>

				<div id="diez" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p23a','<small>¿Cuál?</small>'))!!}
				{!!Form::text('p23a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','24. ¿Está tramitando o piensa tramitar en el corto plazo una incapacidad permanente?')!!}<br>

				<div class="radio">
				<input type="radio" name="p24" id="p24S" value="SI"> 
				<label for="p24S">Sí</label>
		
				<input type="radio" name="p24" id="p24N" value="NO">
				<label for="p24N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','25. ¿A consultado al Instituto Nacional de Seguros (INS) por alguna enfermedad o accidente de trabajo?')!!}<br>

				<div class="radio">
				<input type="radio" name="p25" id="p25S" value="SI" onclick="toggle(this,'once')"> 
				<label for="p25S">Sí</label>
		
				<input type="radio" name="p25" id="p25N" value="NO" onclick="toggle(this,'once')">
				<label for="p25N">No</label>
				</div>

				<div id="once" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p25a','<small>Especifique por qué consultó</small>'))!!}
				{!!Form::text('p25a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','26. ¿Tiene usted las vacunas al día?')!!}<br>

				<div class="radio">
				<input type="radio" name="p26" id="p26S" value="SI"> 
				<label for="p26S">Sí</label>
		
				<input type="radio" name="p26" id="p26N" value="NO">
				<label for="p26N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','27. ¿Se ha aplicado la vacuna del tetano hace menos de 10 años?')!!}<br>

				<div class="radio">
				<input type="radio" name="p27" id="p27S" value="SI"> 
				<label for="p27S">Sí</label>
		
				<input type="radio" name="p27" id="p27N" value="NO">
				<label for="p27N">No</label>
				</div>
			</div>
			</li>
 			
 			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','28. ¿Utiliza o toma usted algún medicamento continuamente o por temporadas?')!!}<br>

				<div class="radio">
				<input type="radio" name="p28" id="p28S" value="SI" onclick="toggle(this,'doce')"> 
				<label for="p28S">Sí</label>
		
				<input type="radio" name="p28" id="p28N" value="NO" onclick="toggle(this,'doce')">
				<label for="p28N">No</label>
				</div>

				<div id="doce" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p28a','<small>Especifique cuál: </small>'))!!}
				{!!Form::text('p28a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','29. ¿Tiene venas saltadas en sus piernas?')!!}<br>

				<div class="radio">
				<input type="radio" name="p29" id="p29S" value="SI"> 
				<label for="p29S">Sí</label>
		
				<input type="radio" name="p29" id="p29N" value="NO">
				<label for="p29N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','30. ¿Se le duermen las manos?')!!}<br>

				<div class="radio">
				<input type="radio" name="p30" id="p30S" value="SI"> 
				<label for="p30S">Sí</label>
		
				<input type="radio" name="p30" id="p30N" value="NO">
				<label for="p30N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','31. ¿Tiene dificultad para mover sus manos?')!!}<br>

				<div class="radio">
				<input type="radio" name="p31" id="p31S" value="SI"> 
				<label for="p31S">Sí</label>
		
				<input type="radio" name="p31" id="p31N" value="NO">
				<label for="p31N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','32. ¿Tiene problemas para caminar?')!!}<br>

				<div class="radio">
				<input type="radio" name="p32" id="p32S" value="SI"> 
				<label for="p32S">Sí</label>
		
				<input type="radio" name="p32" id="p32N" value="NO">
				<label for="p32N">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','33. ¿Padece usted de hemorroides?')!!}<br>

				<div class="radio">
				<input type="radio" name="p33" id="p33S" value="SI"> 
				<label for="p33S">Sí</label>
		
				<input type="radio" name="p33" id="p33N" value="NO">
				<label for="p33N">No</label>
				</div>
			</div>
			</li>

			
			<li class="list-group-item">
            {!!Form::label('pregunta','34. Preguntas adicionales para mujeres: ')!!}
            <div class="checkbox">
            {!!Form::checkbox('check', 'SI',false,['class'=> 'checkbox', 'id'=>'check', 'onclick'=>'showContent("check", "mujer")']) !!}
            {!!Html::decode(Form::label('check', '<span class="glyphicon glyphicon-th-list"></span>',['for'=>'check']))  !!}<br><br>
            </div>

            <div id="mujer" style="display: none">

            <ul id="lista3" class="list-group">
            <li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34a. ¿Es su menstruación irregular?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34a" id="p34aS" value="SI"> 
				<label for="p34aS">Sí</label>
		
				<input type="radio" name="p34a" id="p34aN" value="NO">
				<label for="p34aN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34b. ¿Padece de sangrado fuera del período menstrual?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34b" id="p34bS" value="SI"> 
				<label for="p34bS">Sí</label>
		
				<input type="radio" name="p34b" id="p34bN" value="NO">
				<label for="p34bN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34c. Fecha de última menstruación
				</small>'))!!}
				<br>

				{!!Form::select('p34c', [
					'Actualmente en período' => 'Actualmente en período', 
					'De 1 semana a 15 días'=>'De 1 semana a 15 días', 
					'De 15 días a 1 mes'=>'De 15 días a 1 mes', 
					'Hace más de 1 mes'=>'Hace más de 1 mes',
					'De 2 meses en adelante'=>'De 2 meses en adelante'], null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34d. Resultado de último papanicolau</small>'))!!}<br>
				{!!Form::text('p34d', null,['class'=>'form-control'])!!}<br>					
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34e. ¿Ha tenido dificultades en partos?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34e" id="p34eS" value="SI"> 
				<label for="p34eS">Sí</label>
		
				<input type="radio" name="p34e" id="p34eN" value="NO">
				<label for="p34eN">No</label>
				</div>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34f. ¿Ha tenido alguna enfermedad o padecimiento ginecológico o de los senos?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34f" id="p34fS" value="SI" onclick="toggle(this,'trece')"> 
				<label for="p34fS">Sí</label>
		
				<input type="radio" name="p34f" id="p34fN" value="NO" onclick="toggle(this,'trece')">
				<label for="p34fN">No</label>
				</div>

				<div id="trece" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p34f1','<small>¿Cuál?</small>'))!!}
				{!!Form::text('p34f1',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>			

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34d. Fecha de última mamografía y resultado: </small>'))!!}<br>

				{!!Html::decode(Form::label('p34g1', '<small>Fecha:</small>'))!!}
				{!!Form::text('p34g1', null,['class'=>'form-control'])!!}<br>

				{!!Html::decode(Form::label('p34g2', '<small>Resultado:</small>'))!!}
				{!!Form::text('p34g2', null,['class'=>'form-control'])!!}<br>

			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34h. ¿Está embarazada?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34h" id="p34hS" value="SI" onclick="toggle(this,'catorce')"> 
				<label for="p34hS">Sí</label>
		
				<input type="radio" name="p34h" id="p34hN" value="NO" onclick="toggle(this,'catorce')">
				<label for="p34hN">No</label>
				</div>

				<div id="catorce" style="display: none">
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p34h1','<small>¿Cuántos meses o semanas de gestación tiene?</small>'))!!}
				{!!Form::text('p34h1',null,['class'=>'form-control'])!!}<br>

				{!!Html::decode(Form::label('p34h2','<small>¿Ha tenido algún tipo de complicaciones?</small>'))!!}
				{!!Form::text('p34h2',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			</li>

             </ul>
             </div>
             </li>
             
             <li class="list-group-item">
             	{!! Form::label('Evidencia', '35. ¿Encuentra evidencia actual o pasada de enfermedad u operaciones en alguna de las siguientes zonas? ') !!}

             	 <div class="checkbox">
            		{!!Form::checkbox('check4', 'SI',false,['class'=> 'checkbox', 'id'=>'check4', 'onclick'=>'showContent("check4", "lista4")']) !!}
            		{!!Html::decode(Form::label('check4', '<span class="glyphicon glyphicon-th-list"></span>',['for'=>'check3']))  !!}<br><br>
            	</div>

             	<div class="form-group" id="lista4" style="display: none">
             		
             	<ul class="list-group">
             		<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35a. Cráneo y oídos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e1" id="e1S" value="SI" onclick="toggle(this,'de1')"> 
					<label for="e1S">Sí</label>
			
					<input type="radio" name="e1" id="e1N" value="NO" onclick="toggle(this,'de1')">
					<label for="e1N">No</label>
					</div>

					<div id="de1" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e1a','<small>Detalle:</small>'))!!}
					{!!Form::text('e1a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35b. Boca y garganta')!!}<br>		

					<div class="radio">
					<input type="radio" name="e2" id="e2S" value="SI" onclick="toggle(this,'de2')"> 
					<label for="e2S">Sí</label>
			
					<input type="radio" name="e2" id="e2N" value="NO" onclick="toggle(this,'de2')">
					<label for="e2N">No</label>
					</div>

					<div id="de2" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e2a','<small>Detalle:</small>'))!!}
					{!!Form::text('e2a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35c. Ojos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e3" id="e3S" value="SI" onclick="toggle(this,'de3')"> 
					<label for="e3S">Sí</label>
			
					<input type="radio" name="e3" id="e3N" value="NO" onclick="toggle(this,'de3')">
					<label for="e3N">No</label>
					</div>

					<div id="de3" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e3a','<small>Detalle:</small>'))!!}
					{!!Form::text('e3a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35d. Cuello - tiroides')!!}<br>		

					<div class="radio">
					<input type="radio" name="e4" id="e4S" value="SI" onclick="toggle(this,'de4')"> 
					<label for="e4S">Sí</label>
			
					<input type="radio" name="e4" id="e4N" value="NO" onclick="toggle(this,'de4')">
					<label for="e4N">No</label>
					</div>

					<div id="de4" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e4a','<small>Detalle:</small>'))!!}
					{!!Form::text('e4a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35e. Pulmones')!!}<br>		

					<div class="radio">
					<input type="radio" name="e5" id="e5S" value="SI" onclick="toggle(this,'de5')"> 
					<label for="e5S">Sí</label>
			
					<input type="radio" name="e5" id="e5N" value="NO" onclick="toggle(this,'de5')">
					<label for="e5N">No</label>
					</div>

					<div id="de5" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e5a','<small>Detalle:</small>'))!!}
					{!!Form::text('e5a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35f. Corazón')!!}<br>		

					<div class="radio">
					<input type="radio" name="e6" id="e6S" value="SI" onclick="toggle(this,'de6')"> 
					<label for="e6S">Sí</label>
			
					<input type="radio" name="e6" id="e6N" value="NO" onclick="toggle(this,'de6')">
					<label for="e6N">No</label>
					</div>

					<div id="de6" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e6a','<small>Detalle:</small>'))!!}
					{!!Form::text('e6a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35g. Abdomen')!!}<br>		

					<div class="radio">
					<input type="radio" name="e7" id="e7S" value="SI" onclick="toggle(this,'de7')"> 
					<label for="e7S">Sí</label>
			
					<input type="radio" name="e7" id="e7N" value="NO" onclick="toggle(this,'de7')">
					<label for="e7N">No</label>
					</div>

					<div id="de7" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e7a','<small>Detalle:</small>'))!!}
					{!!Form::text('e7a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35h. Sistema vascular periférico')!!}<br>		

					<div class="radio">
					<input type="radio" name="e8" id="e8S" value="SI" onclick="toggle(this,'de8')"> 
					<label for="e8S">Sí</label>
			
					<input type="radio" name="e8" id="e8N" value="NO" onclick="toggle(this,'de8')">
					<label for="e8N">No</label>
					</div>

					<div id="de8" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e8a','<small>Detalle:</small>'))!!}
					{!!Form::text('e8a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35i. Estado neurológico')!!}<br>		

					<div class="radio">
					<input type="radio" name="e9" id="e9S" value="SI" onclick="toggle(this,'de9')"> 
					<label for="e9S">Sí</label>
			
					<input type="radio" name="e9" id="e9N" value="NO" onclick="toggle(this,'de9')">
					<label for="e9N">No</label>
					</div>

					<div id="de9" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e9a','<small>Detalle:</small>'))!!}
					{!!Form::text('e9a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35j. Sistema muscular')!!}<br>		

					<div class="radio">
					<input type="radio" name="e10" id="e10S" value="SI" onclick="toggle(this,'de10')"> 
					<label for="e10S">Sí</label>
			
					<input type="radio" name="e10" id="e10N" value="NO" onclick="toggle(this,'de10')">
					<label for="e10N">No</label>
					</div>

					<div id="de10" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e10a','<small>Detalle:</small>'))!!}
					{!!Form::text('e10a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35k. Sistema Articular')!!}<br>		

					<div class="radio">
					<input type="radio" name="e11" id="e11S" value="SI" onclick="toggle(this,'de11')"> 
					<label for="e11S">Sí</label>
			
					<input type="radio" name="e11" id="e11N" value="NO" onclick="toggle(this,'de11')">
					<label for="e11N">No</label>
					</div>

					<div id="de11" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e11a','<small>Detalle:</small>'))!!}
					{!!Form::text('e11a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35l. Testículos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e12" id="e12S" value="SI" onclick="toggle(this,'de12')"> 
					<label for="e12S">Sí</label>
			
					<input type="radio" name="e12" id="e12N" value="NO" onclick="toggle(this,'de12')">
					<label for="e12N">No</label>
					</div>

					<div id="de12" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e12a','<small>Detalle:</small>'))!!}
					{!!Form::text('e12a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Form::label('pregunta','35m. Mamas')!!}<br>		

					<div class="radio">
					<input type="radio" name="e13" id="e13S" value="SI" onclick="toggle(this,'de13')"> 
					<label for="e13S">Sí</label>
			
					<input type="radio" name="e13" id="e13N" value="NO" onclick="toggle(this,'de13')">
					<label for="e13N">No</label>
					</div>

					<div id="de13" style="display: none">
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e13a','<small>Detalle:</small>'))!!}
					{!!Form::text('e13a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				</li>
             		</ul>
             	</div>
             </li>

             <li class="list-group-item"><div class="form-group">
				{!!Form::label('detalles','Detalles de preguntas respondidas afirmativamente')!!}<br>
				<p><small>Escriba aquí cualquier información relevante sobre el paciente encuestado a partir de las preguntas realizadas</small></p>

				{!!Form::textarea('detalles',null,['class'=>'form-control'])!!}<br>
				
				
			</div>
			</li>

			
		</div><!-- Fin del Col -->
		<div class="clearfix"></div>
		</ul>	
		<div class="form-group well">
			
				<button type="submit" class="btn btn-primary">Registrar 
					<span class="glyphicon glyphicon-arrow-right"></span>
				</button>
					
		</div>
		</div>
		</div>	
	</div>
	{!!Form::close()!!}
@endsection