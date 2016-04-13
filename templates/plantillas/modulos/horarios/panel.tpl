<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Horario de trabajo</h1>
	</div>
</div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">			
			<div class="form-group">
				<label for="selHoraInicioL" class="col-lg-2">Lunes a viernes de</label>
				<div class="col-lg-1">
					<select id="selHoraInicioL" name="selHoraInicioL" class="form-control">
						{for $hora=7 to 23} 
							<option value="{$hora}" {if $hora eq $datos.horaEntradaL}selected{/if}>{$hora|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1">
					<select id="selMinInicioL" name="selMinInicioL" class="form-control">
						{for $min=0 to 59 step 15} 
							<option value="{$min}" {if $min eq $datos.minutosEntradaL}selected{/if}>{$min|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1 text-center"> - </div>
				<div class="col-lg-1">
					<select id="selHoraFinL" name="selHoraFinL" class="form-control">
						{for $hora=7 to 23} 
							<option value="{$hora}" {if $hora eq $datos.horaSalidaL}selected{/if}>{$hora|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1">
					<select id="selMinFinL" name="selMinFinL" class="form-control">
						{for $min=0 to 59 step 15} 
							<option value="{$min}" {if $min eq $datos.minutosSalidaL}selected{/if}>{$min|string_format:"%02s"}
						{/for}
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="selHoraInicioS" class="col-lg-2">Sábados de</label>
				<div class="col-lg-1">
					<select id="selHoraInicioS" name="selHoraInicioS" class="form-control">
						{for $hora=7 to 23} 
							<option value="{$hora}" {if $hora eq $datos.horaEntradaS}selected{/if}>{$hora|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1">
					<select id="selMinInicioS" name="selMinInicioS" class="form-control">
						{for $min=0 to 59 step 15} 
							<option value="{$min}" {if $min eq $datos.minutosEntradaS}selected{/if}>{$min|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1 text-center"> - </div>
				<div class="col-lg-1">
					<select id="selHoraFinS" name="selHoraFinL" class="form-control">
						{for $hora=7 to 23} 
							<option value="{$hora}" {if $hora eq $datos.horaSalidaS}selected{/if}>{$hora|string_format:"%02s"}
						{/for}
					</select>
				</div>
				<div class="col-lg-1">
					<select id="selMinFinS" name="selMinFinS" class="form-control">
						{for $min=0 to 59 step 15} 
							<option value="{$min}" {if $min eq $datos.minutosSalidaS}selected{/if}>{$min|string_format:"%02s"}
						{/for}
					</select>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<div class="panel-body text-right">
				<button class="btn btn-success" id="btnGuardar" type="submit">Guardar</button>
			</div>
		</div>
	</div>
</form>