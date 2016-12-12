<div class="form-group">
    <label for="name" class="cols-sm-2 control-label">Name</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name"/>
        </div>
        <span class="error">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="gender" class="cols-sm-2 control-label">Gender</label>
    <div class="cols-sm-10">
        <label class="radio-inline">
            <input type="radio" name="gender" id="male" value="male">
            Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" id="female" value="female">
            Female
        </label>
        <span class="error">{{ $errors->first('gender') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Phone</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter Phone Number"/>
        </div>
        <span class="error">{{ $errors->first('phone') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="email" class="cols-sm-2 control-label">Email</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter Email"/>
        </div>
        <span class="error">{{ $errors->first('email') }}</span>
    </div>
</div>



<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Address</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Address"/>
        </div>
        <span class="error">{{ $errors->first('address') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Nationality</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-flag" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="nationality" id="nationality"  placeholder="Enter Nationality"/>
        </div>
        <span class="error">{{ $errors->first('nationality') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Date of birth</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="date_of_birth" id="date_of_birth"  placeholder="Enter DOB"/>
        </div>
        <span class="error">{{ $errors->first('date_of_birth') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Education Background</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="education_background" id="education_background"  placeholder="Enter Education Background"/>
        </div>
        <span class="error">{{ $errors->first('education_background') }}</span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Preferred Mode of Contact</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-life-ring" aria-hidden="true"></i></span>
            <select name="preferred_mode_of_contact" id="preferred_mode_of_contact" class="form-control">
                <option value="">None</option>
                <option value="email">Email</option>
                <option value="phone">Phone</option>
            </select>
        </div>
        <span class="error">{{ $errors->first('preferred_mode_of_contact') }}</span>
    </div>
</div>

<div class="form-group ">
    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Save</button>
</div>