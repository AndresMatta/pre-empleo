<div class="container">
		<div class="panel panel-primary">

		<div class="panel-heading"><h2>Datos Personales</h2></div><br>
 		<div class="panel-body">
        <div class="col-md-6">
        
			<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
				{!!Form::label('nombre','Nombre completo:')!!}<br>
				{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese aquí el nombre', 'required'])!!}

				@if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('identificacion') ? ' has-error' : '' }}">
				{!!Form::label('identificacion','Número de cédula:')!!}<br>
				{!!Form::text('identificacion',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la cédula', 'required'])!!}

				@if ($errors->has('identificacion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('identificacion') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
				{!!Form::label('edad','Edad:')!!}<br>
				{!!Form::text('edad',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la edad', 'required'])!!}

				@if ($errors->has('edad'))
                    <span class="help-block">
                        <strong>{{ $errors->first('edad') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
				{!!Form::label('estado_civil','Estado Civil:')!!}<br>
				{!!Form::select('estado_civil', ['SOLTERO' => 'Soltero/a','CASADO' => 'Casado/a','DIVORCIADO' => 'Divorciado/a','VIUDO' => 'Viudo/a'], null, 
				['class'=>'form-control','placeholder' => 'Seleccione el estado civil...', 'required'])!!}

				@if ($errors->has('estado_civil'))
                    <span class="help-block">
                        <strong>{{ $errors->first('estado_civil') }}</strong>
                    </span>
                @endif    
			</div>
	    </div>
	    <div class="col-md-6">
			<div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
				{!!Form::label('nacionalidad','Nacionalidad:')!!}<br>
				{!!Form::text('nacionalidad',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la nacionalidad', 'required'])!!}

				@if ($errors->has('nacionalidad'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nacionalidad') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('residencia') ? ' has-error' : '' }}">
				{!!Form::label('residencia','Residencia:')!!}<br>
				{!!Form::text('residencia',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la residencia', 'required'])!!}
				@if ($errors->has('residencia'))
                    <span class="help-block">
                        <strong>{{ $errors->first('residencia') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('puesto') ? ' has-error' : '' }}">
				{!!Form::label('puesto','Puesto del empleado:')!!}<br>
				{!!Form::text('puesto',null,['class'=>'form-control','placeholder'=>'Ingrese aquí el puesto', 'required'])!!}
				@if ($errors->has('puesto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('puesto') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group{{ $errors->has('empresa') ? ' has-error' : '' }}">
				{!!Form::label('empresa','Empresa:')!!}<br>
				{!!Form::select('empresa', ['COOPELESCA' => 'Coopelesca'], null, 
				['class'=>'form-control','placeholder' => 'Seleccione una empresa...', 'required'])!!}
				
				@if ($errors->has('empresa'))
                    <span class="help-block">
                        <strong>{{ $errors->first('empresa') }}</strong>
                    </span>
                @endif
			</div><br>
	</div>		
	</div>
    </div>

	<div class="clearfix"></div>

	<div class="panel panel-primary">
	<div class="panel-heading"><h2>Encuesta Médica</h2></div><br>
	<div class="panel-body">
    <ul class="list-group">
	<div class="col-md-6">
	
			<li class="list-group-item{{ $errors->has('p1') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','1. ¿Practica usted algún deporte o actividad adicional?')!!}<br>
                <div class="radio">   
				<input type="radio" name="p1" id="p1S" value="SI" onclick="toggle(this,'uno' )"
				@if(old('p1')=='SI') checked="checked" @endif> 
				<label for="p1S">Sí</label>
				<input type="radio" name="p1" id="p1N" value="NO" onclick="toggle(this,'uno')"
				@if(old('p1')=='NO') checked="checked" @endif> 
				<label for="p1N">No</label>
				</div>
				<div id="uno" @if(old('p1')!='SI') style="display:none" @endif>
				{!!Html::decode(Form::label('p1a','<small>Si su respuesta anterior fue sí, ¿Con cuanta frecuencia?</small>'))!!}
				{!!Form::select('p1a', [
					'5 o más veces a la semana' => '5 o más veces a la semana', 
					'De 3 a 4 veces por semana'=>'De 3 a 4 veces por semana', 
					'De 1 a 2 veces por semana'=>'De 1 a 2 veces por semana', 
					'Menos de 1 vez por semana'=>'Menos de 1 vez por semana'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
			    </div>
			    </div>
			    @if ($errors->has('p1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p1') }}</strong>
                    </span>
                @endif
			
			</li>

			<li class="list-group-item{{ $errors->has('p2') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','2. ¿Usted fuma?')!!}<br>
                <div class="radio">                                 
				<input type="radio" name="p2" id="p2S" value="SI" onclick="toggle(this,'dos')"
				@if(old('p2')=='SI') checked="checked" @endif> 
				<label for="p2S">Sí</label>
		
				<input type="radio" name="p2" id="p2N" value="NO" onclick="toggle(this,'dos')"
				@if(old('p2')=='NO') checked="checked" @endif>
				<label for="p2N">No</label>
				</div>
				<div id="dos" @if(old('p2')!='SI') style="display: none" @endif>
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
			@if ($errors->has('p2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p2') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p3') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','3. ¿Consume usted alcohol?')!!}<br>
                <div class="radio">                                 
				<input type="radio" name="p3" id="p3S" value="SI" onclick="toggle(this,'tres')"
				@if(old('p3')=='SI') checked="checked" @endif> 
				<label for="p3S">Sí</label>
				<input type="radio" name="p3" id="p3N" value="NO" onclick="toggle(this,'tres')"
				@if(old('p3')=='NO') checked="checked" @endif>
				<label for="p3N">No</label>
				</div>
				<div id="tres" @if(old('p3')!='SI') style="display: none; @endif">
				{!!Html::decode(Form::label('p3a','<small>Si su respuesta anterior fue sí, ¿Cuánto consume?</small>'))!!}
				{!!Form::select('p3a', [
					'Una vez cada 3 meses' => 'Una vez cada 3 meses', 
					'Una vez al mes'=>'Una vez al mes', 
					'Una vez cada 15 días'=>'Una vez cada 15 días', 
					'Una vez por semana'=>'Una vez por semana',
					'Todos los días'=>'Todos los días'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
                </div>
			</div>
			@if ($errors->has('p3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p3') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p4') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','4. Indique si ha tenido problemas de salud en los últimos 6 meses (Cualquier tipo de problema o síntoma aunque no tenga diagnóstico médico ni haya consultado con un médico)')!!}<br>
				<div class="radio">
				<input type="radio" name="p4" id="p4S" value="SI" 
				@if(old('p4')=='SI') checked="checked" @endif> 
				<label for="p4S">Sí</label>
		
				<input type="radio" name="p4" id="p4N" value="NO" 
				@if(old('p4')=='NO') checked="checked" @endif>
				<label for="p4N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p4') }}</strong>
                    </span>
            @endif
			</li>
			
			<li class="list-group-item{{ $errors->has('p5') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','5. Indique si tiene algún tipo de examen pendiente (De laboratorio, radiografías, ultrasonidos, tomografías, electrocardiograma o de cualquier otro tipo)')!!}<br>
				<div class="radio">
				<input type="radio" name="p5" id="p5S" value="SI" 
				@if(old('p5')=='SI') checked="checked" @endif> 
				<label for="p5S">Sí</label>
				<input type="radio" name="p5" id="p5N" value="NO"
				@if(old('p5')=='NO') checked="checked" @endif>
				<label for="p5N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p5'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p5') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p6') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','6. Indique cuando fue la última vez que consultó con un médico')!!}<br>
				{!!Form::select('p6', [
					'Hace más de 1 año' => 'Hace más de 1 año', 
					'De 6 meses a 1 año'=>'De 6 meses a 1 año', 
					'De 3 a 6 meses'=>'De 3 a 6 meses', 
					'De 1 a 3 meses'=>'De 1 a 3 meses',
					'Ha consultado en este último mes'=>'Ha consultado en este último mes'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...'])!!}<br>
			</div>
			@if ($errors->has('p6'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p6') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p7') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','7. ¿Su peso y su condicion general (Estado de ánimo, apetito, apariencia, color de piel, etc) han tenido alguna variación en los últimos 6 meses?')!!}<br>
				<div class="radio">
				<input type="radio" name="p7" id="p7S" value="SI"
				@if(old('p7')=='SI') checked="checked" @endif> 
				<label for="p7S">Sí</label>
				<input type="radio" name="p7" id="p7N" value="NO" 
				@if(old('p7')=='NO') checked="checked" @endif>
				<label for="p7N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p7'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p7') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p8') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','8. ¿Utiliza o ha utilizado algún tipo de droga?')!!}<br>
				<div class="radio">
				<input type="radio" name="p8" id="p8S" value="SI"
				@if(old('p8')=='SI') checked="checked" @endif> 
				<label for="p8S">Sí</label>
				<input type="radio" name="p8" id="p8N" value="NO"
				@if(old('p8')=='NO') checked="checked" @endif>
				<label for="p8N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p8'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p8') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p9') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','9. ¿Utiliza o ha utilizado algún medicamente recientemente?')!!}<br>
				<div class="radio">
				<input type="radio" name="p9" id="p9S" value="SI" 
				@if(old('p9')=='SI') checked="checked" @endif> 
				<label for="p9S">Sí</label>
				<input type="radio" name="p9" id="p9N" value="NO"
				@if(old('p9')=='NO') checked="checked" @endif>
				<label for="p9N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p9'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p9') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p10') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','10. ¿Ha habido en su familia muertes por enfermedad de: Corazón - Circulación - Diabetes?')!!}<br>
				<div class="radio">
				<input type="radio" name="p10" id="p10S" value="SI"
				@if(old('p10')=='SI') checked="checked" @endif> 
				<label for="p10S">Sí</label>
				<input type="radio" name="p10" id="p10N" value="NO"
				@if(old('p10')=='NO') checked="checked" @endif>
				<label for="p10N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p10'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p10') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p11') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','11. ¿Ha tenido o se encuentra en tratamiento de rehabilitación física o mental?')!!}<br>
				<div class="radio">
				<input type="radio" name="p11" id="p11S" value="SI"
				@if(old('p11')=='SI') checked="checked" @endif> 
				<label for="p11S">Sí</label>
				<input type="radio" name="p11" id="p11N" value="NO"
				@if(old('p11')=='NO') checked="checked" @endif>
				<label for="p11N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p11'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p11') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p12') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','12. ¿Ha tenido o se encuentra en tratamiento con insulina, cortisona u otro tipo de hormona?')!!}<br>
				<div class="radio">
				<input type="radio" name="p12" id="p12S" value="SI"
				@if(old('p12')=='SI') checked="checked" @endif> 
				<label for="p12S">Sí</label>
				<input type="radio" name="p12" id="p12N" value="NO"
				@if(old('p12')=='NO') checked="checked" @endif>
				<label for="p12N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p12'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p12') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p13') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','13. ¿Se ha sometido a algún tipo de examen radiológico por enfermedad o chequeo médico, por ejemplo Rx Torax, ultrasonido, gastroscopía, mamografía, etc?')!!}<br>
				<div class="radio">
				<input type="radio" name="p13" id="p13S" value="SI"
				@if(old('p13')=='SI') checked="checked" @endif> 
				<label for="p13S">Sí</label>
				<input type="radio" name="p13" id="p13N" value="NO"
				@if(old('p13')=='NO') checked="checked" @endif>
				<label for="p13N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p13'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p13') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p14') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','14. ¿Le han practicado electrocardiograma, electroencefalogramas, o similares?')!!}<br>
				<div class="radio">
				<input type="radio" name="p14" id="p14S" value="SI"
				@if(old('p14')=='SI') checked="checked" @endif> 
				<label for="p14S">Sí</label>
				<input type="radio" name="p14" id="p14N" value="NO"
				@if(old('p14')=='NO') checked="checked" @endif>
				<label for="p14N">No</label>
				</div><br>
			</div>
			@if ($errors->has('p14'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p14') }}</strong>
                    </span>
            @endif
			</li>

            <li class="list-group-item">

            {!!Form::label('pregunta','15. ¿Padece o ha padecido usted de?: ')!!}<br><br>
            
            <div class="checkbox">
 			{!!Form::checkbox('check2', 'SI',false,['class'=> 'checkbox', 'id'=>'check2', 'onclick'=>'showContent("check2","ocultar1")']) !!}

            {!!Html::decode(Form::label('check2', 'Mostrar',['for'=>'check2']))  !!}<br><br>
            </div>

            <div id="ocultar1" @if(empty(old('check2'))) style="display: none;" @endif>

			<ul id="lista1" class="list-group">
			<li class="list-group-item{{ $errors->has('p15a') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15a. Dolor de cabeza crónico, vértigo, epilepsia o convulsiones, estados depresivos o ansiosos, o alguna otra enfermedad del sistema nervioso.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15a" id="p15aS" value="SI"
				@if(old('p15a')=='SI') checked="checked" @endif> 
				<label for="p15aS">Sí</label>
				<input type="radio" name="p15a" id="p15aN" value="NO"
				@if(old('p15a')=='NO') checked="checked" @endif>
				<label for="p15aN">No</label>
				</div>
			</div>
			@if ($errors->has('p15a'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15a') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p15b') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15b. Enfermedades o alguna perturbación de los ojos u oídos.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15b" id="p15bS" value="SI"
				@if(old('p15b')=='SI') checked="checked" @endif> 
				<label for="p15bS">Sí</label>
				<input type="radio" name="p15b" id="p15bN" value="NO"
				@if(old('p15b')=='NO') checked="checked" @endif>
				<label for="p15bN">No</label>
				</div>
			</div>
			@if ($errors->has('p15b'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15b') }}</strong>
                    </span>
            @endif
			</li>	

			<li class="list-group-item{{ $errors->has('p15c') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15c. Presion arterial elevada, soplos cardíacos, infartos u otra enfermedad del corazón, fiebre reumática, dificultades en la respiración, dolor de pecho, várices, fiebitis, hemofilia u otras enfermedades del aparato circulatorio.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15c" id="p15cS" value="SI"
				@if(old('p15c')=='SI') checked="checked" @endif> 
				<label for="p15cS">Sí</label>
				<input type="radio" name="p15c" id="p15cN" value="NO"
				@if(old('p15c')=='NO') checked="checked" @endif>
				<label for="p15cN">No</label>
				</div>
			</div>
			@if ($errors->has('p15c'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15c') }}</strong>
                    </span>
            @endif
			</li>	

			<li class="list-group-item{{ $errors->has('p15d') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15d. Ronquera crónica, asma, bronquitis crónica u otras enfermedades del aparato respiratorio.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15d" id="p15dS" value="SI"> 
				@if(old('p15d')=='SI') checked="checked" @endif
				<label for="p15dS">Sí</label>
				<input type="radio" name="p15d" id="p15dN" value="NO"
				@if(old('p15d')=='NO') checked="checked" @endif>
				<label for="p15dN">No</label>
				</div>
			</div>
			@if ($errors->has('p15d'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15d') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p15e') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15e. Úlcera gástrica, sangrado digestivo, hepatitis u otras enfemedades del hígado y del aparato digestivo.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15e" id="p15eS" value="SI"
				@if(old('p15e')=='SI') checked="checked" @endif> 
				<label for="p15eS">Sí</label>
		
				<input type="radio" name="p15e" id="p15eN" value="NO"
				@if(old('p15e')=='NO') checked="checked" @endif>
				<label for="p15eN">No</label>
				</div>
			</div>
			@if ($errors->has('p15e'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15e') }}</strong>
                    </span>
            @endif
			</li>	

			<li class="list-group-item{{ $errors->has('p15f') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15f. Dislipidemia(alteración del metabolismo lípídico(grasas), con su consecuente alteración de las concentraciones de lípidos y lipoproteínas en la sangre) ¿Se ha realizado exámenes de colesterol y triglíceridos?</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15f" id="p15fS" value="SI"
				@if(old('p15f')=='SI') checked="checked" @endif> 
				<label for="p15fS">Sí</label>
				<input type="radio" name="p15f" id="p15fN" value="NO"
				@if(old('p15f')=='NO') checked="checked" @endif>
				<label for="p15fN">No</label>
				</div>
			</div>
			@if ($errors->has('p15f'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15f') }}</strong>
                    </span>
            @endif
			</li>	

			<li class="list-group-item{{ $errors->has('p15g') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15g. Enfermedades en riñones, vejiga, próstata, genitales, enfermedades venéreas o albuminiria: presencia de albúmina(proteína hidrosoluble que se encuentra en el plasma sanguíneo) en la orina.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15g" id="p15gS" value="SI" 
				@if(old('p15g')=='SI') checked="checked" @endif>  
				<label for="p15gS">Sí</label>
				<input type="radio" name="p15g" id="p15gN" value="NO" 
				@if(old('p15g')=='NO') checked="checked" @endif>
				<label for="p15gN">No</label>
				</div>
			</div>
			@if ($errors->has('p15g'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15g') }}</strong>
                    </span>
            @endif
			</li>	

			<li class="list-group-item{{ $errors->has('p15h') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15h. Artritis, afecciones o deformidades en la columna, lumbalgia, ciática, reumatismo, gota u otras enfermedades en los huesos o articulaciones.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15h" id="p15hS" value="SI" 
				@if(old('p15h')=='SI') checked="checked" @endif>  
				<label for="p15hS">Sí</label>
				<input type="radio" name="p15h" id="p15hN" value="NO" 
				@if(old('p15h')=='NO') checked="checked" @endif>
				<label for="p15hN">No</label>
				</div>
			</div>
			@if ($errors->has('p15h'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15h') }}</strong>
                    </span>
            @endif
            </li>	

			<li class="list-group-item{{ $errors->has('p15i') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15i. Diabetes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15i" id="p15iS" value="SI" 
				@if(old('p15i')=='SI') checked="checked" @endif>  
				<label for="p15iS">Sí</label>
				<input type="radio" name="p15i" id="p15iN" value="NO" 
				@if(old('p15i')=='NO') checked="checked" @endif>
				<label for="p15iN">No</label>
				</div>
			</div>
			@if ($errors->has('p15i'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15i') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p15j') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>15j. Tumores, cáncer o quistes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p15j" id="p15jS" value="SI" @if(old('p15j')=='SI') checked="checked" @endif> 
				<label for="p15jS">Sí</label>
		
				<input type="radio" name="p15j" id="p15jN" value="NO" @if(old('p15j')=='NO') checked="checked" @endif>
				<label for="p15jN">No</label>
				</div><br>
			</div>
			@if ($errors->has('p15j'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p15j') }}</strong>
                    </span>
            @endif
			</li>
			</ul>
			</div>
			</li>

			<li class="list-group-item{{ $errors->has('p16') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','16. ¿Le han practicado alguna prueba para detectar el SIDA?')!!}<br>
				<div class="radio">
				<input type="radio" name="p16" id="p16S" value="SI" 
				@if(old('p16')=='SI') checked="checked" @endif onclick="toggle(this,'cuatro')"> 
				<label for="p16S">Sí</label>
		
				<input type="radio" name="p16" id="p16N" value="NO" 
				@if(old('p16')=='NO') checked="checked" @endif onclick="toggle(this,'cuatro')">
				<label for="p16N">No</label><br>
				</div>
				<div id="cuatro" style="display: none">
				{!!Html::decode(Form::label('p16a','<small>Si la respuesta anterior fue sí, indique la causa:</small>'))!!}<br>
				{!!Form::text('p16a',null,['class'=>'form-control','placeholder'=>'Ingrese aquí la causa'])!!}
				</div>
			</div>
			@if ($errors->has('p16'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p16') }}</strong>
                    </span>
            @endif
			</li>

		<li class="list-group-item">
		<br>
		{!!Form::label('pregunta','17. ¿En los últimos años ha padecido o padece de?: ')!!}

		<div class="checkbox">
		   {!!Form::checkbox('check3', 'SI',false,['class'=> 'checkbox', 'id'=>'check3', 'onclick'=>'showContent("check3","ocultar2")']) !!}
            {!!Html::decode(Form::label('check3', 'Mostrar',['for'=>'check3']))  !!}<br><br>
		</div>

        <div id="ocultar2" @if(empty(old('check3'))) style="display: none;" @endif>
        <ul id="lista2" class="list-group">
			<li class="list-group-item{{ $errors->has('p17a') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17a. Fiebre de origen desconocido.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17a" id="p17aS" value="SI"
				@if(old('p17a')=='SI') checked="checked" @endif> 
				<label for="p17aS">Sí</label>
				<input type="radio" name="p17a" id="p17aN" value="NO"
				@if(old('p17a')=='NO') checked="checked" @endif>
				<label for="p17aN">No</label>
				</div>
			</div>
			@if ($errors->has('p17a'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17a') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17b') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17b. Diarreas persistentes.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17b" id="p17bS" value="SI"
				@if(old('p17b')=='SI') checked="checked" @endif> 
				<label for="p17bS">Sí</label>
				<input type="radio" name="p17b" id="p17bN" value="NO"
				@if(old('p17b')=='NO') checked="checked" @endif>
				<label for="p17bN">No</label>
				</div>
			</div>
			@if ($errors->has('p17b'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17b') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17c') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17c. Lesiones orales o en la piel.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17c" id="p17cS" value="SI"
				@if(old('p17c')=='SI') checked="checked" @endif>
				<label for="p17cS">Sí</label>
				<input type="radio" name="p17c" id="p17cN" value="NO"
				@if(old('p17c')=='NO') checked="checked" @endif>
				<label for="p17cN">No</label>
				</div>
			</div>
			@if ($errors->has('p17c'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17c') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17d') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17d. Inflamación de ganglios.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17d" id="p17dS" value="SI"
				@if(old('p17d')=='SI') checked="checked" @endif> 
				<label for="p17dS">Sí</label>
				<input type="radio" name="p17d" id="p17dN" value="NO"
				@if(old('p17d')=='NO') checked="checked" @endif>
				<label for="p17dN">No</label>
				</div>
			</div>
			@if ($errors->has('p17d'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17d') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17e') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17e. Sudoración nocturna.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17e" id="p17eS" value="SI"
				@if(old('p17e')=='SI') checked="checked" @endif> 
				<label for="p17eS">Sí</label>
				<input type="radio" name="p17e" id="p17eN" value="NO"
				@if(old('p17e')=='NO') checked="checked" @endif>
				<label for="p17eN">No</label>
				</div>
			</div>
			@if ($errors->has('p17e'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17e') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17f') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17f. Dolores persistentes en miembros o articulaciones.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17f" id="p17fS" value="SI"
				@if(old('p17f')=='SI') checked="checked" @endif> 
				<label for="p17fS">Sí</label>
				<input type="radio" name="p17f" id="p17fN" value="NO"
				@if(old('p17f')=='NO') checked="checked" @endif>
				<label for="p17fN">No</label>
				</div>
			</div>
			@if ($errors->has('p17f'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17f') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17g') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17g. Pérdidas de la fuerza vital o normal.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17g" id="p17gS" value="SI"
				@if(old('p17g')=='SI') checked="checked" @endif> 
				<label for="p17gS">Sí</label>
				<input type="radio" name="p17g" id="p17gN" value="NO"
				@if(old('p17g')=='NO') checked="checked" @endif>
				<label for="p17gN">No</label>
				</div>
			</div>
			@if ($errors->has('p17g'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17g') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p17h') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>17h. Meningitis.</small>'))!!}
				<div class="radio">
				<input type="radio" name="p17h" id="p17hS" value="SI"
				@if(old('p17h')=='SI') checked="checked" @endif>
				<label for="p17hS">Sí</label>
				<input type="radio" name="p17h" id="p17hN" value="NO"
				@if(old('p17h')=='NO') checked="checked" @endif>
				<label for="p17hN">No</label>
				</div>
			</div>
			@if ($errors->has('p17h'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p17h') }}</strong>
                    </span>
            @endif
			</li><br>	
		</ul>
		</div>
		</li>
		</div><!--Fin del col -->
		<div class="col-md-6">

			<li class="list-group-item{{ $errors->has('p18') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','18. ¿En los últimos 6 meses ha aumentado o disminuido de peso?')!!}<br>
				<div class="radio">
				<input type="radio" name="p18" id="p18S" value="SI" 
				@if(old('p18')=='SI') checked="checked" @endif onclick="toggle(this, 'cinco')"> 
				<label for="p18S">Sí</label>
				<input type="radio" name="p18" id="p18N" value="NO"
				@if(old('p18')=='NO') checked="checked" @endif onclick="toggle(this, 'cinco')">
				<label for="p18N">No</label>
				</div>

				<div id="cinco" @if(old('p19')!='SI') style="display: none;" @endif>

				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				{!!Html::decode(Form::label('p18a','<small>¿Cuantos kilos?</small>'))!!}
				{!!Form::text('p18a',null,['class'=>'form-control'])!!}
				{!!Html::decode(Form::label('p18b','<small>Causa:</small>'))!!}
				{!!Form::text('p18b',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p18'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p18') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p19') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','19. ¿Ha estado hospitalizado?')!!}<br>

				<div class="radio">
				<input type="radio" name="p19" id="p19S" value="SI" 
				@if(old('p19')=='SI') checked="checked" @endif onclick="toggle(this,'seis')"> 
				<label for="p19S">Sí</label>
				<input type="radio" name="p19" id="p19N" value="NO"
				@if(old('p19')=='NO') checked="checked" @endif onclick="toggle(this,'seis')">
				<label for="p19N">No</label>
				</div>

				<div id="seis" @if(old('p19')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p19a','<small>Causa:</small>'))!!}
				{!!Form::text('p19a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p19b','<small>Fecha:</small>'))!!}
				{!!Form::text('p19b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p19c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p19c',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p19'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p19') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p20') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','20. ¿Le han practicado algún tipo de operación?')!!}<br>

				<div class="radio">
				<input type="radio" name="p20" id="p20S" value="SI" 
				@if(old('p20')=='SI') checked="checked" @endif onclick="toggle(this,'siete')"> 
				<label for="p20S">Sí</label>
				<input type="radio" name="p20" id="p20N" value="NO"
				@if(old('p20')=='NO') checked="checked" @endif onclick="toggle(this,'siete')">
				<label for="p20N">No</label>
				</div>

				<div id="siete" @if(old('p20')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				{!!Html::decode(Form::label('p20a','<small>Causa:</small>'))!!}
				{!!Form::text('p20a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p20b','<small>Fecha:</small>'))!!}
				{!!Form::text('p20b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p20c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p20c',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p20'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p20') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p21') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','21. ¿Piensa someterse a alguna intervención quirúrgica en un futuro próximo?')!!}<br>

				<div class="radio">
				<input type="radio" name="p21" id="p21S" value="SI" 
				@if(old('p21')=='SI') checked="checked" @endif onclick="toggle(this,'ocho')"> 
				<label for="p21S">Sí</label>
				<input type="radio" name="p21" id="p21N" value="NO"
				@if(old('p21')=='NO') checked="checked" @endif onclick="toggle(this,'ocho')">
				<label for="p21N">No</label>
				</div>

				<div id="ocho" @if(old('p21')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				{!!Html::decode(Form::label('p21a','<small>Causa:</small>'))!!}
				{!!Form::text('p21a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p21'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p21') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p22') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','22. ¿Ha sido incapacitado por enfermedad o accidente?')!!}<br>

				<div class="radio">
				<input type="radio" name="p22" id="p22S" value="SI"
				@if(old('p22')=='SI') checked="checked" @endif onclick="toggle(this,'nueve')"> 
				<label for="p22S">Sí</label>
				<input type="radio" name="p22" id="p22N" value="NO"
				@if(old('p22')=='NO') checked="checked" @endif onclick="toggle(this,'nueve')">
				<label for="p22N">No</label>
				</div>

				<div id="nueve" @if(old('p22')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p22a','<small>Causa:</small>'))!!}
				{!!Form::text('p22a',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p22b','<small>Fecha:</small>'))!!}
				{!!Form::text('p22b',null,['class'=>'form-control'])!!}
				
				{!!Html::decode(Form::label('p22c','<small>Centro médico:</small>'))!!}
				{!!Form::text('p22c',null,['class'=>'form-control'])!!}<br>

				</div>
			</div>
			@if ($errors->has('p22'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p22') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p23') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','23. ¿Tiene o ha tenido algún padecimiento que no se le haya mencionado?')!!}<br>

				<div class="radio">
				<input type="radio" name="p23" id="p23S" value="SI"
				@if(old('p23')=='SI') checked="checked" @endif onclick="toggle(this,'diez')"> 
				<label for="p23S">Sí</label>
				<input type="radio" name="p23" id="p23N" value="NO"
				@if(old('p23')=='NO') checked="checked" @endif onclick="toggle(this,'diez')">
				<label for="p23N">No</label>
				</div>

				<div id="diez" @if(old('p23')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p23a','<small>¿Cuál?</small>'))!!}
				{!!Form::text('p23a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p23'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p23') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p24') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','24. ¿Está tramitando o piensa tramitar en el corto plazo una incapacidad permanente?')!!}<br>

				<div class="radio">
				<input type="radio" name="p24" id="p24S" value="SI"
				@if(old('p24')=='SI') checked="checked" @endif> 
				<label for="p24S">Sí</label>
				<input type="radio" name="p24" id="p24N" value="NO"
				@if(old('p24')=='NO') checked="checked" @endif>
				<label for="p24N">No</label>
				</div>
			</div>
			@if ($errors->has('p24'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p24') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p25') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','25. ¿A consultado al Instituto Nacional de Seguros (INS) por alguna enfermedad o accidente de trabajo?')!!}<br>

				<div class="radio">
				<input type="radio" name="p25" id="p25S" value="SI"
				@if(old('p25')=='SI') checked="checked" @endif onclick="toggle(this,'once')"> 
				<label for="p25S">Sí</label>
				<input type="radio" name="p25" id="p25N" value="NO"
				@if(old('p25')=='NO') checked="checked" @endif onclick="toggle(this,'once')">
				<label for="p25N">No</label>
				</div>

				<div id="once" @if(old('p25')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p25a','<small>Especifique por qué consultó</small>'))!!}
				{!!Form::text('p25a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p25'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p25') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p26') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','26. ¿Tiene usted las vacunas al día?')!!}<br>

				<div class="radio">
				<input type="radio" name="p26" id="p26S" value="SI"
				@if(old('p26')=='SI') checked="checked" @endif> 
				<label for="p26S">Sí</label>
				<input type="radio" name="p26" id="p26N" value="NO"
				@if(old('p26')=='NO') checked="checked" @endif>
				<label for="p26N">No</label>
				</div>
			</div>
			@if ($errors->has('p26'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p26') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p27') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','27. ¿Se ha aplicado la vacuna del tetano hace menos de 10 años?')!!}<br>

				<div class="radio">
				<input type="radio" name="p27" id="p27S" value="SI"
				@if(old('p27')=='SI') checked="checked" @endif> 
				<label for="p27S">Sí</label>
		
				<input type="radio" name="p27" id="p27N" value="NO"
				@if(old('p27')=='NO') checked="checked" @endif>
				<label for="p27N">No</label>
				</div>
			</div>
			@if ($errors->has('p27'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p27') }}</strong>
                    </span>
            @endif
			</li>
 			
 			<li class="list-group-item{{ $errors->has('p28') ? ' has-error' : '' }}">
 			<div class="form-group">
				{!!Form::label('pregunta','28. ¿Utiliza o toma usted algún medicamento continuamente o por temporadas?')!!}<br>

				<div class="radio">
				<input type="radio" name="p28" id="p28S" value="SI"
				@if(old('p28')=='SI') checked="checked" @endif onclick="toggle(this,'doce')"> 
				<label for="p28S">Sí</label>	
				<input type="radio" name="p28" id="p28N" value="NO"
				@if(old('p28')=='NO') checked="checked" @endif onclick="toggle(this,'doce')">
				<label for="p28N">No</label>
				</div>

				<div id="doce" @if(old('p28')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p28a','<small>Especifique cuál: </small>'))!!}
				{!!Form::text('p28a',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p28'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p28') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p29') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','29. ¿Tiene venas saltadas en sus piernas?')!!}<br>

				<div class="radio">
				<input type="radio" name="p29" id="p29S" value="SI"
				@if(old('p29')=='SI') checked="checked" @endif> 
				<label for="p29S">Sí</label>
				<input type="radio" name="p29" id="p29N" value="NO"
				@if(old('p29')=='NO') checked="checked" @endif>
				<label for="p29N">No</label>
				</div>
			</div>
			@if ($errors->has('p29'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p29') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p30') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','30. ¿Se le duermen las manos?')!!}<br>

				<div class="radio">
				<input type="radio" name="p30" id="p30S" value="SI"
				@if(old('p30')=='SI') checked="checked" @endif> 
				<label for="p30S">Sí</label>
				<input type="radio" name="p30" id="p30N" value="NO"
				@if(old('p30')=='NO') checked="checked" @endif>
				<label for="p30N">No</label>
				</div>
			</div>
			@if ($errors->has('p30'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p30') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p31') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','31. ¿Tiene dificultad para mover sus manos?')!!}<br>

				<div class="radio">
				<input type="radio" name="p31" id="p31S" value="SI"
				@if(old('p31')=='SI') checked="checked" @endif> 
				<label for="p31S">Sí</label>
				<input type="radio" name="p31" id="p31N" value="NO"
				@if(old('p31')=='NO') checked="checked" @endif>
				<label for="p31N">No</label>
				</div>
			</div>
			@if ($errors->has('p31'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p31') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p32') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','32. ¿Tiene problemas para caminar?')!!}<br>

				<div class="radio">
				<input type="radio" name="p32" id="p32S" value="SI"
				@if(old('p32')=='SI') checked="checked" @endif> 
				<label for="p32S">Sí</label>
				<input type="radio" name="p32" id="p32N" value="NO"
				@if(old('p32')=='NO') checked="checked" @endif>
				<label for="p32N">No</label>
				</div>
			</div>
			@if ($errors->has('p32'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p32') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p33') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Form::label('pregunta','33. ¿Padece usted de hemorroides?')!!}<br>

				<div class="radio">
				<input type="radio" name="p33" id="p33S" value="SI"
				@if(old('p33')=='SI') checked="checked" @endif> 
				<label for="p33S">Sí</label>
				<input type="radio" name="p33" id="p33N" value="NO"
				@if(old('p33')=='NO') checked="checked" @endif>
				<label for="p33N">No</label>
				</div>
			</div>
			@if ($errors->has('p33'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p33') }}</strong>
                    </span>
            @endif
			</li>

			
			<li class="list-group-item">
            {!!Form::label('pregunta','34. Preguntas adicionales para mujeres: ')!!}
            <div class="checkbox">
            {!!Form::checkbox('check', 'SI',false,['class'=> 'checkbox', 'id'=>'check', 'onclick'=>'showContent("check", "mujer")']) !!}
            {!!Html::decode(Form::label('check', 'Mostrar',['for'=>'check']))  !!}<br><br>
            </div>

            <div id="mujer" @if(empty(old('check'))) style="display: none;" @endif>

            <ul id="lista3" class="list-group">
            <li class="list-group-item{{ $errors->has('p34a') ? ' has-error' : '' }}">
            <div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34a. ¿Es su menstruación irregular?</small>'))!!}<br>
				<div class="radio">
				<input type="radio" name="p34a" id="p34aS" value="SI"
				@if(old('p34a')=='SI') checked="checked" @endif> 
				<label for="p34aS">Sí</label>
				<input type="radio" name="p34a" id="p34aN" value="NO"
				@if(old('p34a')=='NO') checked="checked" @endif>
				<label for="p34aN">No</label>
				</div>
			</div>
			@if ($errors->has('p34a'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34a') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34b') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34b. ¿Padece de sangrado fuera del período menstrual?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34b" id="p34bS" value="SI"
				@if(old('p34b')=='SI') checked="checked" @endif> 
				<label for="p34bS">Sí</label>
				<input type="radio" name="p34b" id="p34bN" value="NO"
				@if(old('p34b')=='NO') checked="checked" @endif>
				<label for="p34bN">No</label>
				</div>
			</div>
			@if ($errors->has('p34b'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34b') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34c') ? ' has-error' : '' }}">
			<div class="form-group">
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
			@if ($errors->has('p34c'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34c') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34d') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34d. Resultado de último papanicolau</small>'))!!}<br>
				{!!Form::text('p34d', null,['class'=>'form-control'])!!}<br>					
			</div>
			@if ($errors->has('p34d'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34d') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34e') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34e. ¿Ha tenido dificultades en partos?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34e" id="p34eS" value="SI"
				@if(old('p34e')=='SI') checked="checked" @endif> 
				<label for="p34eS">Sí</label>
				<input type="radio" name="p34e" id="p34eN" value="NO"
				@if(old('p34e')=='NO') checked="checked" @endif>
				<label for="p34eN">No</label>
				</div>
			</div>
			@if ($errors->has('p34e'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34e') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34f') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34f. ¿Ha tenido alguna enfermedad o padecimiento ginecológico o de los senos?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34f" id="p34fS" value="SI"
				@if(old('p34f')=='SI') checked="checked" @endif onclick="toggle(this,'trece')"> 
				<label for="p34fS">Sí</label>
				<input type="radio" name="p34f" id="p34fN" value="NO"
				@if(old('p34f')=='NO') checked="checked" @endif onclick="toggle(this,'trece')">
				<label for="p34fN">No</label>
				</div>

				<div id="trece" @if(old('p34f')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p34f1','<small>¿Cuál?</small>'))!!}
				{!!Form::text('p34f1',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p34f'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34f') }}</strong>
                    </span>
            @endif
			</li>			

			<li class="list-group-item{{ $errors->has('p34g') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34g. Fecha de última mamografía y resultado: </small>'))!!}<br>

				{!!Html::decode(Form::label('p34g1', '<small>Fecha:</small>'))!!}
				{!!Form::text('p34g1', null,['class'=>'form-control'])!!}<br>

				{!!Html::decode(Form::label('p34g2', '<small>Resultado:</small>'))!!}
				{!!Form::text('p34g2', null,['class'=>'form-control'])!!}<br>

			</div>
			@if ($errors->has('p34g'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34g') }}</strong>
                    </span>
            @endif
			</li>

			<li class="list-group-item{{ $errors->has('p34h') ? ' has-error' : '' }}">
			<div class="form-group">
				{!!Html::decode(Form::label('pregunta','<small>34h. ¿Está embarazada?</small>'))!!}<br>

				<div class="radio">
				<input type="radio" name="p34h" id="p34hS" value="SI"
				@if(old('p34h')=='SI') checked="checked" @endif onclick="toggle(this,'catorce')"> 
				<label for="p34hS">Sí</label>
				<input type="radio" name="p34h" id="p34hN" value="NO"
				@if(old('p34h')=='NO') checked="checked" @endif onclick="toggle(this,'catorce')">
				<label for="p34hN">No</label>
				</div>

				<div id="catorce" @if(old('p34h')!='SI') style="display: none;" @endif>
				{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
				
				{!!Html::decode(Form::label('p34h1','<small>¿Cuántos meses o semanas de gestación tiene?</small>'))!!}
				{!!Form::text('p34h1',null,['class'=>'form-control'])!!}<br>

				{!!Html::decode(Form::label('p34h2','<small>¿Ha tenido complicaciones?</small>'))!!}
				{!!Form::text('p34h2',null,['class'=>'form-control'])!!}<br>
				
				</div>
			</div>
			@if ($errors->has('p34h'))
                    <span class="help-block">
                        <strong>{{ $errors->first('p34h') }}</strong>
                    </span>
            @endif
			</li>

             </ul>
             </div>
             </li>
             
             <li class="list-group-item">
             	{!! Form::label('Evidencia', '35. ¿Encuentra evidencia actual o pasada de enfermedad u operaciones en alguna de las siguientes zonas? ') !!}

             	 <div class="checkbox">
            		{!!Form::checkbox('check4', 'SI',false,['class'=> 'checkbox', 'id'=>'check4', 'onclick'=>'showContent("check4", "lista4")']) !!}
            		{!!Html::decode(Form::label('check4', 'Mostrar',['for'=>'check3']))  !!}<br><br>
            	</div>

             	<div class="form-group" id="lista4" @if(empty(old('check4'))) style="display: none;" 
             	@endif>
             		
             	<ul class="list-group">
             		<li class="list-group-item{{ $errors->has('e1') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35a. Cráneo y oídos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e1" id="e1S" value="SI"
					@if(old('e1')=='SI') checked="checked" @endif onclick="toggle(this,'de1')"> 
					<label for="e1S">Sí</label>
					<input type="radio" name="e1" id="e1N" value="NO"
					@if(old('e1')=='NO') checked="checked" @endif onclick="toggle(this,'de1')">
					<label for="e1N">No</label>
					</div>

					<div id="de1" @if(old('e1')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e1a','<small>Detalle:</small>'))!!}
					{!!Form::text('e1a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e1') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e2') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35b. Boca y garganta')!!}<br>		

					<div class="radio">
					<input type="radio" name="e2" id="e2S" value="SI"
					@if(old('e2')=='SI') checked="checked" @endif onclick="toggle(this,'de2')"> 
					<label for="e2S">Sí</label>
					<input type="radio" name="e2" id="e2N" value="NO"
					@if(old('e2')=='NO') checked="checked" @endif onclick="toggle(this,'de2')">
					<label for="e2N">No</label>
					</div>

					<div id="de2" @if(old('e2')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e2a','<small>Detalle:</small>'))!!}
					{!!Form::text('e2a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e2') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e3') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35c. Ojos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e3" id="e3S" value="SI"
					@if(old('e3')=='SI') checked="checked" @endif onclick="toggle(this,'de3')"> 
					<label for="e3S">Sí</label>
					<input type="radio" name="e3" id="e3N"
					@if(old('e3')=='NO') checked="checked" @endif value="NO" onclick="toggle(this,'de3')">
					<label for="e3N">No</label>
					</div>

					<div id="de3" @if(old('e3')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e3a','<small>Detalle:</small>'))!!}
					{!!Form::text('e3a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e3') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e4') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35d. Cuello - tiroides')!!}<br>		

					<div class="radio">
					<input type="radio" name="e4" id="e4S" value="SI"
					@if(old('e4')=='SI') checked="checked" @endif onclick="toggle(this,'de4')"> 
					<label for="e4S">Sí</label>
			
					<input type="radio" name="e4" id="e4N" value="NO"
					@if(old('e4')=='NO') checked="checked" @endif onclick="toggle(this,'de4')">
					<label for="e4N">No</label>
					</div>

					<div id="de4" @if(old('e4')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e4a','<small>Detalle:</small>'))!!}
					{!!Form::text('e4a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e4') }}</strong>
                    </span>
                @endif
				</li>
				</li>

				<li class="list-group-item{{ $errors->has('e5') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35e. Pulmones')!!}<br>		

					<div class="radio">
					<input type="radio" name="e5" id="e5S" value="SI"
					@if(old('e5')=='SI') checked="checked" @endif onclick="toggle(this,'de5')"> 
					<label for="e5S">Sí</label>
					<input type="radio" name="e5" id="e5N" value="NO"
					@if(old('e5')=='NO') checked="checked" @endif onclick="toggle(this,'de5')">
					<label for="e5N">No</label>
					</div>

					<div id="de5" @if(old('e5')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e5a','<small>Detalle:</small>'))!!}
					{!!Form::text('e5a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e5'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e5') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e6') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35f. Corazón')!!}<br>		

					<div class="radio">
					<input type="radio" name="e6" id="e6S" value="SI"
					@if(old('e6')=='SI') checked="checked" @endif onclick="toggle(this,'de6')"> 
					<label for="e6S">Sí</label>
					<input type="radio" name="e6" id="e6N" value="NO"
					@if(old('e6')=='NO') checked="checked" @endif onclick="toggle(this,'de6')">
					<label for="e6N">No</label>
					</div>

					<div id="de6" @if(old('e6')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					{!!Html::decode(Form::label('e6a','<small>Detalle:</small>'))!!}
					{!!Form::text('e6a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e6'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e6') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e7') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35g. Abdomen')!!}<br>		

					<div class="radio">
					<input type="radio" name="e7" id="e7S" value="SI"
					@if(old('e7')=='SI') checked="checked" @endif onclick="toggle(this,'de7')"> 
					<label for="e7S">Sí</label>
			
					<input type="radio" name="e7" id="e7N" value="NO"
					@if(old('e7')=='NO') checked="checked" @endif onclick="toggle(this,'de7')">
					<label for="e7N">No</label>
					</div>

					<div id="de7" @if(old('e7')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					{!!Html::decode(Form::label('e7a','<small>Detalle:</small>'))!!}
					{!!Form::text('e7a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e7'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e7') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e8') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35h. Sistema vascular periférico')!!}<br>		

					<div class="radio">
					<input type="radio" name="e8" id="e8S" value="SI"
					 @if(old('e8')=='SI') checked="checked" @endif onclick="toggle(this,'de8')"> 
					<label for="e8S">Sí</label>
					<input type="radio" name="e8" id="e8N" value="NO"
					@if(old('e8')=='NO') checked="checked" @endif onclick="toggle(this,'de8')">
					<label for="e8N">No</label>
					</div>

					<div id="de8" @if(old('e8')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e8a','<small>Detalle:</small>'))!!}
					{!!Form::text('e8a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e8'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e8') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e9') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35i. Estado neurológico')!!}<br>		

					<div class="radio">
					<input type="radio" name="e9" id="e9S" value="SI"
					@if(old('e9')=='SI') checked="checked" @endif onclick="toggle(this,'de9')"> 
					<label for="e9S">Sí</label>
			
					<input type="radio" name="e9" id="e9N" value="NO"
					@if(old('e9')=='NO') checked="checked" @endif onclick="toggle(this,'de9')">
					<label for="e9N">No</label>
					</div>

					<div id="de9" @if(old('e9')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e9a','<small>Detalle:</small>'))!!}
					{!!Form::text('e9a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e9'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e9') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e10') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35j. Sistema muscular')!!}<br>		

					<div class="radio">
					<input type="radio" name="e10" id="e10S" value="SI"
					@if(old('e10')=='SI') checked="checked" @endif onclick="toggle(this,'de10')"> 
					<label for="e10S">Sí</label>
					<input type="radio" name="e10" id="e10N" value="NO"
					@if(old('e10')=='NO') checked="checked" @endif onclick="toggle(this,'de10')">
					<label for="e10N">No</label>
					</div>

					<div id="de10" @if(old('e10')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e10a','<small>Detalle:</small>'))!!}
					{!!Form::text('e10a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e10'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e10') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e11') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35k. Sistema Articular')!!}<br>		

					<div class="radio">
					<input type="radio" name="e11" id="e11S" value="SI"
					@if(old('e11')=='SI') checked="checked" @endif onclick="toggle(this,'de11')"> 
					<label for="e11S">Sí</label>
					<input type="radio" name="e11" id="e11N" value="NO"
					@if(old('e11')=='NO') checked="checked" @endif onclick="toggle(this,'de11')">
					<label for="e11N">No</label>
					</div>

					<div id="de11" @if(old('e11')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e11a','<small>Detalle:</small>'))!!}
					{!!Form::text('e11a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e11'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e11') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e12') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35l. Testículos')!!}<br>		

					<div class="radio">
					<input type="radio" name="e12" id="e12S" value="SI"
					@if(old('e12')=='SI') checked="checked" @endif onclick="toggle(this,'de12')"> 
					<label for="e12S">Sí</label>
					<input type="radio" name="e12" id="e12N" value="NO"
					@if(old('e12')=='NO') checked="checked" @endif onclick="toggle(this,'de12')">
					<label for="e12N">No</label>
					</div>

					<div id="de12" @if(old('e12')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e12a','<small>Detalle:</small>'))!!}
					{!!Form::text('e12a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e12'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e12') }}</strong>
                    </span>
                @endif
				</li>

				<li class="list-group-item{{ $errors->has('e13') ? ' has-error' : '' }}">
             		<div class="form-group">
					{!!Form::label('pregunta','35m. Mamas')!!}<br>		

					<div class="radio">
					<input type="radio" name="e13" id="e13S" value="SI"
					@if(old('e13')=='SI') checked="checked" @endif onclick="toggle(this,'de13')"> 
					<label for="e13S">Sí</label>
					<input type="radio" name="e13" id="e13N" value="NO"
					@if(old('e13')=='NO') checked="checked" @endif onclick="toggle(this,'de13')">
					<label for="e13N">No</label>
					</div>

					<div id="de13" @if(old('e13')!='SI') style="display: none;" @endif>
					{!!Html::decode(Form::label('pregunta','<small>Si su respuesta anterior fue sí: </small>'))!!}<br>
					
					{!!Html::decode(Form::label('e13a','<small>Detalle:</small>'))!!}
					{!!Form::text('e13a',null,['class'=>'form-control'])!!}<br>
					
					</div>
				</div>
				@if ($errors->has('e13'))
                    <span class="help-block">
                        <strong>{{ $errors->first('e13') }}</strong>
                    </span>
                @endif
				</li>
             		</ul>
             	</div>
             </li>

             <li class="list-group-item{{ $errors->has('detalles') ? ' has-error' : '' }}">
             <div class="form-group">
				{!!Form::label('detalles','Detalles de preguntas respondidas afirmativamente')!!}<br>
				<p><small>Escriba aquí cualquier información relevante sobre el paciente encuestado a partir de las preguntas realizadas</small></p>

				{!!Form::textarea('detalles',null,['class'=>'form-control'])!!}<br>
			</div>
			@if ($errors->has('detalles'))
                    <span class="help-block">
                        <strong>{{ $errors->first('detalles') }}</strong>
                    </span>
                @endif
			</li>

			
		</div><!-- Fin del Col -->
		<div class="clearfix"></div>
		</ul>	
		<div class="form-group well" >
		<div style="text-align: left;">
			{!!Html::decode(Form::label('condicion','Condición del paciente para emplear las tareas que demanda su puesto: '))!!}
				{!!Form::select('condicion', [
					'APTO' => 'Apto',  
					'NO APTO'=>'No Apto'],  null, 
				['class'=>'form-control','placeholder' => 'Seleccione una opción...', 'required'])!!}<br>
				{!!Html::decode(Form::label('medico','Médico encargado de realizar la encuesta: '))!!}
				<p><i>{{ $medico }}</i></p>
				<input type="hidden" name="medico" value="{{ $medico }}" id="medico">

		</div>
		<div style="text-align: right;">
				<button type="submit" id="registro" class="btn btn-primary">Finalizar </button>			
		</div>
		</div>
		</div>	
	</div>