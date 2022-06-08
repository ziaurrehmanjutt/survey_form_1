<div class="body">
    <header id="header" class="header-effect-shrink border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-0">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo"> <a href="<?= base_url() ?>"> <img alt="Porto Finance" width="50" src="https://surveyblitz-fql4jh2d7-surveyblitz-app.vercel.app/_next/image?url=https%3A%2F%2Faqylnrlgyrwkkhrdghyz.supabase.co%2Fstorage%2Fv1%2Fobject%2Fsign%2Fsurveyblitz-testing%2Fa46c502f-3fd4-4ab0-b097-715f50b56865%2Fde-DE%2Feni.png%3Ftoken%3DeyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJzdXJ2ZXlibGl0ei10ZXN0aW5nL2E0NmM1MDJmLTNmZDQtNGFiMC1iMDk3LTcxNWY1MGI1Njg2NS9kZS1ERS9lbmkucG5nIiwiaWF0IjoxNjUxMjY1NzkxLCJleHAiOjE5NjY2MjU3OTF9.MkOTgn16ot3CCixVn6RuLnNYxkxRdhqzZRtGDU1p1iY&w=3840&q=75"> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <form id="form1" method="POST">
        <div role="main" class="main py-5">
            <div class="container" id="part-one">
                <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary  q-number text-center text-white rounded-circle mr-3">1</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">What is your gender?</h6>
                        <div class="options pt-2">

                            <div class="form-check">
                                <input  id="your_gender1" <?= $data->your_gender == 'Male' ? 'checked' : '' ?> value="Male" class="form-check-input" type="radio" name="your_gender" />
                                <label for="your_gender1" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input  id="your_gender2" <?= $data->your_gender == 'Female' ? 'checked' : '' ?> value="Female" class="form-check-input" type="radio" name="your_gender" />
                                <label for="your_gender2" class="form-check-label">Female</label>
                            </div>
                            <div class="form-check">
                                <input id="your_gender3" <?= $data->your_gender == 'Other' ? 'checked' : '' ?>  value="Other" class="form-check-input" type="radio" name="your_gender" />
                                <label for="your_gender3" class="form-check-label">Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">2</strong>
                    <div class="d-block overflow-hidden" >
                        <h6 class="h6 mt-2">How old are you?</h6>
                        <div class="options pt-2" style="position: relative;">
                            <div class="form-group">
                                <input name="old_are_you" value="<?= $data->old_are_you ?>" type="number" min="0"  class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">3</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">What is the highest education you completed?</h6>
                        <div class="options pt-2">
                            <div class="form-check ">
                                <input id="q3-1" <?= $data->highest_education_you_completed == 'Undergraduate' ? 'checked' : '' ?> class="form-check-input" value="Undergraduate" type="radio" name="highest_education_you_completed" />
                                <label for="q3-1" class="form-check-label">Undergraduate (Bachelor level) </label>
                            </div>
                            <div class="form-check ">
                                <input id="q3_1" <?= $data->highest_education_you_completed == 'Graduate' ? 'checked' : '' ?> class="form-check-input" value="Graduate" type="radio" name="highest_education_you_completed" />
                                <label for="q3_1" class="form-check-label">Graduate (Master level)</label>
                            </div>
                            <div class="form-check ">
                                <input id="q3_2" <?= $data->highest_education_you_completed == 'Other' ? 'checked' : '' ?> class="form-check-input" value="Other" type="radio" name="highest_education_you_completed" />
                                <label  for="q3_2" class="form-check-label">Other (e.g., MBA)</label>
                            </div>
                            <div class="form-check ">
                                <input id="q3_3" <?= $data->highest_education_you_completed == 'PhD' ? 'checked' : '' ?> class="form-check-input" value="PhD" type="radio" name="highest_education_you_completed" />
                                <label for="q3_3" class="form-check-label">PhD</label>
                            </div>
                            <div class="form-check ">
                                <input id="q3_4" <?= $data->highest_education_you_completed == 'No degree' ? 'checked' : '' ?> class="form-check-input" value="No degree" type="radio" name="highest_education_you_completed" />
                                <label  for="q3_4" class="form-check-label">No degree</label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary  q-number text-center text-white rounded-circle mr-3">4</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">What is/ was your main field of study?</h6>
                        <div class="options pt-2">
                            <select class="form-control" name="main_field_of_study">
                                <option value="-">Select One Below</option>
                                <option <?= $data->main_field_of_study == 'Arts' ? 'selected' : '' ?> value="Arts">Arts / Humanities (e.g., cultural studies, history, linguistics, philosophy, religion)</option>
                                <option <?= $data->main_field_of_study == 'Business' ? 'selected' : '' ?> value="Business">Business / Management</option>
                                <option <?= $data->main_field_of_study == 'Computer' ? 'selected' : '' ?> value="Computer">Computer sciences / IT</option>
                                <option <?= $data->main_field_of_study == 'Economics' ? 'selected' : '' ?> value="Economics">Economics</option>
                                <option <?= $data->main_field_of_study == 'Engineering' ? 'selected' : '' ?> value="Engineering">Engineering (incl. architecture)</option>
                                <option <?= $data->main_field_of_study == 'Human medicine' ? 'selected' : '' ?> value="Human medicine">Human medicine / health sciences</option>
                                <option <?= $data->main_field_of_study == 'Social sciences' ? 'selected' : '' ?> value="Social sciences">Social sciences (e.g., psychology, politics, education)</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">5</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">How many years of industry experience do you have?</h6>
                        <div class="options pt-2">
                            <div class="form-group">
                                <input value="<?= $data->industry_experience_have ?>" name="industry_experience_have" min="0" type="number" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary  q-number text-center text-white rounded-circle mr-3">6</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">How many years of work experience do you have?</h6>
                        <div class="options pt-2">
                            <div class="form-group">
                                <input value="<?= $data->work_experience_have ?>" name="work_experience_have" min="0" type="number" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">7</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">How many ventures did you start?</h6>
                        <div class="options pt-2">
                            <div class="form-group">
                                <input value="<?= $data->ventures_you_start ?>" name="ventures_you_start" type="number" min="0" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">8</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">How many ventures did you exited?</h6>
                        <div class="options pt-2">
                            <div class="form-group">
                                <input min="0" value="<?= $data->ventures_you_exited ?>" name="ventures_you_exited" type="number" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">9</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">Are you a (Co-)Founder of your start-up?</h6>
                        <div class="options pt-2">
                            <div class="form-check ">
                                <input  id="q9_1" <?= $data->founder_your_startup == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="founder_your_startup" />
                                <label for="q9_1" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check ">
                                <input  id="q9_2" <?= $data->founder_your_startup == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="founder_your_startup" />
                                <label for="q9_2" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">10</strong>
                    <div class="d-block overflow-hidden">
                        <h6 class="h6 mt-2">What is your role in your start-up?</h6>
                        <div class="options pt-2">
                            <div class="form-group">
                                <input value="<?= $data->your_role_in_startup ?>" name="your_role_in_startup" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>
        </div>
        <section class="fixed-bottom position-fixed w-100 bg-white shadow p-4 border">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div> <a href="<?= base_url('/') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
                    <div>
                        <p class="mb-1">Page 1 from 17</p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div> <button type="submit" name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
                </div>
            </div>
        </section>
    </form>
</div>