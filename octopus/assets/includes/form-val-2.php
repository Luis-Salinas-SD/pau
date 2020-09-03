<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Validating Checkbox and Radios</h2>

        <p class="panel-subtitle">
            Easily validate checkboxes and radios tags.
        </p>
    </header>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label">Porto Admin is <span class="required">*</span></label>
            <div class="col-sm-9">
                <div class="radio-custom radio-primary">
                    <input id="awesome" name="porto_is" type="radio" value="awesome" required />
                    <label for="awesome">Awesome</label>
                </div>
                <div class="radio-custom radio-primary">
                    <input id="very-awesome" name="porto_is" type="radio" value="very-awesome" />
                    <label for="very-awesome">Very Awesome</label>
                </div>
                <div class="radio-custom radio-primary">
                    <input id="ultra-awesome" name="porto_is" type="radio" value="ultra-awesome" />
                    <label for="ultra-awesome">Ultra Awesome</label>
                </div>
                <label class="error" for="porto_is"></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">I will use it for <span class="required">*</span></label>
            <div class="col-sm-9">
                <div class="checkbox-custom chekbox-primary">
                    <input id="for-project" value="project" type="checkbox" name="for[]" required />
                    <label for="for-project">My Project</label>
                </div>
                <div class="checkbox-custom chekbox-primary">
                    <input id="for-website" value="website" type="checkbox" name="for[]" />
                    <label for="for-website">My Website</label>
                </div>
                <div class="checkbox-custom chekbox-primary">
                    <input id="for-all" value="all" type="checkbox" name="for[]" />
                    <label for="for-all">All things I do</label>
                </div>
                <label class="error" for="for[]"></label>
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