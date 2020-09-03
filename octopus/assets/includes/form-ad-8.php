<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Date Picker</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-md-3 control-label">Default Datepicker</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" data-plugin-datepicker class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Date range</label>
                        <div class="col-md-6">
                            <div class="input-daterange input-group" data-plugin-datepicker>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control" name="start">
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" name="end">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Multiple dates</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Inline</label>
                        <div class="col-md-3">
                            <div data-plugin-datepicker data-plugin-skin="primary">
                            </div>
                        </div>

                </form>
            </div>
        </section>
    </div>
</div>