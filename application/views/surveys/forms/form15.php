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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">48</strong>
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
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->twist_truth_in_my_favor == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="twist_truth_in_my_favor"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->twist_truth_in_my_favor == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="twist_truth_in_my_favor"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->twist_truth_in_my_favor == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="twist_truth_in_my_favor"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->twist_truth_in_my_favor == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="twist_truth_in_my_favor"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->twist_truth_in_my_favor == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="twist_truth_in_my_favor"  />
                  </div></td>
              </tr>
              <tr>
                <td>I contemplate whether my responses to survey questions make me look bad in the eyes of others.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->responses_to_survey_questions == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->responses_to_survey_questions == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->responses_to_survey_questions == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->responses_to_survey_questions == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->responses_to_survey_questions == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="responses_to_survey_questions"  />
                  </div></td>
              </tr>
              <tr>
                <td>I don’t care what others may think of my answers to survey questions.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->my_answers_to_survey_questions == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="my_answers_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->my_answers_to_survey_questions == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="my_answers_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->my_answers_to_survey_questions == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="my_answers_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->my_answers_to_survey_questions == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="my_answers_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->my_answers_to_survey_questions == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="my_answers_to_survey_questions"  />
                  </div></td>
              </tr>
              <tr>
                <td>When I answer questions about my behavior, I think about how others behave.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->answer_questions_about_my_behavior == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="answer_questions_about_my_behavior"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->answer_questions_about_my_behavior == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="answer_questions_about_my_behavior"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->answer_questions_about_my_behavior == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="answer_questions_about_my_behavior"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->answer_questions_about_my_behavior == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="answer_questions_about_my_behavior"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->answer_questions_about_my_behavior == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="answer_questions_about_my_behavior"  />
                  </div></td>
              </tr>
              <tr>
                <td>I answer survey questions conscientiously.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_conscientiously == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="survey_questions_conscientiously"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_conscientiously == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="survey_questions_conscientiously"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_conscientiously == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="survey_questions_conscientiously"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_conscientiously == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="survey_questions_conscientiously"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_conscientiously == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="survey_questions_conscientiously"  />
                  </div></td>
              </tr>
              <tr>
                <td>I try to give an accurate description of myself in surveys.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->accurate_description_myself == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="accurate_description_myself"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->accurate_description_myself == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="accurate_description_myself"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->accurate_description_myself == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="accurate_description_myself"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->accurate_description_myself == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="accurate_description_myself"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->accurate_description_myself == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="accurate_description_myself"  />
                  </div></td>
              </tr>
              <tr>
                <td>It matters to me what others think of my responses to survey questions.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->matters_responses_to_survey_questions == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="matters_responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->matters_responses_to_survey_questions == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="matters_responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->matters_responses_to_survey_questions == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="matters_responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->matters_responses_to_survey_questions == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="matters_responses_to_survey_questions"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->matters_responses_to_survey_questions == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="matters_responses_to_survey_questions"  />
                  </div></td>
              </tr>
              <tr>
                <td>I am honest in my responses to survey questions.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->honest_my_responses == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="honest_my_responses"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->honest_my_responses == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="honest_my_responses"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->honest_my_responses == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="honest_my_responses"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->honest_my_responses == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="honest_my_responses"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->honest_my_responses == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="honest_my_responses"  />
                  </div></td>
              </tr>
              <tr>
                <td>I answer survey questions irrespectively of what others may think of my answers.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_irrespectively == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="survey_questions_irrespectively"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_irrespectively == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="survey_questions_irrespectively"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_irrespectively == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="survey_questions_irrespectively"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_irrespectively == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="survey_questions_irrespectively"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->survey_questions_irrespectively == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="survey_questions_irrespectively"  />
                  </div></td>
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
        <div> <a href="<?=base_url('survey/form14')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 15 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
  </form>
</div>
