@extends('layouts.main_2')

@section('content')
	<div class="col-lg-7">
		<div class="well bs-component">
			{{ Form::open(array('class' => 'form form-horizontal')) }}
				<legend>Settings</legend>
				<p>Theese are your personal settings.</p>
				<fieldset>
					
					<!--  -->
				
					<!-- Notification sounds -->
					<div class="form-group">
			            <label class="col-lg-3 control-label">Notification sounds:</label>
			            <div class="col-lg-9">
			                <div class="radio radio-primary">
			                    <label>
			                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
			                        Sounds enabled
			                    </label>
			                </div>
			                <div class="radio radio-primary">
			                    <label>
			                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			                        Sounds disabled
			                    </label>
			                </div>
			            </div>
					</div>
					<!-- Buttons -->
					<div class="form-group">
						<div class="col-lg-9 col-lg-offset-3">
							{{ Form::button('Cancel', array('class' => 'btn btn-default')) }}
							{{ Form::submit('Save changes', array('class' => 'btn btn-primary')) }}
						</div>
					</div>
				</fieldset>
			{{ Form::close() }}
		</div>
	</div>
@stop