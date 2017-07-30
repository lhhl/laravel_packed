@php($routeSuff = ($idUpdate) ? '_update' : '_store')
{!! Form::model($record, array('route' => [$routeName . $routeSuff, $idUpdate], 'method' => 'post', 'class' => 'formInput')) !!}
    <div class="m-input-form">
        @each('Common::components.control.formrow', $controls, 'control')
        <div class="clear-fix"></div>
        <div class="btn-group-panel">
            <div class="col-left">
                <input value="Submit" type="submit" name="submit" id="submit" href="" class="btn-blue">
            </div>
            <div class="col-right"></div>
            <div class="clear-fix"></div>
        </div>
    </div> 
{!! Form::close() !!}
