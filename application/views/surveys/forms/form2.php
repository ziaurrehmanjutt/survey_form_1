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
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">11</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">What is your start-ups stage?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q11_1" class="form-check-input"  <?= $data->your_startups_stage == 'Idea' ? 'checked' : '' ?> type="radio" value="Idea" name="your_startups_stage" />
                <label for="q11_1" class="form-check-label">Idea</label>
              </div>
              <div class="form-check">
                <input id="q11_2" class="form-check-input" <?= $data->your_startups_stage == 'Prototype' ? 'checked' : '' ?> type="radio" value="Prototype" name="your_startups_stage" />
                <label for="q11_2" class="form-check-label">Prototype</label>
              </div>
              <div class="form-check">
                <input id="q11_3" class="form-check-input" <?= $data->your_startups_stage == 'Start-up' ? 'checked' : '' ?> type="radio" value="Start-up" name="your_startups_stage" />
                <label for="q11_3" class="form-check-label">Start-up</label>
              </div>
              <div class="form-check">
                <input id="q11_4" class="form-check-input" <?= $data->your_startups_stage == 'Early Growth' ? 'checked' : '' ?> type="radio" value="Early Growth" name="your_startups_stage" />
                <label for="q11_4" class="form-check-label">Early Growth</label>
              </div>
              <div class="form-check">
                <input id="q11_5" class="form-check-input"  <?= $data->your_startups_stage == 'Expansion' ? 'checked' : '' ?> type="radio" value="Expansion" name="your_startups_stage" />
                <label for="q11_5" class="form-check-label">Expansion</label>
              </div>
              <div class="form-check">
                <input id="q11_6" class="form-check-input" <?= $data->your_startups_stage == 'Maturity' ? 'checked' : '' ?> type="radio" value="Maturity" name="your_startups_stage" />
                <label for="q11_6" class="form-check-label">Maturity</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">12</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year did your team start working on your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="0" name="year_your_team_start_working_on_startup" value="<?= $data->year_your_team_start_working_on_startup ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">13</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year have you founded your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="0" name="year_you_founded_your_startup" value="<?= $data->year_you_founded_your_startup ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">14</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In which year have you registered your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="1900" name="year_you_registered_your_startup" value="<?= $data->year_you_registered_your_startup ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">15</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">To which main sector does your start-up belongs to?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q15_1" class="form-check-input"  <?= $data->which_sector_your_startup_belong == 'Advertising' ? 'checked' : '' ?>  value="Advertising" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_1"  class="form-check-label">Advertising/ Design Marketing </label>
              </div>
              <div class="form-check">
                <input id="q15_2" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Architecture' ? 'checked' : '' ?>  value="Architecture" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_2" class="form-check-label">Architecture/ Engineering</label>
              </div>
              <div class="form-check">
                <input id="q15_3" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Construction' ? 'checked' : '' ?>  value="Construction" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_3" class="form-check-label">Construction</label>
              </div>
              <div class="form-check">
                <input id="q15_4" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Consulting' ? 'checked' : '' ?>  value="Consulting" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_4" class="form-check-label">Consulting (Law, Tax, Management, HR)</label>
              </div>
              <div class="form-check">
                <input id="q15_5" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Education' ? 'checked' : '' ?>  value="Education" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_5" class="form-check-label">Education and Training</label>
              </div>
              <div class="form-check">
                <input id="q15_6" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Financial' ? 'checked' : '' ?>  value="Financial" type="radio" name="which_sector_your_startup_belong" />
                <label  for="q15_6" class="form-check-label">Financial services</label>
              </div>
              <div class="form-check">
                <input id="q15_7" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Human health' ? 'checked' : '' ?>  value="Human health" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_7" class="form-check-label">Human health and social work activities</label>
              </div>
              <div class="form-check">
                <input id="q15_8" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Information technology' ? 'checked' : '' ?>  value="Information technology" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_8" class="form-check-label">Information technology (IT) and communication (incl. software and IT services)</label>
              </div>
              <div class="form-check">
                <input id="q15_9" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Manufacturing' ? 'checked' : '' ?>  value="Manufacturing" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_9" class="form-check-label">Manufacturing</label>
              </div>
              <div class="form-check">
                <input id="q15_10" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Tourism' ? 'checked' : '' ?>  value="Tourism" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_10" class="form-check-label">Tourism and leisure</label>
              </div>
              <div class="form-check">
                <input id="q15_11" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Trade' ? 'checked' : '' ?>  value="Trade" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_11" class="form-check-label">Trade (Retail/ whole sale)</label>
              </div>
              <div class="form-check">
                <input id="q15_12" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Other services' ? 'checked' : '' ?>  value="Other services" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_12" class="form-check-label">Other services  (z.B. Transport)</label>
              </div>
              <div class="form-check">
                <input id="q15_13" class="form-check-input" <?= $data->which_sector_your_startup_belong == 'Other' ? 'checked' : '' ?>  value="Other" type="radio" name="which_sector_your_startup_belong" />
                <label for="q15_13" class="form-check-label">Other</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">16</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many (co-)founders are currently in your venture?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="0" name="cofounders_currently_in_your_venture" value="<?= $data->cofounders_currently_in_your_venture ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">17</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many people are working in your venture in total?</h6>
            <div class="options pt-2">
              <div class="form-group"> 
                <input type="number" min="0" name="people_working_in_your_venture" value="<?= $data->people_working_in_your_venture ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">18</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Does your team receive consulting, mentoring or coaching? </h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q18_1" <?= $data->team_receive_consulting_mentoring_coaching == 'Consulting' ? 'checked' : '' ?>  value="Consulting" class="form-check-input" type="radio" name="team_receive_consulting_mentoring_coaching" />
                <label for="q18_1" class="form-check-label">Consulting</label>
              </div>
              <div class="form-check">
                <input id="q18_1" <?= $data->team_receive_consulting_mentoring_coaching == 'Coaching' ? 'checked' : '' ?>  value="Coaching" class="form-check-input" type="radio" name="team_receive_consulting_mentoring_coaching" />
                <label for="q18_1" class="form-check-label">Coaching</label>
              </div>
              <div class="form-check">
                <input id="q18_1" <?= $data->team_receive_consulting_mentoring_coaching == 'Mentoring' ? 'checked' : '' ?>  value="Mentoring" class="form-check-input" type="radio" name="team_receive_consulting_mentoring_coaching" />
                <label for="q18_1" class="form-check-label">Mentoring</label>
              </div>
              <div class="form-check">
                <input id="q18_1" <?= $data->team_receive_consulting_mentoring_coaching == 'No' ? 'checked' : '' ?>  value="No" class="form-check-input" type="radio" name="team_receive_consulting_mentoring_coaching" />
                <label for="q18_1" class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">19</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Do you have ties to industry partners?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->have_ties_to_industy_partners == 'Yes' ? 'checked' : '' ?>  value="Yes" class="form-check-input" type="radio" name="have_ties_to_industy_partners" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check">
                <input <?= $data->have_ties_to_industy_partners == 'No' ? 'checked' : '' ?>  value="No" class="form-check-input" type="radio" name="have_ties_to_industy_partners" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">20</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Are you sourced from single or multiple funding?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->sourced_from_single_or_multiple_funding == 'Single' ? 'checked' : '' ?>  value="Single" class="form-check-input" type="radio" name="sourced_from_single_or_multiple_funding" />
                <label class="form-check-label">Single funding</label>
              </div>
              <div class="form-check">
                <input <?= $data->sourced_from_single_or_multiple_funding == 'Multiple' ? 'checked' : '' ?>  value="Multiple" class="form-check-input" type="radio" name="sourced_from_single_or_multiple_funding" />
                <label class="form-check-label">Multiple funding</label>
              </div>
              <div class="form-check">
                <input <?= $data->sourced_from_single_or_multiple_funding == 'No' ? 'checked' : '' ?>  value="No" class="form-check-input" type="radio" name="sourced_from_single_or_multiple_funding" />
                <label class="form-check-label">No funding</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">21</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has your team been granted public funds?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->team_been_granted_public_funds == 'Yes' ? 'checked' : '' ?>  value="Yes" class="form-check-input" type="radio" name="team_been_granted_public_funds" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check">
                <input <?= $data->team_been_granted_public_funds == 'No' ? 'checked' : '' ?>  value="No" class="form-check-input" type="radio" name="team_been_granted_public_funds" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">22</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How long did it take your start-up to receive first investments (excluding governmental support funding e.g. EXIST)?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->long_take_startup_receive_first_investment == '1-6 months' ? 'checked' : '' ?>  value="1-6 months" class="form-check-input" type="radio" name="long_take_startup_receive_first_investment" />
                <label class="form-check-label">1-6 months</label>
              </div>
              <div class="form-check">
                <input <?= $data->long_take_startup_receive_first_investment == '7-12 months' ? 'checked' : '' ?>  value="7-12 months" class="form-check-input" type="radio" name="long_take_startup_receive_first_investment" />
                <label class="form-check-label">7-12 months</label>
              </div>
              <div class="form-check">
                <input <?= $data->long_take_startup_receive_first_investment == '13-24 months' ? 'checked' : '' ?>  value="13-24 months" class="form-check-input" type="radio" name="long_take_startup_receive_first_investment" />
                <label class="form-check-label">13-24 months</label>
              </div>
              <div class="form-check">
                <input <?= $data->long_take_startup_receive_first_investment == '25-36 months' ? 'checked' : '' ?>  value="25-36 months" class="form-check-input" type="radio" name="long_take_startup_receive_first_investment" />
                <label class="form-check-label">25-36 months</label>
              </div>
              <div class="form-check">
                <input <?= $data->long_take_startup_receive_first_investment == '37+ months' ? 'checked' : '' ?>  value="37+ months" class="form-check-input" type="radio" name="long_take_startup_receive_first_investment" />
                <label class="form-check-label">37+ months</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">23</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has an investor invested in your start-up so far (excludes public funding)?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->investor_invested_your_startup == 'Yes' ? 'checked' : '' ?>  value="Yes" class="form-check-input" type="radio" name="investor_invested_your_startup" />
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check">
                <input <?= $data->investor_invested_your_startup == 'No' ? 'checked' : '' ?>  value="No" class="form-check-input" type="radio" name="investor_invested_your_startup" />
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">24</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many investors currently invest in your start-up?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="0" name="investors_currently_invest_your_startup" value="<?= $data->investors_currently_invest_your_startup ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">25</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How much is your share of personal equity (optional)?</h6>
            <div class="options pt-2">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">%</div>
                </div>
                <input type="number" min="0" name="share_of_personal_equity" value="<?= $data->share_of_personal_equity ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">26</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How many months passed until your first sale?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="number" min="0" name="month_passed_until_your_first_sale" value="<?= $data->month_passed_until_your_first_sale ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">27</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has an investor invested in your start-up so far (excludes public funding)?</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input <?= $data->investor_invested_in_your_startup == '0' ? 'checked' : '' ?>  value="0" class="form-check-input" type="radio" name="investor_invested_in_your_startup" />
                <label class="form-check-label">0</label>
              </div>
              <div class="form-check">
                <input <?= $data->investor_invested_in_your_startup == '1' ? 'checked' : '' ?>  value="1" class="form-check-input" type="radio" name="investor_invested_in_your_startup" />
                <label class="form-check-label">1</label>
              </div>
              <div class="form-check">
                <input <?= $data->investor_invested_in_your_startup == '3' ? 'checked' : '' ?>  value="3" class="form-check-input" type="radio" name="investor_invested_in_your_startup" />
                <label class="form-check-label">&gt; 3</label>
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
          <div> <a href="<?= base_url().base64_encode('form01') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 2 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>