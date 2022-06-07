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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">46</strong>
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
                <td>We analyse different market opportunities and rationally select the most promising one</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->market_opportunities_and_rationally_select == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="market_opportunities_and_rationally_select"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->market_opportunities_and_rationally_select == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="market_opportunities_and_rationally_select"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->market_opportunities_and_rationally_select == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="market_opportunities_and_rationally_select"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->market_opportunities_and_rationally_select == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="market_opportunities_and_rationally_select"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->market_opportunities_and_rationally_select == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="market_opportunities_and_rationally_select"  />
                  </div></td>
              </tr>
              <tr>
                <td>We develop a strategy to best use the ressources and capabilities we have available</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->ressources_and_capabilities_have_available == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="ressources_and_capabilities_have_available"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->ressources_and_capabilities_have_available == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="ressources_and_capabilities_have_available"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->ressources_and_capabilities_have_available == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="ressources_and_capabilities_have_available"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->ressources_and_capabilities_have_available == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="ressources_and_capabilities_have_available"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->ressources_and_capabilities_have_available == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="ressources_and_capabilities_have_available"  />
                  </div></td>
              </tr>
              <tr>
                <td>We implemented clear management systems to control the implementation of our strategy</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->implementation_of_our_strategy == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="implementation_of_our_strategy"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->implementation_of_our_strategy == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="implementation_of_our_strategy"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->implementation_of_our_strategy == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="implementation_of_our_strategy"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->implementation_of_our_strategy == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="implementation_of_our_strategy"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->implementation_of_our_strategy == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="implementation_of_our_strategy"  />
                  </div></td>
              </tr>
              <tr>
                <td>We developed a clear vision and what we want to achieve</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->developed_clear_vision == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="developed_clear_vision"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->developed_clear_vision == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="developed_clear_vision"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->developed_clear_vision == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="developed_clear_vision"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->developed_clear_vision == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="developed_clear_vision"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->developed_clear_vision == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="developed_clear_vision"  />
                  </div></td>
              </tr>
              <tr>
                <td>We make decisions based on revenue and profit maximization</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->revenue_and_profit_maximization == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="revenue_and_profit_maximization"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->revenue_and_profit_maximization == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="revenue_and_profit_maximization"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->revenue_and_profit_maximization == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="revenue_and_profit_maximization"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->revenue_and_profit_maximization == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="revenue_and_profit_maximization"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->revenue_and_profit_maximization == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="revenue_and_profit_maximization"  />
                  </div></td>
              </tr>
              <tr>
                <td>We designed and planned production and marketing efforts</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->production_and_marketing_efforts == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="production_and_marketing_efforts"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->production_and_marketing_efforts == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="production_and_marketing_efforts"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->production_and_marketing_efforts == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="production_and_marketing_efforts"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->production_and_marketing_efforts == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="production_and_marketing_efforts"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->production_and_marketing_efforts == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="production_and_marketing_efforts"  />
                  </div></td>
              </tr>
              <tr>
                <td>We designed and planned business strategies</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->planned_business_strategies == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="planned_business_strategies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->planned_business_strategies == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="planned_business_strategies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->planned_business_strategies == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="planned_business_strategies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->planned_business_strategies == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="planned_business_strategies"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->planned_business_strategies == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="planned_business_strategies"  />
                  </div></td>
              </tr>
              <tr>
                <td>We researched and selected target markets and did meaningful competitive analysis</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->meaningful_competitive_analysis == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="meaningful_competitive_analysis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->meaningful_competitive_analysis == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="meaningful_competitive_analysis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->meaningful_competitive_analysis == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="meaningful_competitive_analysis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->meaningful_competitive_analysis == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="meaningful_competitive_analysis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->meaningful_competitive_analysis == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="meaningful_competitive_analysis"  />
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
        <div> <a href="<?=base_url('survey/form13')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 14 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
</form>
</div>
