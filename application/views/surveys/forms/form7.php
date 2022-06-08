<div class="body">
  <header id="header" class="header-effect-shrink border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-0">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo"> <a href="<?= base_url() ?>"> <img alt="Header Imae" width="50" src="https://surveyblitz-fql4jh2d7-surveyblitz-app.vercel.app/_next/image?url=https%3A%2F%2Faqylnrlgyrwkkhrdghyz.supabase.co%2Fstorage%2Fv1%2Fobject%2Fsign%2Fsurveyblitz-testing%2Fa46c502f-3fd4-4ab0-b097-715f50b56865%2Fde-DE%2Feni.png%3Ftoken%3DeyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJzdXJ2ZXlibGl0ei10ZXN0aW5nL2E0NmM1MDJmLTNmZDQtNGFiMC1iMDk3LTcxNWY1MGI1Njg2NS9kZS1ERS9lbmkucG5nIiwiaWF0IjoxNjUxMjY1NzkxLCJleHAiOjE5NjY2MjU3OTF9.MkOTgn16ot3CCixVn6RuLnNYxkxRdhqzZRtGDU1p1iY&w=3840&q=75"> </a> </div>
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
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>We perceive the amount of work that our team produces as really good.</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '0' ? 'checked' : '' ?> value="0" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '1' ? 'checked' : '' ?> value="1" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '2' ? 'checked' : '' ?> value="2" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '3' ? 'checked' : '' ?> value="3" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '4' ? 'checked' : '' ?> value="4" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_amount_of_work == '5' ? 'checked' : '' ?> value="5" type="radio" name="perceive_amount_of_work" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>The quality of work our team produces is highly satisfying</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '0' ? 'checked' : '' ?> value="0" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '1' ? 'checked' : '' ?> value="1" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '2' ? 'checked' : '' ?> value="2" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '3' ? 'checked' : '' ?> value="3" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '4' ? 'checked' : '' ?> value="4" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_produces_highly_satisfying == '5' ? 'checked' : '' ?> value="5" type="radio" name="team_produces_highly_satisfying" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>The overall evaluation of our team’s effectiveness is very good</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '0' ? 'checked' : '' ?> value="0" type="radio" name="team_effectiveness_very_good" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '1' ? 'checked' : '' ?> value="1" type="radio" name="team_effectiveness_very_good" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '2' ? 'checked' : '' ?> value="2" type="radio" name="team_effectiveness_very_good" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '3' ? 'checked' : '' ?> value="3" type="radio" name="team_effectiveness_very_good" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '4' ? 'checked' : '' ?> value="4" type="radio" name="team_effectiveness_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->team_effectiveness_very_good == '5' ? 'checked' : '' ?> value="5" type="radio" name="team_effectiveness_very_good" />
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
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>I perceive the amount of work that I produce as really good.</td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '0' ? 'checked' : '' ?> value="0" type="radio" name="perceive_the_amount_of_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '1' ? 'checked' : '' ?> value="1" type="radio" name="perceive_the_amount_of_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '2' ? 'checked' : '' ?> value="2" type="radio" name="perceive_the_amount_of_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '3' ? 'checked' : '' ?> value="3" type="radio" name="perceive_the_amount_of_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '4' ? 'checked' : '' ?> value="4" type="radio" name="perceive_the_amount_of_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->perceive_the_amount_of_work == '5' ? 'checked' : '' ?> value="5" type="radio" name="perceive_the_amount_of_work" />
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
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>The quality of work I produce is highly satisfying</td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '0' ? 'checked' : '' ?> value="0" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '1' ? 'checked' : '' ?> value="1" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '2' ? 'checked' : '' ?> value="2" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '3' ? 'checked' : '' ?> value="3" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '4' ? 'checked' : '' ?> value="4" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->quality_of_work_I_produce_is_highly_satisfying == '5' ? 'checked' : '' ?> value="5" type="radio" name="quality_of_work_I_produce_is_highly_satisfying" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36d</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>The overall evaluation of my effectiveness is very good</td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '0' ? 'checked' : '' ?> value="0" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '1' ? 'checked' : '' ?> value="1" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '2' ? 'checked' : '' ?> value="2" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '3' ? 'checked' : '' ?> value="3" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '4' ? 'checked' : '' ?> value="4" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->overall_evaluation_of_my_effectiveness_is_very_good == '5' ? 'checked' : '' ?> value="5" type="radio" name="overall_evaluation_of_my_effectiveness_is_very_good" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36e</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>Are you involved in this start-up to take advantage of a business opportunity or because you have no better choices for work? (optional) </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '0' ? 'checked' : '' ?> value="0" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '1' ? 'checked' : '' ?> value="1" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '2' ? 'checked' : '' ?> value="2" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '3' ? 'checked' : '' ?> value="3" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '4' ? 'checked' : '' ?> value="4" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_involved_in_this_start_up_to_take_advantage_of_a_business == '5' ? 'checked' : '' ?> value="5" type="radio" name="you_involved_in_this_start_up_to_take_advantage_of_a_business" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36f</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>Which do you feel, is the most important motive for pursuing this opportunity? </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '0' ? 'checked' : '' ?> value="0" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '1' ? 'checked' : '' ?> value="1" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '2' ? 'checked' : '' ?> value="2" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '3' ? 'checked' : '' ?> value="3" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '4' ? 'checked' : '' ?> value="4" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->do_you_feel_is_the_most_important_motive_for_pursuing == '5' ? 'checked' : '' ?> value="5" type="radio" name="do_you_feel_is_the_most_important_motive_for_pursuing" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36g</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>Are you part of the leadership in voluntary work (Vorstand, Ehrenamt, Politik, Vereine)?</td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '0' ? 'checked' : '' ?> value="0" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '1' ? 'checked' : '' ?> value="1" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '2' ? 'checked' : '' ?> value="2" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '3' ? 'checked' : '' ?> value="3" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '4' ? 'checked' : '' ?> value="4" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->you_part_of_the_leadership_in_voluntary_work == '5' ? 'checked' : '' ?> value="5" type="radio" name="you_part_of_the_leadership_in_voluntary_work" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">36h</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>don't know</th>
                    <th>take advantage of business opportunity</th>
                    <th>no better choices for work</th>
                    <th>combination of both above</th>
                    <th>have a job but seek better opportunities</th>
                    <th>other</th>
                  </tr>
                </thead>
                <tr>
                  <td>Thinking up new ideas and being creative is important to me. I like to do things in my own original way.</td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '0' ? 'checked' : '' ?> value="0" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '1' ? 'checked' : '' ?> value="1" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '2' ? 'checked' : '' ?> value="2" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '3' ? 'checked' : '' ?> value="3" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '4' ? 'checked' : '' ?> value="4" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                  <td width="75">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->thinking_up_new_ideas_and_being_creative_is_important_to_me == '5' ? 'checked' : '' ?> value="5" type="radio" name="thinking_up_new_ideas_and_being_creative_is_important_to_me" />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">37</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">&nbsp;</h6>
            <div class="options pt-2">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Most Important</th>
                    <th>Second Important</th>
                    <th>Third most Important</th>
                  </tr>
                </thead>
                <tr>
                  <td>We are all part of different groups. Some are more important to us than others when we think of ourselves. In general, which in the following list is most important to you in describing who you are? and the second most important? and the third most important?</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->are_all_part_of_different_groups == '0' ? 'checked' : '' ?> value="0" type="radio" name="are_all_part_of_different_groups" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->are_all_part_of_different_groups == '1' ? 'checked' : '' ?> value="1" type="radio" name="are_all_part_of_different_groups" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->are_all_part_of_different_groups == '2' ? 'checked' : '' ?> value="2" type="radio" name="are_all_part_of_different_groups" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your current or previous occupation (or being a homemaker)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->current_or_previous_occupation == '0' ? 'checked' : '' ?> value="0" type="radio" name="current_or_previous_occupation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->current_or_previous_occupation == '1' ? 'checked' : '' ?> value="1" type="radio" name="current_or_previous_occupation" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->current_or_previous_occupation == '2' ? 'checked' : '' ?> value="2" type="radio" name="current_or_previous_occupation" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your race/ethnic background</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_race_ethnic_background == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_race_ethnic_background" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_race_ethnic_background == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_race_ethnic_background" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_race_ethnic_background == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_race_ethnic_background" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your gender (that is, being a man/woman)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_gender == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_gender" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_gender == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_gender" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_gender == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_gender" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your age group (that is, Young, Middle Age, Old)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_age_group == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_age_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_age_group == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_age_group" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_age_group == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_age_group" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your religion (or being agnostic or atheist)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_religion == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_religion" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_religion == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_religion" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_religion == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_religion" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your preferred political party, group, or movement</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_preferred_political_party == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_preferred_political_party" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_preferred_political_party == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_preferred_political_party" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_preferred_political_party == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_preferred_political_party" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your nationality</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_nationality == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_nationality" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_nationality == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_nationality" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_nationality == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_nationality" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your family or marital status (that is, son/daughter, mother/father, grandfather/grandmother, husband/wife, widower/widow, not married, or other similar)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_family_or_marital_status == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_family_or_marital_status" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_family_or_marital_status == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_family_or_marital_status" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_family_or_marital_status == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_family_or_marital_status" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Your social class (that is upper, middle, lower, working, or similar categories)</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_social_class == '0' ? 'checked' : '' ?> value="0" type="radio" name="your_social_class" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_social_class == '1' ? 'checked' : '' ?> value="1" type="radio" name="your_social_class" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->your_social_class == '2' ? 'checked' : '' ?> value="2" type="radio" name="your_social_class" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>The part of [COUNTRY] that you live in</td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->the_part_of == '0' ? 'checked' : '' ?> value="0" type="radio" name="the_part_of" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->the_part_of == '1' ? 'checked' : '' ?> value="1" type="radio" name="the_part_of" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->the_part_of == '2' ? 'checked' : '' ?> value="2" type="radio" name="the_part_of" />
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
          <div> <a href="<?= base_url().base64_encode('form06') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 7 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>