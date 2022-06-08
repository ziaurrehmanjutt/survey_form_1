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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">40</strong>
        <div class="d-block overflow-hidden">
          <h6 class="h6 mt-2">&nbsp;</h6>
          <div class="options pt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
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
                <td>It is exciting to figure out new ways to solve unmet market needs that can be commercialized.</td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solve_unmet_market_needs == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="solve_unmet_market_needs"  />
                  </div></td>
              </tr>
              <tr>
                <td>Searching for new ideas for products/services to offer is enjoyable to me.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="new_ideas_for_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="new_ideas_for_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="new_ideas_for_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="new_ideas_for_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="new_ideas_for_products"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="new_ideas_for_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->new_ideas_for_products == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="new_ideas_for_products"  />
                  </div></td>
              </tr>
              <tr>
                <td>I am motivated to figure out how to make existing products/services better.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="make_existing_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="make_existing_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="make_existing_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="make_existing_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="make_existing_products"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="make_existing_products"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->make_existing_products == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="make_existing_products"  />
                  </div></td>
              </tr>
              <tr>
                <td>Scanning the environment for new opportunities really excites me.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->environment_for_new_opportunities == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="environment_for_new_opportunities"  />
                  </div></td>
              </tr>
              <tr>
                <td>Inventing new solutions to problems is an important part of who I am.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->solutions_to_problems_important == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="solutions_to_problems_important"  />
                  </div></td>
              </tr>
              <tr>
                <td>Establishing a new company excites me.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="establishing_new_company"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="establishing_new_company"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="establishing_new_company"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="establishing_new_company"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="establishing_new_company"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="establishing_new_company"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->establishing_new_company == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="establishing_new_company"  />
                  </div></td>
              </tr>
              <tr>
                <td>Owning my own company energizes me.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="own_company_energizes"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="own_company_energizes"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="own_company_energizes"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="own_company_energizes"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="own_company_energizes"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="own_company_energizes"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->own_company_energizes == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="own_company_energizes"  />
                  </div></td>
              </tr>
              <tr>
                <td>Nurturing a new business through its emerging success is enjoyable.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->emerging_success_is_enjoyable == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="emerging_success_is_enjoyable"  />
                  </div></td>
              </tr>
              <tr>
                <td>Being the founder of a business is an important part of who I am.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="business_is_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="business_is_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="business_is_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="business_is_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="business_is_important"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="business_is_important"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->business_is_important == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="business_is_important"  />
                  </div></td>
              </tr>
              <tr>
                <td>Assembling the right people to work for my business is exciting.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->assembling_right_people_to_work == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="assembling_right_people_to_work"  />
                  </div></td>
              </tr>
              <tr>
                <td>Pushing my employees and myself to make our company better motivates me.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="company_better_motivates_me"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="company_better_motivates_me"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="company_better_motivates_me"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="company_better_motivates_me"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="company_better_motivates_me"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="company_better_motivates_me"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->company_better_motivates_me == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="company_better_motivates_me"  />
                  </div></td>
              </tr>
              <tr>
                <td>Nurturing and growing companies is an important part of who I am.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
								<td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '5' ? 'checked' : '' ?> class="form-check-input" value="5" type="radio" name="nurturing_growing_companies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->nurturing_growing_companies == '6' ? 'checked' : '' ?> class="form-check-input" value="6" type="radio" name="nurturing_growing_companies"  />
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
        <div> <a href="<?=base_url().base64_encode('form09')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 10 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
</form>
</div>
