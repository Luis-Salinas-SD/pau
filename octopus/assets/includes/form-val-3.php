<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Validation Summary</h2>
        <p class="panel-subtitle">
            Validation summary will display an error list above the form.
        </p>
    </header>
    <div class="panel-body">
        <div class="validation-message">
            <ul></ul>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Full Name <span class="required">*</span></label>
            <div class="col-sm-9">
                <input type="text" name="fullname" class="form-control" title="Plase enter a name." placeholder="eg.: John Doe" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
            <div class="col-sm-9">
                <input type="email" name="email" class="form-control" title="Please enter an email address." placeholder="eg.: john@doe.com" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">GitHub</label>
            <div class="col-sm-9">
                <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Resume <span class="required">*</span></label>
            <div class="col-sm-9">
                <textarea name="resume" rows="5" title="Your resume is too short." class="form-control" placeholder="Enter your resume" required></textarea>
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