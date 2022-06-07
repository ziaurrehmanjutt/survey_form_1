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
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">33</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>doesn't apply at all</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>applies completely</th>
                  </tr>
                </thead>
                <tr>
                  <td>I sometimes twist the truth in my favor when answering survey questions.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input name="sometimes_twist_truth_favor_when_answering_survey_ques" <?= $data->sometimes_twist_truth_favor_when_answering_survey_ques == '0' ? 'checked' : '' ?> value="0" class="form-check-input" type="radio" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" <?= $data->sometimes_twist_truth_favor_when_answering_survey_ques == '1' ? 'checked' : '' ?> value="1" name="sometimes_twist_truth_favor_when_answering_survey_ques" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" <?= $data->sometimes_twist_truth_favor_when_answering_survey_ques == '2' ? 'checked' : '' ?> value="2" name="sometimes_twist_truth_favor_when_answering_survey_ques" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" <?= $data->sometimes_twist_truth_favor_when_answering_survey_ques == '3' ? 'checked' : '' ?> value="3" name="sometimes_twist_truth_favor_when_answering_survey_ques" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" <?= $data->sometimes_twist_truth_favor_when_answering_survey_ques == '4' ? 'checked' : '' ?> value="4" name="sometimes_twist_truth_favor_when_answering_survey_ques" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I contemplate whether my responses to survey questions make me look bad in the eyes of others.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contemplate_whether_my_responses_survey_questions == '0' ? 'checked' : '' ?> value="0" type="radio" name="contemplate_whether_my_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contemplate_whether_my_responses_survey_questions == '1' ? 'checked' : '' ?> value="1" type="radio" name="contemplate_whether_my_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contemplate_whether_my_responses_survey_questions == '2' ? 'checked' : '' ?> value="2" type="radio" name="contemplate_whether_my_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contemplate_whether_my_responses_survey_questions == '3' ? 'checked' : '' ?> value="3" type="radio" name="contemplate_whether_my_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->contemplate_whether_my_responses_survey_questions == '4' ? 'checked' : '' ?> value="4" type="radio" name="contemplate_whether_my_responses_survey_questions" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I don’t care what others may think of my answers to survey questions.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->care_what_others_think_my_answers == '0' ? 'checked' : '' ?> value="0" type="radio" name="care_what_others_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->care_what_others_think_my_answers == '1' ? 'checked' : '' ?> value="1" type="radio" name="care_what_others_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->care_what_others_think_my_answers == '2' ? 'checked' : '' ?> value="2" type="radio" name="care_what_others_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->care_what_others_think_my_answers == '3' ? 'checked' : '' ?> value="3" type="radio" name="care_what_others_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->care_what_others_think_my_answers == '4' ? 'checked' : '' ?> value="4" type="radio" name="care_what_others_think_my_answers" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>When I answer questions about my behavior, I think about how others behave.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->think_about_how_others_behave == '0' ? 'checked' : '' ?> value="0" type="radio" name="think_about_how_others_behave" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->think_about_how_others_behave == '1' ? 'checked' : '' ?> value="1" type="radio" name="think_about_how_others_behave" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->think_about_how_others_behave == '2' ? 'checked' : '' ?> value="2" type="radio" name="think_about_how_others_behave" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->think_about_how_others_behave == '3' ? 'checked' : '' ?> value="3" type="radio" name="think_about_how_others_behave" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->think_about_how_others_behave == '4' ? 'checked' : '' ?> value="4" type="radio" name="think_about_how_others_behave" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I answer survey questions conscientiously.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->answer_survey_questions_conscientiously == '0' ? 'checked' : '' ?> value="0" type="radio" name="answer_survey_questions_conscientiously" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->answer_survey_questions_conscientiously == '1' ? 'checked' : '' ?> value="1" type="radio" name="answer_survey_questions_conscientiously" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->answer_survey_questions_conscientiously == '2' ? 'checked' : '' ?> value="2" type="radio" name="answer_survey_questions_conscientiously" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->answer_survey_questions_conscientiously == '3' ? 'checked' : '' ?> value="3" type="radio" name="answer_survey_questions_conscientiously" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->answer_survey_questions_conscientiously == '4' ? 'checked' : '' ?> value="4" type="radio" name="answer_survey_questions_conscientiously" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I try to give an accurate description of myself in surveys.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->accurate_description_myself_surveys == '0' ? 'checked' : '' ?> value="0" type="radio" name="accurate_description_myself_surveys" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->accurate_description_myself_surveys == '1' ? 'checked' : '' ?> value="1" type="radio" name="accurate_description_myself_surveys" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->accurate_description_myself_surveys == '2' ? 'checked' : '' ?> value="2" type="radio" name="accurate_description_myself_surveys" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->accurate_description_myself_surveys == '3' ? 'checked' : '' ?> value="3" type="radio" name="accurate_description_myself_surveys" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->accurate_description_myself_surveys == '4' ? 'checked' : '' ?> value="4" type="radio" name="accurate_description_myself_surveys" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>It matters to me what others think of my responses to survey questions.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->others_think_responses_survey_questions == '0' ? 'checked' : '' ?> value="0" type="radio" name="others_think_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->others_think_responses_survey_questions == '1' ? 'checked' : '' ?> value="1" type="radio" name="others_think_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->others_think_responses_survey_questions == '2' ? 'checked' : '' ?> value="2" type="radio" name="others_think_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->others_think_responses_survey_questions == '3' ? 'checked' : '' ?> value="3" type="radio" name="others_think_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->others_think_responses_survey_questions == '4' ? 'checked' : '' ?> value="4" type="radio" name="others_think_responses_survey_questions" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I am honest in my responses to survey questions.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->honest_in_responses_survey_questions == '0' ? 'checked' : '' ?> value="0" type="radio" name="honest_in_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->honest_in_responses_survey_questions == '1' ? 'checked' : '' ?> value="1" type="radio" name="honest_in_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->honest_in_responses_survey_questions == '2' ? 'checked' : '' ?> value="2" type="radio" name="honest_in_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->honest_in_responses_survey_questions == '3' ? 'checked' : '' ?> value="3" type="radio" name="honest_in_responses_survey_questions" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->honest_in_responses_survey_questions == '4' ? 'checked' : '' ?> value="4" type="radio" name="honest_in_responses_survey_questions" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I answer survey questions irrespectively of what others may think of my answers.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->survey_questions_irrespectively_think_my_answers == '0' ? 'checked' : '' ?> value="0" type="radio" name="survey_questions_irrespectively_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->survey_questions_irrespectively_think_my_answers == '1' ? 'checked' : '' ?> value="1" type="radio" name="survey_questions_irrespectively_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->survey_questions_irrespectively_think_my_answers == '2' ? 'checked' : '' ?> value="2" type="radio" name="survey_questions_irrespectively_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->survey_questions_irrespectively_think_my_answers == '3' ? 'checked' : '' ?> value="3" type="radio" name="survey_questions_irrespectively_think_my_answers" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->survey_questions_irrespectively_think_my_answers == '4' ? 'checked' : '' ?> value="4" type="radio" name="survey_questions_irrespectively_think_my_answers" />
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
          <div> <a href="<?= base_url('survey/form3') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 4 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>