<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Color Pickers</h2>
            </header>
            <div class="panel-body">

                <form class="form-horizontal form-bordered" action="#">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Default</label>
                        <div class="col-md-6">
                            <input type="text" data-plugin-colorpicker class="colorpicker-default form-control" value="#8fff00" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">RGBA</label>
                        <div class="col-md-6">
                            <input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Horizontal</label>
                        <div class="col-md-6">
                            <input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="#8fff00" data-horizontal="true" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Component</label>
                        <div class="col-md-6">
                            <div class="input-group color" data-color="rgb(255, 146, 180)" data-color-format="rgb" data-plugin-colorpicker>
                                <span class="input-group-addon"><i></i></span>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Button</label>
                        <div class="col-md-6 col-xs-11">
                            <a href="#" class="btn btn-sm btn-primary" data-plugin-colorpicker data-color-format="hex" data-color="rgb(255, 255, 255)">Select color</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>