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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">39</strong>
        <div class="d-block overflow-hidden">
          <h6 class="h6 mt-2">&nbsp;</h6>
          <div class="options pt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>strongly disagree</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>strongly agree</th>
                </tr>
              </thead>
              <tr>
                <td>I will create my firm in order... to advance my career in the business world.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '0' ? 'checked' : '' ?> value="0" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '1' ? 'checked' : '' ?> value="1" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '2' ? 'checked' : '' ?> value="2" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '3' ? 'checked' : '' ?> value="3" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '4' ? 'checked' : '' ?> value="4" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '5' ? 'checked' : '' ?> value="5" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->advance_career_in_business == '6' ? 'checked' : '' ?> value="6" type="radio" name="advance_career_in_business" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>As a firm founder, it will be very important to me...to operate my firm on the basis of solid management practices.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '0' ? 'checked' : '' ?> value="0" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '1' ? 'checked' : '' ?> value="1" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '2' ? 'checked' : '' ?> value="2" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '3' ? 'checked' : '' ?> value="3" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '4' ? 'checked' : '' ?> value="4" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '5' ? 'checked' : '' ?> value="5" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solid_management_practices == '6' ? 'checked' : '' ?> value="6" type="radio" name="solid_management_practices" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>As a firm founder, it will be very important to me...to have thoroughly analyzed the financial prospects of my business.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '0' ? 'checked' : '' ?> value="0" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '1' ? 'checked' : '' ?> value="1" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '2' ? 'checked' : '' ?> value="2" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '3' ? 'checked' : '' ?> value="3" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '4' ? 'checked' : '' ?> value="4" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '5' ? 'checked' : '' ?> value="5" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->financial_prospects_of_business == '6' ? 'checked' : '' ?> value="6" type="radio" name="financial_prospects_of_business" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to have a strong focus on what my firm can achieve vis-à-vis the competition.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '0' ? 'checked' : '' ?> value="0" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '1' ? 'checked' : '' ?> value="1" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '2' ? 'checked' : '' ?> value="2" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '3' ? 'checked' : '' ?> value="3" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '4' ? 'checked' : '' ?> value="4" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '5' ? 'checked' : '' ?> value="5" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->what_my_firm_achieve == '6' ? 'checked' : '' ?> value="6" type="radio" name="what_my_firm_achieve" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to establish a strong competitive advantage and significantly outperform other firms in my domain.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '0' ? 'checked' : '' ?> value="0" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '1' ? 'checked' : '' ?> value="1" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '2' ? 'checked' : '' ?> value="2" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '3' ? 'checked' : '' ?> value="3" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '4' ? 'checked' : '' ?> value="4" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '5' ? 'checked' : '' ?> value="5" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->establish_strong_competitive_advantage == '6' ? 'checked' : '' ?> value="6" type="radio" name="establish_strong_competitive_advantage" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I will create my firm in order...to solve a specific problem for a group of people that I strongly identify with (e.g., friends, colleagues, club, community).</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '0' ? 'checked' : '' ?> value="0" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '1' ? 'checked' : '' ?> value="1" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '2' ? 'checked' : '' ?> value="2" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '3' ? 'checked' : '' ?> value="3" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '4' ? 'checked' : '' ?> value="4" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '5' ? 'checked' : '' ?> value="5" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->solve_specific_problem_for_group == '6' ? 'checked' : '' ?> value="6" type="radio" name="solve_specific_problem_for_group" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I will create my firm in order...to play a proactive role in shaping the activities of a group of people that I strongly identify with.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '0' ? 'checked' : '' ?> value="0" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '1' ? 'checked' : '' ?> value="1" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '2' ? 'checked' : '' ?> value="2" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '3' ? 'checked' : '' ?> value="3" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '4' ? 'checked' : '' ?> value="4" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '5' ? 'checked' : '' ?> value="5" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->play_proactive_role_in_shaping_activities == '6' ? 'checked' : '' ?> value="6" type="radio" name="play_proactive_role_in_shaping_activities" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>As a firm founder, it will be very important to me...to provide a product/service that is useful to a group of people that I strongly identify with (e.g., friends, colleagues, club, community).</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '0' ? 'checked' : '' ?> value="0" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '1' ? 'checked' : '' ?> value="1" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '2' ? 'checked' : '' ?> value="2" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '3' ? 'checked' : '' ?> value="3" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '4' ? 'checked' : '' ?> value="4" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '5' ? 'checked' : '' ?> value="5" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->service_that_useful_to_group == '6' ? 'checked' : '' ?> value="6" type="radio" name="service_that_useful_to_group" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to have a strong focus on a group of people that I strongly identify with (e.g., friends, colleagues, club, community).</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '0' ? 'checked' : '' ?> value="0" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '1' ? 'checked' : '' ?> value="1" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '2' ? 'checked' : '' ?> value="2" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '3' ? 'checked' : '' ?> value="3" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '4' ? 'checked' : '' ?> value="4" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '5' ? 'checked' : '' ?> value="5" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->have_strong_focus_on_group == '6' ? 'checked' : '' ?> value="6" type="radio" name="have_strong_focus_on_group" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to support and advance a group of people that I strongly identify with.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '0' ? 'checked' : '' ?> value="0" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '1' ? 'checked' : '' ?> value="1" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '2' ? 'checked' : '' ?> value="2" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '3' ? 'checked' : '' ?> value="3" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '4' ? 'checked' : '' ?> value="4" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '5' ? 'checked' : '' ?> value="5" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->support_and_advance_group_people == '6' ? 'checked' : '' ?> value="6" type="radio" name="support_and_advance_group_people" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I will create my firm in order...to play a proactive role in changing how the world operates.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '0' ? 'checked' : '' ?> value="0" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '1' ? 'checked' : '' ?> value="1" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '2' ? 'checked' : '' ?> value="2" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '3' ? 'checked' : '' ?> value="3" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '4' ? 'checked' : '' ?> value="4" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '5' ? 'checked' : '' ?> value="5" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->changing_how_world_operates == '6' ? 'checked' : '' ?> value="6" type="radio" name="changing_how_world_operates" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>As a firm founder, it will be very important to me...to be a highly responsible citizen of our world.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '0' ? 'checked' : '' ?> value="0" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '1' ? 'checked' : '' ?> value="1" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '2' ? 'checked' : '' ?> value="2" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '3' ? 'checked' : '' ?> value="3" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '4' ? 'checked' : '' ?> value="4" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '5' ? 'checked' : '' ?> value="5" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->highly_responsible_citizen == '6' ? 'checked' : '' ?> value="6" type="radio" name="highly_responsible_citizen" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>As a firm founder, it will be very important to me...to make the world a “better place” (e.g., by pursuing social justice, protecting the environment).</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '0' ? 'checked' : '' ?> value="0" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '1' ? 'checked' : '' ?> value="1" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '2' ? 'checked' : '' ?> value="2" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '3' ? 'checked' : '' ?> value="3" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '4' ? 'checked' : '' ?> value="4" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '5' ? 'checked' : '' ?> value="5" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_world_better_place == '6' ? 'checked' : '' ?> value="6" type="radio" name="make_world_better_place" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to have a strong focus on what the firm is able to achieve for society-at-large.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '0' ? 'checked' : '' ?> value="0" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '1' ? 'checked' : '' ?> value="1" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '2' ? 'checked' : '' ?> value="2" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '3' ? 'checked' : '' ?> value="3" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '4' ? 'checked' : '' ?> value="4" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '5' ? 'checked' : '' ?> value="5" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->achieve_for_society == '6' ? 'checked' : '' ?> value="6" type="radio" name="achieve_for_society" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>When managing my firm, it will be very important to me...to convince others that private firms are indeed able to address the type of societal challenges that my firm addresses (e.g., social justice, environmental protection).</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '0' ? 'checked' : '' ?> value="0" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '1' ? 'checked' : '' ?> value="1" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '2' ? 'checked' : '' ?> value="2" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '3' ? 'checked' : '' ?> value="3" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '4' ? 'checked' : '' ?> value="4" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
									<td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '5' ? 'checked' : '' ?> value="5" type="radio" name="societal_challenges_firm_addresses" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->societal_challenges_firm_addresses == '6' ? 'checked' : '' ?> value="6" type="radio" name="societal_challenges_firm_addresses" />
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
        <div> <a href="<?=base_url('survey/form8')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 9 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
  </form>
</div>
