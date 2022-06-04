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
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36a</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Disagree strongly</th>
                    <th>Disagree</th>
                    <th>Neither agree nor disagree</th>
                    <th>Agree</th>
                    <th>Agree strongly</th>
                  </tr>
                </thead>
                <tr>
                  <td>It’s not wise to tell your secrets</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wise_to_tell_secrets == '0' ? 'checked' : '' ?> value="0" type="radio" name="wise_to_tell_secrets" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wise_to_tell_secrets == '1' ? 'checked' : '' ?> value="1" type="radio" name="wise_to_tell_secrets" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wise_to_tell_secrets == '2' ? 'checked' : '' ?> value="2" type="radio" name="wise_to_tell_secrets" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wise_to_tell_secrets == '3' ? 'checked' : '' ?> value="3" type="radio" name="wise_to_tell_secrets" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wise_to_tell_secrets == '4' ? 'checked' : '' ?> value="4" type="radio" name="wise_to_tell_secrets" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I like to use clever manipulation to get my way</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->use_clever_manipulation == '0' ? 'checked' : '' ?> value="0" type="radio" name="use_clever_manipulation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->use_clever_manipulation == '1' ? 'checked' : '' ?> value="1" type="radio" name="use_clever_manipulation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->use_clever_manipulation == '2' ? 'checked' : '' ?> value="2" type="radio" name="use_clever_manipulation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->use_clever_manipulation == '3' ? 'checked' : '' ?> value="3" type="radio" name="use_clever_manipulation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->use_clever_manipulation == '4' ? 'checked' : '' ?> value="4" type="radio" name="use_clever_manipulation" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Whatever it takes, you must get the important people on your side</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->must_get_important_people == '0' ? 'checked' : '' ?> value="0" type="radio" name="must_get_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->must_get_important_people == '1' ? 'checked' : '' ?> value="1" type="radio" name="must_get_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->must_get_important_people == '2' ? 'checked' : '' ?> value="2" type="radio" name="must_get_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->must_get_important_people == '3' ? 'checked' : '' ?> value="3" type="radio" name="must_get_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->must_get_important_people == '4' ? 'checked' : '' ?> value="4" type="radio" name="must_get_important_people" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Avoid direct conflict with others because they may be useful in the future</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_direct_conflict == '0' ? 'checked' : '' ?> value="0" type="radio" name="avoid_direct_conflict" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_direct_conflict == '1' ? 'checked' : '' ?> value="1" type="radio" name="avoid_direct_conflict" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_direct_conflict == '2' ? 'checked' : '' ?> value="2" type="radio" name="avoid_direct_conflict" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_direct_conflict == '3' ? 'checked' : '' ?> value="3" type="radio" name="avoid_direct_conflict" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_direct_conflict == '4' ? 'checked' : '' ?> value="4" type="radio" name="avoid_direct_conflict" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>It’s wise to keep track of information that you can use against people later</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->keep_track_of_information == '0' ? 'checked' : '' ?> value="0" type="radio" name="keep_track_of_information" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->keep_track_of_information == '1' ? 'checked' : '' ?> value="1" type="radio" name="keep_track_of_information" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->keep_track_of_information == '2' ? 'checked' : '' ?> value="2" type="radio" name="keep_track_of_information" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->keep_track_of_information == '3' ? 'checked' : '' ?> value="3" type="radio" name="keep_track_of_information" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->keep_track_of_information == '4' ? 'checked' : '' ?> value="4" type="radio" name="keep_track_of_information" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>You should wait for the right time to get back at people</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wait_for_right_time_to_back == '0' ? 'checked' : '' ?> value="0" type="radio" name="wait_for_right_time_to_back" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wait_for_right_time_to_back == '1' ? 'checked' : '' ?> value="1" type="radio" name="wait_for_right_time_to_back" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wait_for_right_time_to_back == '2' ? 'checked' : '' ?> value="2" type="radio" name="wait_for_right_time_to_back" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wait_for_right_time_to_back == '3' ? 'checked' : '' ?> value="3" type="radio" name="wait_for_right_time_to_back" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->wait_for_right_time_to_back == '4' ? 'checked' : '' ?> value="4" type="radio" name="wait_for_right_time_to_back" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>There are things you should hide from other people to preserve your reputation</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->preserve_your_reputation == '0' ? 'checked' : '' ?> value="0" type="radio" name="preserve_your_reputation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->preserve_your_reputation == '1' ? 'checked' : '' ?> value="1" type="radio" name="preserve_your_reputation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->preserve_your_reputation == '2' ? 'checked' : '' ?> value="2" type="radio" name="preserve_your_reputation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->preserve_your_reputation == '3' ? 'checked' : '' ?> value="3" type="radio" name="preserve_your_reputation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->preserve_your_reputation == '4' ? 'checked' : '' ?> value="4" type="radio" name="preserve_your_reputation" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Make sure your plans benefit yourself, not others</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->plans_benefit_yourself == '0' ? 'checked' : '' ?> value="0" type="radio" name="plans_benefit_yourself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->plans_benefit_yourself == '1' ? 'checked' : '' ?> value="1" type="radio" name="plans_benefit_yourself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->plans_benefit_yourself == '2' ? 'checked' : '' ?> value="2" type="radio" name="plans_benefit_yourself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->plans_benefit_yourself == '3' ? 'checked' : '' ?> value="3" type="radio" name="plans_benefit_yourself" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->plans_benefit_yourself == '4' ? 'checked' : '' ?> value="4" type="radio" name="plans_benefit_yourself" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Most people can be manipulated.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->people_can_manipulated == '0' ? 'checked' : '' ?> value="0" type="radio" name="people_can_manipulated" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->people_can_manipulated == '1' ? 'checked' : '' ?> value="1" type="radio" name="people_can_manipulated" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->people_can_manipulated == '2' ? 'checked' : '' ?> value="2" type="radio" name="people_can_manipulated" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->people_can_manipulated == '3' ? 'checked' : '' ?> value="3" type="radio" name="people_can_manipulated" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->people_can_manipulated == '4' ? 'checked' : '' ?> value="4" type="radio" name="people_can_manipulated" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36b</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Disagree strongly</th>
                    <th>Disagree</th>
                    <th>Neither agree nor disagree</th>
                    <th>Agree</th>
                    <th>Agree strongly</th>
                  </tr>
                </thead>
                <tr>
                  <td>People see me as a natural leader</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->natural_leader == '0' ? 'checked' : '' ?> value="0" type="radio" name="natural_leader" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->natural_leader == '1' ? 'checked' : '' ?> value="1" type="radio" name="natural_leader" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->natural_leader == '2' ? 'checked' : '' ?> value="2" type="radio" name="natural_leader" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->natural_leader == '3' ? 'checked' : '' ?> value="3" type="radio" name="natural_leader" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->natural_leader == '4' ? 'checked' : '' ?> value="4" type="radio" name="natural_leader" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I hate being the center of attention. (R)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->center_of_attention == '0' ? 'checked' : '' ?> value="0" type="radio" name="center_of_attention" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->center_of_attention == '1' ? 'checked' : '' ?> value="1" type="radio" name="center_of_attention" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->center_of_attention == '2' ? 'checked' : '' ?> value="2" type="radio" name="center_of_attention" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->center_of_attention == '3' ? 'checked' : '' ?> value="3" type="radio" name="center_of_attention" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->center_of_attention == '4' ? 'checked' : '' ?> value="4" type="radio" name="center_of_attention" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Many group activities tend to be dull without me</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->group_activities_tend == '0' ? 'checked' : '' ?> value="0" type="radio" name="group_activities_tend" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->group_activities_tend == '1' ? 'checked' : '' ?> value="1" type="radio" name="group_activities_tend" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->group_activities_tend == '2' ? 'checked' : '' ?> value="2" type="radio" name="group_activities_tend" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->group_activities_tend == '3' ? 'checked' : '' ?> value="3" type="radio" name="group_activities_tend" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->group_activities_tend == '4' ? 'checked' : '' ?> value="4" type="radio" name="group_activities_tend" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I know that I am special because everyone keeps telling me so</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->special_because_everyone_keeps_telling == '0' ? 'checked' : '' ?> value="0" type="radio" name="special_because_everyone_keeps_telling" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->special_because_everyone_keeps_telling == '1' ? 'checked' : '' ?> value="1" type="radio" name="special_because_everyone_keeps_telling" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->special_because_everyone_keeps_telling == '2' ? 'checked' : '' ?> value="2" type="radio" name="special_because_everyone_keeps_telling" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->special_because_everyone_keeps_telling == '3' ? 'checked' : '' ?> value="3" type="radio" name="special_because_everyone_keeps_telling" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->special_because_everyone_keeps_telling == '4' ? 'checked' : '' ?> value="4" type="radio" name="special_because_everyone_keeps_telling" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I like to get acquainted with important people.6.I feel embarrassed if someone compliments me. (R)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->acquainted_with_important_people == '0' ? 'checked' : '' ?> value="0" type="radio" name="acquainted_with_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->acquainted_with_important_people == '1' ? 'checked' : '' ?> value="1" type="radio" name="acquainted_with_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->acquainted_with_important_people == '2' ? 'checked' : '' ?> value="2" type="radio" name="acquainted_with_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->acquainted_with_important_people == '3' ? 'checked' : '' ?> value="3" type="radio" name="acquainted_with_important_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->acquainted_with_important_people == '4' ? 'checked' : '' ?> value="4" type="radio" name="acquainted_with_important_people" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I have been compared to famous people</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->compared_famous_people == '0' ? 'checked' : '' ?> value="0" type="radio" name="compared_famous_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->compared_famous_people == '1' ? 'checked' : '' ?> value="1" type="radio" name="compared_famous_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->compared_famous_people == '2' ? 'checked' : '' ?> value="2" type="radio" name="compared_famous_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->compared_famous_people == '3' ? 'checked' : '' ?> value="3" type="radio" name="compared_famous_people" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->compared_famous_people == '4' ? 'checked' : '' ?> value="4" type="radio" name="compared_famous_people" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I am an average person. (R)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->average_person == '0' ? 'checked' : '' ?> value="0" type="radio" name="average_person" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->average_person == '1' ? 'checked' : '' ?> value="1" type="radio" name="average_person" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->average_person == '2' ? 'checked' : '' ?> value="2" type="radio" name="average_person" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->average_person == '3' ? 'checked' : '' ?> value="3" type="radio" name="average_person" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->average_person == '4' ? 'checked' : '' ?> value="4" type="radio" name="average_person" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I insist on getting the respect I deserve</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->getting_respect_deserve == '0' ? 'checked' : '' ?> value="0" type="radio" name="getting_respect_deserve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->getting_respect_deserve == '1' ? 'checked' : '' ?> value="1" type="radio" name="getting_respect_deserve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->getting_respect_deserve == '2' ? 'checked' : '' ?> value="2" type="radio" name="getting_respect_deserve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->getting_respect_deserve == '3' ? 'checked' : '' ?> value="3" type="radio" name="getting_respect_deserve" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->getting_respect_deserve == '4' ? 'checked' : '' ?> value="4" type="radio" name="getting_respect_deserve" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36c</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Disagree strongly</th>
                    <th>Disagree</th>
                    <th>Neither agree nor disagree</th>
                    <th>Agree</th>
                    <th>Agree strongly</th>
                  </tr>
                </thead>
                <tr>
                  <td>I like to get revenge on authorities</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->revenge_on_authorities == '0' ? 'checked' : '' ?> value="0" type="radio" name="revenge_on_authorities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->revenge_on_authorities == '1' ? 'checked' : '' ?> value="1" type="radio" name="revenge_on_authorities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->revenge_on_authorities == '2' ? 'checked' : '' ?> value="2" type="radio" name="revenge_on_authorities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->revenge_on_authorities == '3' ? 'checked' : '' ?> value="3" type="radio" name="revenge_on_authorities" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->revenge_on_authorities == '4' ? 'checked' : '' ?> value="4" type="radio" name="revenge_on_authorities" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I avoid dangerous situations</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_dangerous_situations == '0' ? 'checked' : '' ?> value="0" type="radio" name="avoid_dangerous_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_dangerous_situations == '1' ? 'checked' : '' ?> value="1" type="radio" name="avoid_dangerous_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_dangerous_situations == '2' ? 'checked' : '' ?> value="2" type="radio" name="avoid_dangerous_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_dangerous_situations == '3' ? 'checked' : '' ?> value="3" type="radio" name="avoid_dangerous_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->avoid_dangerous_situations == '4' ? 'checked' : '' ?> value="4" type="radio" name="avoid_dangerous_situations" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Payback needs to be quick and nasty</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->payback_needs == '0' ? 'checked' : '' ?> value="0" type="radio" name="payback_needs" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->payback_needs == '1' ? 'checked' : '' ?> value="1" type="radio" name="payback_needs" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->payback_needs == '2' ? 'checked' : '' ?> value="2" type="radio" name="payback_needs" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->payback_needs == '3' ? 'checked' : '' ?> value="3" type="radio" name="payback_needs" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->payback_needs == '4' ? 'checked' : '' ?> value="4" type="radio" name="payback_needs" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>People often say I’m out of control</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->say_out_of_control == '0' ? 'checked' : '' ?> value="0" type="radio" name="say_out_of_control" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->say_out_of_control == '1' ? 'checked' : '' ?> value="1" type="radio" name="say_out_of_control" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->say_out_of_control == '2' ? 'checked' : '' ?> value="2" type="radio" name="say_out_of_control" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->say_out_of_control == '3' ? 'checked' : '' ?> value="3" type="radio" name="say_out_of_control" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->say_out_of_control == '4' ? 'checked' : '' ?> value="4" type="radio" name="say_out_of_control" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>It’s true that I can be mean to others</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mean_to_others == '0' ? 'checked' : '' ?> value="0" type="radio" name="mean_to_others" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mean_to_others == '1' ? 'checked' : '' ?> value="1" type="radio" name="mean_to_others" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mean_to_others == '2' ? 'checked' : '' ?> value="2" type="radio" name="mean_to_others" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mean_to_others == '3' ? 'checked' : '' ?> value="3" type="radio" name="mean_to_others" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mean_to_others == '4' ? 'checked' : '' ?> value="4" type="radio" name="mean_to_others" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>People who mess with me always regret it</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->always_regret_it == '0' ? 'checked' : '' ?> value="0" type="radio" name="always_regret_it" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->always_regret_it == '1' ? 'checked' : '' ?> value="1" type="radio" name="always_regret_it" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->always_regret_it == '2' ? 'checked' : '' ?> value="2" type="radio" name="always_regret_it" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->always_regret_it == '3' ? 'checked' : '' ?> value="3" type="radio" name="always_regret_it" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->always_regret_it == '4' ? 'checked' : '' ?> value="4" type="radio" name="always_regret_it" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I have never gotten into trouble with the law</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->trouble_with_the_law == '0' ? 'checked' : '' ?> value="0" type="radio" name="trouble_with_the_law" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->trouble_with_the_law == '1' ? 'checked' : '' ?> value="1" type="radio" name="trouble_with_the_law" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->trouble_with_the_law == '2' ? 'checked' : '' ?> value="2" type="radio" name="trouble_with_the_law" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->trouble_with_the_law == '3' ? 'checked' : '' ?> value="3" type="radio" name="trouble_with_the_law" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->trouble_with_the_law == '4' ? 'checked' : '' ?> value="4" type="radio" name="trouble_with_the_law" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I enjoy having sex with people I hardly know</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->enjoy_having_sex == '0' ? 'checked' : '' ?> value="0" type="radio" name="enjoy_having_sex" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->enjoy_having_sex == '1' ? 'checked' : '' ?> value="1" type="radio" name="enjoy_having_sex" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->enjoy_having_sex == '2' ? 'checked' : '' ?> value="2" type="radio" name="enjoy_having_sex" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->enjoy_having_sex == '3' ? 'checked' : '' ?> value="3" type="radio" name="enjoy_having_sex" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->enjoy_having_sex == '4' ? 'checked' : '' ?> value="4" type="radio" name="enjoy_having_sex" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>I’ll say anything to get what I want</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->anything_get_what_want == '0' ? 'checked' : '' ?> value="0" type="radio" name="anything_get_what_want" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->anything_get_what_want == '1' ? 'checked' : '' ?> value="1" type="radio" name="anything_get_what_want" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->anything_get_what_want == '2' ? 'checked' : '' ?> value="2" type="radio" name="anything_get_what_want" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->anything_get_what_want == '3' ? 'checked' : '' ?> value="3" type="radio" name="anything_get_what_want" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->anything_get_what_want == '4' ? 'checked' : '' ?> value="4" type="radio" name="anything_get_what_want" />
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
          <div> <a href="<?= base_url('survey/form5') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 6 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>