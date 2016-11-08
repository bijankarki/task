<html>
    <head>
        <title>Add Client</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme-min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/mycss.css')}}" />
        <script type="text/javascript" src="{{asset('assets/bootstrap/js/myscript.js')}}"></script>
    </head>
    <body>
        <div class="col-md-10" id="container">
            <h3>Enter client's detail</h3>
            <div class="col-md-6" id="form">
                <form name="clientform" role="form" action={{url('/submit')}} onsubmit="return formvalidation(this)" method="post" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="client_name">
                    </div >
                    <div class="form-group">
                        <label>Gender</label>
                        <label class="checkbox-inline"><input type="radio" name="optionsGenderRadio" value="male"> Male</label>
                        <label class="checkbox-inline"><input type="radio" name="optionsGenderRadio" value="female"> Female</label>
                        <label class="checkbox-inline"><input type="radio" name="optionsGenderRadio" value="other"> Other</label>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" >
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <select class="form-control" name="nationality">
                          <option value="Nepalease">Neplease</option>
                          <option value="Indian">Indian</option>
                          <option value="French">French</option>
                          <option value="Dutch">Dutch</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">
                        <label>Education Background</label>
                        <select class="form-control" name="edubck">
                          <option value="SLC">SLC</option>
                          <option value="Intermediate">Intermediate</option>
                          <option value="Bachelor Degree">Bachelor Degree</option>
                          <option value="Master Degree">Master Degree</option>
                          <option value="PhD">PhD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Preferred mode of contact</label>
                        <select class="form-control" name="prefmodcontact">
                          <option  value="Email">Email</option>
                          <option value="Phone">Phone</option>
                          <option value="None">None</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-default" value="submit">Submit</button>
                        <button type="reset" class="btn-default">Clear</button>
                        <button type="button" class="btn-default" onclick="parent.location='../../../'">Cancel</button>
                    </div>
                    <p id="display-status">

                    </p>
                </form>
            </div>
        </div>

    </body>
</html>
