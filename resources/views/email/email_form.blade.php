<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form method="post" action="contact/send">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <label class="control-label" for="name">
                            Name
                        </label>
                        <input class="form-control" id="name" name="name" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="email">
                            Email
       <span class="asteriskField">
        *
       </span>
                        </label>
                        <input class="form-control" id="email" name="email" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="subject">
                            Message
                        </label>
                        <textarea class="form-control" cols="40" id="message" name="subject" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="btn btn-primary " name="submit" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
