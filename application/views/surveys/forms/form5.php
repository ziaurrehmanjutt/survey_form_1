<div class="body">
  <header id="header" class="header-effect-shrink border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-0">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo"> <a href="demo-finance.html"> <img alt="Porto Finance" width="50" src="https://surveyblitz-fql4jh2d7-surveyblitz-app.vercel.app/_next/image?url=https%3A%2F%2Faqylnrlgyrwkkhrdghyz.supabase.co%2Fstorage%2Fv1%2Fobject%2Fsign%2Fsurveyblitz-testing%2Fa46c502f-3fd4-4ab0-b097-715f50b56865%2Fde-DE%2Feni.png%3Ftoken%3DeyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJzdXJ2ZXlibGl0ei10ZXN0aW5nL2E0NmM1MDJmLTNmZDQtNGFiMC1iMDk3LTcxNWY1MGI1Njg2NS9kZS1ERS9lbmkucG5nIiwiaWF0IjoxNjUxMjY1NzkxLCJleHAiOjE5NjY2MjU3OTF9.MkOTgn16ot3CCixVn6RuLnNYxkxRdhqzZRtGDU1p1iY&w=3840&q=75"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <form id="form1" method="POST">
    <div role="main" class="main py-5">
      <div class="container" id="part-one">
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">34</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>absolutely untrue</th>
                    <th></th>
                    <th>neither true nor untrue</th>
                    <th></th>
                    <th>absolutely true</th>
                  </tr>
                </thead>
                <tr>
                  <td>I have found a meaningful career.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->found_meaningful_career == '0' ? 'checked' : '' ?> value="0" type="radio" name="found_meaningful_career" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->found_meaningful_career == '1' ? 'checked' : '' ?> value="1" type="radio" name="found_meaningful_career" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->found_meaningful_career == '2' ? 'checked' : '' ?> value="2" type="radio" name="found_meaningful_career" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->found_meaningful_career == '3' ? 'checked' : '' ?> value="3" type="radio" name="found_meaningful_career" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->found_meaningful_career == '4' ? 'checked' : '' ?> value="4" type="radio" name="found_meaningful_career" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I view my work as contributing to my personal growth.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contributing_my_personal_growth == '0' ? 'checked' : '' ?> value="0" type="radio" name="contributing_my_personal_growth" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contributing_my_personal_growth == '1' ? 'checked' : '' ?> value="1" type="radio" name="contributing_my_personal_growth" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contributing_my_personal_growth == '2' ? 'checked' : '' ?> value="2" type="radio" name="contributing_my_personal_growth" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contributing_my_personal_growth == '3' ? 'checked' : '' ?> value="3" type="radio" name="contributing_my_personal_growth" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contributing_my_personal_growth == '4' ? 'checked' : '' ?> value="4" type="radio" name="contributing_my_personal_growth" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>My work really makes no difference to the world.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_no_difference_world == '0' ? 'checked' : '' ?> value="0" type="radio" name="work_makes_no_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_no_difference_world == '1' ? 'checked' : '' ?> value="1" type="radio" name="work_makes_no_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_no_difference_world == '2' ? 'checked' : '' ?> value="2" type="radio" name="work_makes_no_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_no_difference_world == '3' ? 'checked' : '' ?> value="3" type="radio" name="work_makes_no_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_no_difference_world == '4' ? 'checked' : '' ?> value="4" type="radio" name="work_makes_no_difference_world" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I understand how my work contributes to my life’s meaning. </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->understand_work_contributes_life_meaning == '0' ? 'checked' : '' ?> value="0" type="radio" name="understand_work_contributes_life_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->understand_work_contributes_life_meaning == '1' ? 'checked' : '' ?> value="1" type="radio" name="understand_work_contributes_life_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->understand_work_contributes_life_meaning == '2' ? 'checked' : '' ?> value="2" type="radio" name="understand_work_contributes_life_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->understand_work_contributes_life_meaning == '3' ? 'checked' : '' ?> value="3" type="radio" name="understand_work_contributes_life_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->understand_work_contributes_life_meaning == '4' ? 'checked' : '' ?> value="4" type="radio" name="understand_work_contributes_life_meaning" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I have a good sense of what makes my job meaningful.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->good_sense_what_makes_job_meaningful == '0' ? 'checked' : '' ?> value="0" type="radio" name="good_sense_what_makes_job_meaningful" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->good_sense_what_makes_job_meaningful == '1' ? 'checked' : '' ?> value="1" type="radio" name="good_sense_what_makes_job_meaningful" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->good_sense_what_makes_job_meaningful == '2' ? 'checked' : '' ?> value="2" type="radio" name="good_sense_what_makes_job_meaningful" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->good_sense_what_makes_job_meaningful == '3' ? 'checked' : '' ?> value="3" type="radio" name="good_sense_what_makes_job_meaningful" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->good_sense_what_makes_job_meaningful == '4' ? 'checked' : '' ?> value="4" type="radio" name="good_sense_what_makes_job_meaningful" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I know my work makes a positive difference in the world.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_positive_difference_world == '0' ? 'checked' : '' ?> value="0" type="radio" name="work_makes_positive_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_positive_difference_world == '1' ? 'checked' : '' ?> value="1" type="radio" name="work_makes_positive_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_positive_difference_world == '2' ? 'checked' : '' ?> value="2" type="radio" name="work_makes_positive_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_positive_difference_world == '3' ? 'checked' : '' ?> value="3" type="radio" name="work_makes_positive_difference_world" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_makes_positive_difference_world == '4' ? 'checked' : '' ?> value="4" type="radio" name="work_makes_positive_difference_world" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>My work helps me better understand myself.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_understand_myself == '0' ? 'checked' : '' ?> value="0" type="radio" name="work_helps_understand_myself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_understand_myself == '1' ? 'checked' : '' ?> value="1" type="radio" name="work_helps_understand_myself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_understand_myself == '2' ? 'checked' : '' ?> value="2" type="radio" name="work_helps_understand_myself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_understand_myself == '3' ? 'checked' : '' ?> value="3" type="radio" name="work_helps_understand_myself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_understand_myself == '4' ? 'checked' : '' ?> value="4" type="radio" name="work_helps_understand_myself" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I have discovered work that has a satisfying purpose.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->discovered_work_satisfying_purpose == '0' ? 'checked' : '' ?> value="0" type="radio" name="discovered_work_satisfying_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->discovered_work_satisfying_purpose == '1' ? 'checked' : '' ?> value="1" type="radio" name="discovered_work_satisfying_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->discovered_work_satisfying_purpose == '2' ? 'checked' : '' ?> value="2" type="radio" name="discovered_work_satisfying_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->discovered_work_satisfying_purpose == '3' ? 'checked' : '' ?> value="3" type="radio" name="discovered_work_satisfying_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->discovered_work_satisfying_purpose == '4' ? 'checked' : '' ?> value="4" type="radio" name="discovered_work_satisfying_purpose" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>My work helps me make sense of the world around me.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_make_sense_world_around == '0' ? 'checked' : '' ?> value="0" type="radio" name="work_helps_make_sense_world_around" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_make_sense_world_around == '1' ? 'checked' : '' ?> value="1" type="radio" name="work_helps_make_sense_world_around" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_make_sense_world_around == '2' ? 'checked' : '' ?> value="2" type="radio" name="work_helps_make_sense_world_around" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_make_sense_world_around == '3' ? 'checked' : '' ?> value="3" type="radio" name="work_helps_make_sense_world_around" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->work_helps_make_sense_world_around == '4' ? 'checked' : '' ?> value="4" type="radio" name="work_helps_make_sense_world_around" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>The work I do serves a greater purpose.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->serves_greater_purpose == '0' ? 'checked' : '' ?> value="0" type="radio" name="serves_greater_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->serves_greater_purpose == '1' ? 'checked' : '' ?> value="1" type="radio" name="serves_greater_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->serves_greater_purpose == '2' ? 'checked' : '' ?> value="2" type="radio" name="serves_greater_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->serves_greater_purpose == '3' ? 'checked' : '' ?> value="3" type="radio" name="serves_greater_purpose" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->serves_greater_purpose == '4' ? 'checked' : '' ?> value="4" type="radio" name="serves_greater_purpose" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
      </div>
    </div>
    <section class="fixed-bottom position-fixed w-100 bg-white shadow p-4 border">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div> <a href="<?= base_url('survey/form4') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 5 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 27%" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>