<style>
    .dropdown-submenu {
        position: relative;
        min-width: 168px;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }

    .dropdown-submenu > a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover > a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left > .dropdown-menu {
        left: -100%;
        margin-left: 1rem;
        -webkit-border-radius: .6rem 0 .6rem .6rem;
        -moz-border-radius: .6rem 0 .6rem .6rem;
        border-radius: .6rem 0 .6rem .6rem;
    }

    .btn {
        margin-top: .8rem;
        margin-left: 2rem;
    }

    .btn a {
        color: #fff;
    }

    .dropdown-menu {
        min-width: 2.68rem;
    }

    .dropdown-menu .divider {
        height: .1rem;
        margin: .4rem 0;
        overflow: hidden;
        background-color: #e5e5e5;
    }

    dropdown-menu > li > a {
        display: block;
        padding: .1rem 1rem;
    }

    .form {
        overflow: hidden;
        padding: 0 3rem;
    }

    .radio-inline {
        margin-right: 2rem;
        font-weight: bold;
    }

    .hide {
        display: none;
    }

    .marginTop {
        margin-top: 2.5rem
    }

    .paddingLR {
        padding: 1rem 2rem;
    }

    .checkbox {
        padding-left: 18px;
    }

    .checkbox label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
    }

    .checkbox label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 3px;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .checkbox label::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: 0;
        top: 0;
        margin-left: -20px;
        padding-left: 3px;
        padding-top: 1px;
        font-size: 11px;
        color: #555555;
    }

    .checkbox input[type="checkbox"] {
        opacity: 0;
    }

    .checkbox input[type="checkbox"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
    }

    .checkbox input[type="checkbox"]:disabled + label {
        opacity: 0.65;
    }

    .checkbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed;
    }

    .checkbox.checkbox-circle label::before {
        border-radius: 50%;
    }

    .checkbox.checkbox-inline {
        margin-top: 0;
    }

    label {
        font-size: 12px;
    }

    .formbody {
        padding: 25px;
    }


</style>

<form method="POST" action="{{url('form')}}" id="contactForm">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modal_content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Book Appointment</h4>
                </div>
                <div class="col-md-12 form_body">
                    <div class="row">
                        <div class="treatment form-group col-xs-6 col-md-9">
                            <label for="treatment">Book For</label>
                            <select id="treatment" name="treatment" class="form-control" required>
                                <option value="" selected disabled>Please Select</option>
                                <optgroup label="Panchakarma Services">
                                    <option>Classical Panchakarma</option>
                                    <option>Wellness Panchakarma</option>
                                    <option>Blissful Panchakarma</option>
                                </optgroup>
                                <optgroup label="Program">
                                    <option>Training Program</option>
                                    <option>Yoga Program</option>
                                </optgroup>
                                <option>Special Treatment</option>
                                <option>Consultation and Counselling</option>
                            </select>
                        </div>

                        <div class="form-group form-group col-xs-2 col-md-2">
                            <div id="learnMore" class="btn btn-primary marginTop">Learn More</div>
                        </div>
                    </div>

                    <div id="classical" class="form-group hide">
                        <select name="classicPanchakarma" class="form-control" data-width="100%">
                            <option>30 days Full Classical Panchakarma Program</option>
                            <option>22 days Classical Panchakarma Program</option>
                            <option>15 days Classical Panchakarma Program</option>
                            <option>7 days Classical Panchakarma Program</option>
                        </select>
                    </div>

                    <div id="wellness" class="form-group hide">
                        <div class="form-group">
                            <label for="wellness">Mention Wellness Program</label>
                            <input type="text" name="wellnessPanchakarma" id="fullName" placeholder="Please specify the program"
                                   class="form-control form_control" required>
                        </div>


                    </div>
                    <div class="row">
                        <div id="blissful" class=" col-md-5 form-group hide">
                            <select name="blissfulPanchakarma" class="form-control">
                                <option>1 Hour</option>
                                <option>3 Hours</option>
                                <option>1 Day</option>
                                <option>3 Days</option>
                                <option>5 Days</option>
                                <option>7 Days</option>
                            </select>
                        </div>
                        <div id="blissful_program_3_hours" class="form-group col-xs-6 col-md-12 hide checkbox">
                            <div class="checkbox checkbox-inline inlineCheckbox1">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1">Ayurveda Blissful Program I</label>
                            </div>
                            <div class="checkbox checkbox-inline inlineCheckbox2">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                <label for="inlineCheckbox2">Ayurveda Blissful Program II</label>
                            </div>
                            <div class="checkbox checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                <label for="inlineCheckbox3">Ayurveda Blissful Program III</label>
                            </div>
                        </div>
                        <div id="blissful_program_days" class="form-group col-xs-6 col-md-12 hide checkbox">
                            <div class="checkbox checkbox-inline inlineCheckbox1">
                                <input type="checkbox" id="inlineCheckbox4" value="option2">
                                <label for="inlineCheckbox4">Ayurveda Blissful Program I</label>
                            </div>
                            <div class="checkbox checkbox-inline inlineCheckbox2">
                                <input type="checkbox" id="inlineCheckbox5" value="option2" checked="">
                                <label for="inlineCheckbox5">Ayurveda Blissful Program II</label>
                            </div>
                        </div>
                        <div id="blissful_program_1_hour" class="form-group col-xs-6 col-md-12 hide checkbox">
                            <div class="checkbox checkbox-inline inlineCheckbox1">
                                <input type="checkbox" id="inlineCheckbox6" value="option3">
                                <label for="inlineCheckbox6">Ayurveda Head and Foot Program</label>
                            </div>
                            <div class="checkbox checkbox-inline inlineCheckbox2">
                                <input type="checkbox" id="inlineCheckbox7" value="option3" checked="">
                                <label for="inlineCheckbox7">Spinal Program</label>
                            </div>
                        </div>
                    </div>


                    <div id="training" class="col-md-12 form-group hide">
                        <select name="trainingProgram" class="form-control" data-width="100%">
                            <option> Basic Introduction of Ayurveda (2 weeks, 24 hours per week)</option>
                            <option> Herbs and raw materials of medicine (3 weeks, 24 hours per week)</option>
                            <option> Ayurvedic medicine (3 weeks, 24 hours per week)</option>
                            <option> Basic Panchakarma (4 weeks, 24 hours per week)</option>
                            <option> Advance Panchakarma (4 weeks, 24 hours per week)</option>
                            <option> Concept of Diagnosis and treatment in Ayurveda (4 weeks, 24 hours per week)
                            </option>
                            <option> Ayurveda cooking (3 weeks, 24 hours per week)</option>
                        </select>
                    </div>

                    <div id="yoga" class=" col-md-12 form-group hide">
                        <select name="yogaProgram" class="form-control" data-width="100%">
                            <option>General Yoga</option>
                            <option>Yogic Detoxification</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Pick DateTime</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input name="date" type='text' class="form-control" required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"/>
                            </span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="fullName">Name</label>
                        <input type="text" name="name" id="fullName" placeholder="Full Name"
                               class="form-control form_control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                               class="form-control form_control" required>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="male" checked>&nbsp;Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female">&nbsp;Female
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone no.</label>
                        <input type="number" name="phone" id="phone" placeholder="Phone number"
                               class="form-control form_control" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="alphanumeric" name="address" id="address" placeholder="Address"
                               class="form-control form_control" required>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <script>
        $('#learnMore').click(function () {
            var selectedText = $('#treatment :selected').text();
            if (selectedText == "Please Select") {
                $("#treatment").tooltip();
                $("#treatment").focus();
            }
            if (selectedText == "Classical Panchakarma") {
                window.location.href = "{{URL::to('panchakarma/classic')}}";
            }
            if (selectedText == "Blissful Panchakarma") {
                window.location.href = "{{URL::to('panchakarma/blissful/')}}";
            }
            if (selectedText == "Wellness Panchakarma") {
                window.location.href = "{{URL::to('panchakarma/wellness/')}}";
            }
            if (selectedText == "Training Program") {
                window.location.href = "{{URL::to('training/')}}";
            }
            if (selectedText == "Yoga Program") {
                window.location.href = "{{URL::to('yoga/general')}}";
            }
            if (selectedText == "Special Treatment") {
                window.location.href = "{{URL::to('special/ksharsutra')}}";
            }
            if (selectedText == "Consultation and Counselling") {
                window.location.href = "{{URL::to('consultation/')}}";
            }
        });
    </script>
</form>
