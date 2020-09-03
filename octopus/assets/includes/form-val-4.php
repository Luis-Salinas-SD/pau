<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Validation Selects</h2>
        <p class="panel-subtitle">
            Easily validate select tags, does not matter if is single or multiple.
        </p>
    </header>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label">Company</label>
            <div class="col-sm-9">
                <select id="company" class="form-control" required>
                    <option value="">Choose a Company</option>
                    <option value="apple">Apple</option>
                    <option value="google">Google</option>
                    <option value="microsoft">Microsoft</option>
                    <option value="yahoo">Yahoo</option>
                </select>
                <label class="error" for="company"></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Browsers</label>
            <div class="col-sm-9">
                <select id="browsers" name="browsers" title="Please select at least one browser" class="form-control" size="5" multiple="multiple" required>
                    <option value="chrome">Chrome / Safari</option>
                    <option value="ff">Firefox</option>
                    <option value="ie">Internet Explorer</option>
                    <option value="opera">Opera</option>
                </select>
                <label class="error" for="browsers"></label>
            </div>
        </div>
    </div>
    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
                <button class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </footer>
</section>