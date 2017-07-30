<div class="form-row">
    <div class="col-left">
        <div class="form-group">
            <label class="">{{ $control['title'] }}</label>
        </div>
    </div>

    <div class="col-right">
        <div class="m-input-form">
            <div class="form-group">
                @component('Common::components.control.' . $control['type'], 
                    [
                        'data'    =>  $control 
                    ]
                )
                @endcomponent
            </div>
        </div>
    </div>
</div>
