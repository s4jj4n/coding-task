<div class="form-group">
    <label for="name" class="cols-sm-2 control-label">Name</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="name" v-model="name" value="{{ old('name') }}" id="name"  placeholder="Enter Name"/>
        </div>
        <span class="error">{{ $errors->first('name') }} </span>
        <span class="error" v-show="!userDetailValidation.name">
            @{{ 'Please provide a valid name.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="gender" class="cols-sm-2 control-label">Gender</label>
    <div class="cols-sm-10">
        <label class="radio-inline">
            <input type="radio" name="gender" v-model="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
            Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" v-model="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
            Female
        </label>
    </div>
    <span class="error"> {{ $errors->first('gender') }} </span>
    <span class="error" v-show="!userDetailValidation.gender">
        @{{ 'Please pick your gender.' }}
    </span>

</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Phone</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="phone" v-model="phone" value="{{ old('phone') }}" id="phone"  placeholder="Enter Phone Number"/>
        </div>
        <span class="error">{{ $errors->first('phone') }} </span>
        <span class="error" v-show="!userDetailValidation.phone">
            @{{ 'Please provide a valid phone number.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="email" class="cols-sm-2 control-label">Email</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" v-model="email" value="{{ old('email') }}" id="email"  placeholder="Enter Email"/>
        </div>
        <span class="error">{{ $errors->first('email') }} </span>
        <span class="error" v-show="!userDetailValidation.email">
            @{{ 'Please provide a valid email address.' }}
        </span>
    </div>
</div>



<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Address</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="address" v-model="address" value="{{ old('address') }}" id="address"  placeholder="Enter Address"/>
        </div>
        <span class="error">{{ $errors->first('address') }} </span>
        <span class="error" v-show="!userDetailValidation.address">
            @{{ 'Please provide your address.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Nationality</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-flag" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="nationality" v-model="nationality" value="{{ old('nationality') }}" id="nationality"  placeholder="Enter Nationality"/>
        </div>
        <span class="error">{{ $errors->first('nationality') }} </span>
        <span class="error" v-show="!userDetailValidation.nationality">
            @{{ 'Please provide your nationality.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Date of birth</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input type="text" class="form-control date-picker" name="date_of_birth" v-model="date_of_birth" value="{{ old('date_of_birth') }}" id="date_of_birth"  placeholder="Enter DOB"/>
        </div>
        <span class="error">{{ $errors->first('date_of_birth') }} </span>
        <span class="error" v-show="!userDetailValidation.date_of_birth">
            @{{ 'Please provide a valid date of birth.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Education Background</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="education_background" v-model="education_background" value="{{ old('education_background') }}" id="education_background"  placeholder="Enter Education Background"/>
        </div>
        <span class="error">{{ $errors->first('education_background') }} </span>
        <span class="error" v-show="!userDetailValidation.education_background">
            @{{ 'Please provide your education background.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <label for="username" class="cols-sm-2 control-label">Preferred Mode of Contact</label>
    <div class="cols-sm-10">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-life-ring" aria-hidden="true"></i></span>
            <select name="preferred_mode_of_contact" v-model="preferred_mode_of_contact" id="preferred_mode_of_contact" class="form-control">
                <option value="">None</option>
                <option value="email" {{ 'email' == old('preferred_mode_of_contact') ? 'selected' : '' }}>Email</option>
                <option value="phone" {{ 'phone' == old('preferred_mode_of_contact') ? 'selected' : '' }}>Phone</option>
            </select>
        </div>
        <span class="error">{{ $errors->first('preferred_mode_of_contact') }} </span>
        <span class="error" v-show="!userDetailValidation.preferred_mode_of_contact">
            @{{ 'Please select a preferred mode of contact.' }}
        </span>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" :disabled="!isUserDetailValid">Save</button>
</div>