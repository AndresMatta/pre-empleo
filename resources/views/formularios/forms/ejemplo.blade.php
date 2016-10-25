<!DOCTYPE html>
<html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<title>Reporte</title>
   
	<link rel="stylesheet" type="text/css" href="css/pdf.css">
</head>
<body>
<header class="clearfix">
	<div id="logo">
		<img src="images/hospital.png">
	</div>
</header>
<form class="formulario contenedor">

		<h1>Reporte de Formulario Pre-empleo</h1></div><br>
 		

			<div class="personales">
				{!!Html::decode(Form::label('nombre','<strong>Nombre completo:</strong>'))!!}
				<p>{{ $cuestionario->nombre }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('identificacion','<strong>Identificación:</strong>'))!!}
				<p>{{ $cuestionario->identificacion }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('edad','<strong>Edad:</strong>'))!!}
				<p>{{ $cuestionario->edad }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('estado_civil','<strong>Estado civil:</strong>'))!!}
				<p>{{ $cuestionario->estado_civil }}</p>
			</div>
	    
			<div class="personales">
				{!!Html::decode(Form::label('nacionalidad','<strong>Nacionalidad:</strong>'))!!}
				<p>{{ $cuestionario->nacionalidad }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('residencia','<strong>Residencia:</strong>'))!!}
				<p>{{ $cuestionario->residencia }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('puesto','<strong>Puesto del empleado:</strong>'))!!}
				<p>{{ $cuestionario->puesto }}</p>
			</div>

			<div class="personales">
				{!!Html::decode(Form::label('nombre','<strong>Empresa:</strong>'))!!}
				<p>{{ $cuestionario->empresa }}</p>
			</div>


		<h2>Encuesta Médica</h2><br>
	
			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','1. ¿Practica usted algún deporte o actividad adicional?')!!}<br>
                @if ($cuestionario->p1 == 'NO')
                	<p>{{ $cuestionario->p1 }} </p>
                @else
                  	<p>{{ $cuestionario->p1a }}</p>
                @endif
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','2. ¿Usted fuma?')!!}<br>
            	 @if ($cuestionario->p2 == 'NO')
                	<p>{{ $cuestionario->p2 }} </p>
                @else
                  	<p>{{ $cuestionario->p2a }}</p>
                @endif    
			</div>
			</li>

			<li class="list-group-item">
				<div class="form-group">
				{!!Form::label('pregunta','3. ¿Consume usted alcohol?')!!}<br>
                 @if ($cuestionario->p3 == 'NO')
                	<p>{{ $cuestionario->p3 }} </p>
                @else
                  	<p>{{ $cuestionario->p3a }}</p>
                @endif
			</div>
			</li>

			<li class="list-group-item">
				<div class="form-group">
				{!!Form::label('pregunta','4. Indique si ha tenido problemas de salud en los últimos 6 meses (Cualquier tipo de problema o síntoma aunque no tenga diagnóstico médico ni haya consultado con un médico)')!!}<br>
				<p>{{ $cuestionario->p4 }}</p>
			</div>
			</li>
			
			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','5. Indique si tiene algún tipo de examen pendiente (De laboratorio, radiografías, ultrasonidos, tomografías, electrocardiograma o de cualquier otro tipo)')!!}<br>
				<p>{{ $cuestionario->p5 }}</p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','6. Indique cuando fue la última vez que consultó con un médico')!!}<br>
				<p>{{ $cuestionario->p6 }}</p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','7. ¿Su peso y su condicion general (Estado de ánimo, apetito, apariencia, color de piel, etc) han tenido alguna variación en los últimos 6 meses?')!!}<br>
				<p>{{ $cuestionario->p7 }}</p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','8. ¿Utiliza o ha utilizado algún tipo de droga?')!!}<br>
				<p>{{ $cuestionario->p8 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','9. ¿Utiliza o ha utilizado algún medicamente recientemente?')!!}<br>
				<p>{{ $cuestionario->p9 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','10. ¿Ha habido en su familia muertes por enfermedad de: Corazón - Circulación - Diabetes?')!!}<br>
				<p>{{ $cuestionario->p10 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','11. ¿Ha tenido o se encuentra en tratamiento de rehabilitación física o mental?')!!}<br>
				<p>{{ $cuestionario->p11 }}</p>
			</div>
			</li>
			
			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','12. ¿Ha tenido o se encuentra en tratamiento con insulina, cortisona u otro tipo de hormona?')!!}<br>
				<p>{{ $cuestionario->p12 }}</p>
			</div>
			</li>

			<div class="page-break"></div>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','13. ¿Se ha sometido a algún tipo de examen radiológico por enfermedad o chequeo médico, por ejemplo Rx Torax, ultrasonido, gastroscopía, mamografía, etc?')!!}<br>
				<p>{{ $cuestionario->p13 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','14. ¿Le han practicado electrocardiograma, electroencefalogramas, o similares?')!!}<br>
				<p>{{ $cuestionario->p14 }}</p>
			</div>
			</li>

            <li class="list-group-item">
            <div class="form-group">

            {!!Html::decode(Form::label('pregunta','15. ¿Padece o ha padecido usted de?:'))!!}<br>

			<ul id="lista1" class="list-group">

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15a. Dolor de cabeza crónico, vértigo, epilepsia o convulsiones, estados depresivos o ansiosos, o alguna otra enfermedad del sistema nervioso.</small>'))!!}
				<p><small>{{ $cuestionario->p15a }}</small></p>	
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15b. Enfermedades o alguna perturbación de los ojos u oídos.</small>'))!!}
				<p><small>{{ $cuestionario->p15b }}</small></p>
			</div>
			</li>	

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15c. Presion arterial elevada, soplos cardíacos, infartos u otra enfermedad del corazón, fiebre reumática, dificultades en la respiración, dolor de pecho, várices, fiebitis, hemofilia u otras enfermedades del aparato circulatorio.</small>'))!!}
				<p><small>{{ $cuestionario->p15c }}</small></p>
			</div>
			</li>	

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15d. Ronquera crónica, asma, bronquitis crónica u otras enfermedades del aparato respiratorio.</small>'))!!}
				<p><small>{{ $cuestionario->p15d }}</small></p>	
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15e. Úlcera gástrica, sangrado digestivo, hepatitis u otras enfemedades del hígado y del aparato digestivo.</small>'))!!}

			<p><small>{{ $cuestionario->p15e }}</small></p>

			</div>
			</li>	

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15f. Dislipidemia(alteración del metabolismo lípídico(grasas), con su consecuente alteración de las concentraciones de lípidos y lipoproteínas en la sangre) ¿Se ha realizado exámenes de colesterol y triglíceridos?</small>'))!!}
			<p><small>{{ $cuestionario->p15f }}</small></p>
			</div>
			</li>	

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15g. Enfermedades en riñones, vejiga, próstata, genitales, enfermedades venéreas o albuminiria: presencia de albúmina(proteína hidrosoluble que se encuentra en el plasma sanguíneo) en la orina.</small>'))!!}
				<p><small>{{ $cuestionario->p15g }}</small></p>
			</div>
			</li>	

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15h. Artritis, afecciones o deformidades en la columna, lumbalgia, ciática, reumatismo, gota u otras enfermedades en los huesos o articulaciones.</small>'))!!}
				<p><small>{{ $cuestionario->p15h }}</small></p>	
			</div>
			</li>
			
			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15i. Diabetes.</small>'))!!}
				<p><small>{{ $cuestionario->p15i }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15j. Tumores, cáncer o quistes.</small>'))!!}
				<p><small>{{ $cuestionario->p15j }}</small></p>
			</div>
			</li>

			</ul>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','16. ¿Le han practicado alguna prueba para detectar el SIDA?')!!}<br>
				@if ($cuestionario->p16=='NO')
					<p>{{ $cuestionario->p16 }}</p>
				@else
					<p>Causa: {{ $cuestionario->p16a }}</p>		
				@endif
			</div>
			</li>

			<div class="page-break"></div>

		<li class="list-group-item">

		{!!Html::decode(Form::label('pregunta','17. ¿En los últimos años ha padecido o padece de?:'))!!}<br><br>

         <ul id="lista2" class="list-group">

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17a. Fiebre de origen desconocido.</small>'))!!}
				<p><small>{{ $cuestionario->p17b }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17b. Diarreas persistentes.</small>'))!!}
				<p><small>{{ $cuestionario->p17b }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17c. Lesiones orales o en la piel.</small>'))!!}
				<p><small>{{ $cuestionario->p17c }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17d. Inflamación de ganglios.</small>'))!!}
				<p><small>{{ $cuestionario->p17d }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17e. Sudoración nocturna.</small>'))!!}
				<p><small>{{ $cuestionario->p17e }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17f. Dolores persistentes en miembros o articulaciones.</small>'))!!}
				<p><small>{{ $cuestionario->p17f }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17g. Pérdidas de la fuerza vital o normal.</small>'))!!}
				<p><small>{{ $cuestionario->p17g }}</small></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17h. Meningitis.</small>'))!!}
				<p><small>{{ $cuestionario->p17h }}</small></p>
			</div>
			</li>

		</ul>
		
		</li>

		</div><!--Fin del col -->
		<div class="col-md-6">

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','18. ¿En los últimos 6 meses ha aumentado o disminuido de peso?')!!}<br>
				
				@if ($cuestionario->p18 == 'NO')
					<p>{{ $cuestionario->p18 }}</p>
				@else
					<br>Cantidad de kilos: {{ $cuestionario->p18a }}</br>
					<br>Causa: {{ $cuestionario->p18b }}</br><br><br>	
				@endif
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','19. ¿Ha estado hospitalizado?')!!}<br>

				@if ($cuestionario->p19 == 'NO')
					<p>{{ $cuestionario->p19 }}</p>
				@else
					<br>Causa: {{ $cuestionario->p19a }}</br>
					<br>Fecha: {{ $cuestionario->p19b }}</br>
					<br>Centro médico: {{ $cuestionario->p19c }}</br><br><br>
				@endif

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','20. ¿Le han practicado algún tipo de operación?')!!}<br>

				@if ($cuestionario->p20 == 'NO')
					<p>{{ $cuestionario->p20 }}</p>
				@else
					<br>Causa: {{ $cuestionario->p20a }}</br>
					<br>Fecha: {{ $cuestionario->p20b }}</br>
					<br>Centro médico: {{ $cuestionario->p20c }}</br><br><br>
				@endif
			
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','21. ¿Piensa someterse a alguna intervención quirúrgica en un futuro próximo?')!!}<br>

				@if ($cuestionario->p21 == 'NO')
					<p>{{ $cuestionario->p21 }}</p>
				@else
					<br>Causa: {{ $cuestionario->p21a }}</br><br><br>
				@endif

			</div>
			</li>

			<div class="page-break"></div>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','22. ¿Ha sido incapacitado por enfermedad o accidente?')!!}<br>

				@if ($cuestionario->p22 == 'NO')
					<p>{{ $cuestionario->p22 }}</p>
				@else
					<br>Causa: {{ $cuestionario->p22a }}</br>
					<br>Fecha: {{ $cuestionario->p22b }}</br>
					<br>Centro médico: {{ $cuestionario->p22c }}</br><br><br>
				@endif

			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','23. ¿Tiene o ha tenido algún padecimiento que no se le haya mencionado?')!!}<br>

				@if ($cuestionario->p23 == 'NO')
					<p>{{ $cuestionario->p23 }}</p>
				@else
					<p>{{ $cuestionario->p23a }}</p>
				@endif

			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','24. ¿Está tramitando o piensa tramitar en el corto plazo una incapacidad permanente?')!!}<br>
				<p>{{ $cuestionario->p24 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','25. ¿A consultado al Instituto Nacional de Seguros (INS) por alguna enfermedad o accidente de trabajo?')!!}<br>

				@if ($cuestionario->p25 == 'NO')
					<p>{{ $cuestionario->p25 }}</p>
				@else
					<p>Causa: {{ $cuestionario->p25a }}</p>
				@endif
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','26. ¿Tiene usted las vacunas al día?')!!}<br>
				<p>{{ $cuestionario->p26 }}</p>
			</div>
			</li>

			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','27. ¿Se ha aplicado la vacuna del tetano hace menos de 10 años?')!!}<br>
				<p>{{ $cuestionario->p27 }}</p>
			</div>
			</li>
 			
 			<li class="list-group-item"><div class="form-group">
				{!!Form::label('pregunta','28. ¿Utiliza o toma usted algún medicamento continuamente o por temporadas?')!!}<br>

				@if ($cuestionario->p28 == 'NO')
					<p>{{ $cuestionario->p28 }}</p>
				@else
					<p>{{ $cuestionario->p28a }}</p>
				@endif

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','29. ¿Tiene venas saltadas en sus piernas?')!!}<br>
				<p>{{ $cuestionario->p29 }}</p>
			</div>
			</li>
			
			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','30. ¿Se le duermen las manos?')!!}<br>
				<p>{{ $cuestionario->p30 }}</p>
			</div>
			</li>
			
			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','31. ¿Tiene dificultad para mover sus manos?')!!}<br>
				<p>{{ $cuestionario->p31 }}</p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','32. ¿Tiene problemas para caminar?')!!}<br>
				<p>{{ $cuestionario->p32 }}</p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('pregunta','33. ¿Padece usted de hemorroides?')!!}<br>
				<p>{{ $cuestionario->p33 }}</p>
			</div>
			</li>

			<div class="page-break"></div>
			
			<li class="list-group-item">

            {!!Form::label('pregunta','34. Preguntas adicionales para mujeres: ')!!}<br><br>

            <ul id="lista3" class="list-group">

            <li class="list-group-item">
            <div class="form-group">
				
				{!!Html::decode(Form::label('pregunta','<small>34a. ¿Es su menstruación irregular?</small>'))!!}<br>

				<p><small>{{ $cuestionario->p34a }}</small></p>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34b. ¿Padece de sangrado fuera del período menstrual?</small>'))!!}<br>

				<p><small>{{ $cuestionario->p34b }}</small></p>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">

				{!!Html::decode(Form::label('pregunta','<small>34c. Fecha de última menstruación
				</small>'))!!}
				<br>

				<p><small>{{ $cuestionario->p34c }}</small></p>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34d. Resultado de último papanicolau</small>'))!!}<br>

				<p><small>{{ $cuestionario->p34d }}</small></p>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34e. ¿Ha tenido dificultades en partos?</small>'))!!}<br>

				<p><small>{{ $cuestionario->p34e }}</small></p>

			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34f. ¿Ha tenido alguna enfermedad o padecimiento ginecológico o de los senos?</small>'))!!}<br>

				@if ($cuestionario->p34f=='NO')
					<p><small>{{ $cuestionario->p34f }}</small></p>
				@else
					<p><small>{{ $cuestionario->p34f1 }}</small></p>
				@endif

			</div>
			</li>			

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34g. Fecha de última mamografía y resultado: </small>'))!!}<br>
				@if (!empty($cuestionario->p34g1))
				<br><small>Fecha: {{ $cuestionario->p34g1 }}</small></br>
				<br><small>Resultado: {{ $cuestionario->p34g2 }}</small></br><br><br>
				@endif
				
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34h. ¿Está embarazada?</small>'))!!}<br>

				@if ($cuestionario->p34h=='SI')
					<br><small>Semanas o meses de gestacion: {{ $cuestionario->p34h1 }}</small></br>
					<br><small>Complicaciones: {{ $cuestionario->p34h2 }}</small></br>
				@else
					<p><small>{{ $cuestionario->p34h }}</small></p>
				@endif

			</div>
			</li>

             </ul>
             </li>

             <div class="page-break"></div>
             
             <li class="list-group-item">
             	{!! Form::label('Evidencia', '35. ¿Encuentra evidencia actual o pasada de enfermedad u operaciones en alguna de las siguientes zonas? ') !!}<br><br>

             	<ul class="list-group">

             		<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35a. Cráneo y oídos: </small>'))!!}		
					@if ($cuestionario->e1=='NO')
						<small>{{ $cuestionario->e1}}</small><br><br>
					@else
						<small>{{ $cuestionario->e1a }}</small><br><br>
					@endif

					</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35b. Boca y garganta: </small>'))!!}	

					@if ($cuestionario->e2=='NO')
						<small>{{ $cuestionario->e2}}</small><br><br>
					@else
						<small>{{ $cuestionario->e2a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35c. Ojos: </small>'))!!}		
					@if ($cuestionario->e3=='NO')
						<small>{{ $cuestionario->e3}}</small><br><br>
					@else
						<small>{{ $cuestionario->e3a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35d. Cuello - tiroides: </small>'))!!}	

					@if ($cuestionario->e4=='NO')
						<small>{{ $cuestionario->e4}}</small><br><br>
					@else
						<small>{{ $cuestionario->e4a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>35e. Pulmones: </small>'))!!}		
					@if($cuestionario->e5=='NO')
						<small>{{ $cuestionario->e5}}</small><br><br>
					@else
						<small>{{ $cuestionario->e5a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
             		{!!Html::decode(Form::label('pregunta','<small>35f. Corazón: </small>'))!!}
					@if ($cuestionario->e6=='NO')
						<small>{{ $cuestionario->e6}}</small><br><br>
					@else
						<small>{{ $cuestionario->e6a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35g. Abdomen: </small>'))!!}	
					@if ($cuestionario->e7=='NO')
						<small>{{ $cuestionario->e7}}</small><br><br>
					@else
						<small>{{ $cuestionario->e7a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35h. Sistema vascular periférico: </small>'))!!}		

					@if ($cuestionario->e8=='NO')
						<small>{{ $cuestionario->e8}}</small><br><br>
					@else
						<small>{{ $cuestionario->e8a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">

					{!!Html::decode(Form::label('pregunta','<small>35i. Estado neurológico: </small>'))!!}		

					@if ($cuestionario->e9=='NO')
						<small>{{ $cuestionario->e9}}</small><br><br>
					@else
						<small>{{ $cuestionario->e9a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35j. Sistema muscular: </small>'))!!}		

					@if ($cuestionario->e10=='NO')
						<small>{{ $cuestionario->e10}}</small><br><br>
					@else
						<small>{{ $cuestionario->e10a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35k. Sistema Articular: </small>'))!!}		

					@if ($cuestionario->e11=='NO')
						<small>{{ $cuestionario->e11}}</small><br><br>
					@else
						<small>{{ $cuestionario->e11a }}</small><br><br>
					@endif

					</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35l. Testículos: </small>'))!!}

					@if ($cuestionario->e12=='NO')
						<small>{{ $cuestionario->e12}}</small><br><br>
					@else
						<small>{{ $cuestionario->e12a }}</small><br><br>
					@endif

				</div>
				</li>

				<li class="list-group-item">
             		<div class="form-group">
					{!!Html::decode(Form::label('pregunta','<small>35m. Mamas: </small>'))!!}		
					
					@if ($cuestionario->e13=='NO')
						<small>{{ $cuestionario->e13}}</small><br><br>
					@else
						<small>{{ $cuestionario->e13a }}</small><br><br>
					@endif

				</div><br>
				</li>

             </ul>
             </li>

             <li class="list-group-item"><div class="form-group">
				{!!Form::label('detalles','Información relevante sobre el paciente encuestado a partir de las preguntas realizadas:')!!}<br>
				<p><i>{{ $cuestionario->detalles }}</i></p>
			</div>
			</li>

			<li class="list-group-item">
			<div class="form-group">
				{!!Form::label('condicion','Condición del empleado para emplear tareas demandadas por su puesto: ')!!}<br>
				<p><i>{{ $cuestionario->condicion }}</i></p>
			</div>
			</li>

			
		</div><!-- Fin del Col -->
		<div class="clearfix"></div>
		</ul>

		<div class="form-group well">
			
				<p>Esta encuesta fue realizada por médico: {{ $cuestionario->medico }}</p>
					
		</div><br><br>
		</div>
		</div>	
	</div>

</form>

<footer>
<br>Hospital Cooperativo, Consalud R.L</br>
<br>Tel: 2460-1080</br>
<br>servicios@hospitalcooperativo.com</br>
</footer>

</body>
</html>