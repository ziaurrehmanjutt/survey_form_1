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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">41</strong>
        <div class="d-block overflow-hidden">
          <h6 class="h6 mt-2">Within the last 12 months we carried out the following action</h6>
          <div class="options pt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Yes</th>
                  <th>No</th>
                </tr>
              </thead>
              <tr>
                <td>We formulated a hypothesis about a specific aspect of our business model or product</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->formulated_a_hypothesis == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="formulated_a_hypothesis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->formulated_a_hypothesis == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="formulated_a_hypothesis"  />
                  </div></td>
              </tr>
              <tr>
                <td>We tested a formulated hypothesis in a dedicated experiment</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tested_formulated_hypothesis == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="tested_formulated_hypothesis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tested_formulated_hypothesis == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="tested_formulated_hypothesis"  />
                  </div></td>
              </tr>
              <tr>
                <td>We validated or falsified a hypothesis we experimented with</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->validated_or_falsified_hypothesis == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="validated_or_falsified_hypothesis"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->validated_or_falsified_hypothesis == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="validated_or_falsified_hypothesis"  />
                  </div></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="clearfix"></div>
      </section>
      <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">42</strong>
        <div class="d-block overflow-hidden">
          <h6 class="h6 mt-2">Within the last 12 months we developed one or more of the following artifacts to conduct an experiment</h6>
          <div class="options pt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Yes</th>
                  <th>No</th>
                </tr>
              </thead>
              <tr>
                <td>Explainer Video</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->explainer_video == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="explainer_video"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->explainer_video == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="explainer_video"  />
                  </div></td>
              </tr>
              <tr>
                <td>Landing Page</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->landing_page == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="landing_page"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->landing_page == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="landing_page"  />
                  </div></td>
              </tr>
              <tr>
                <td>Mock-up MVP (Minimum Viable Product)</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->mock_up_mvp == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="mock_up_mvp"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->mock_up_mvp == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="mock_up_mvp"  />
                  </div></td>
              </tr>
              <tr>
                <td>Single-Feature MVP (Minimum Viable Product)</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->single_feature_mvp == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="single_feature_mvp"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->single_feature_mvp == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="single_feature_mvp"  />
                  </div></td>
              </tr>
              <tr>
                <td>Prototype MVP (Minimum Viable Product)</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->prototype_mvp == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="prototype_mvp"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->prototype_mvp == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="prototype_mvp"  />
                  </div></td>
              </tr>
              <tr>
                <td>Wizard of OZ MVP (Minimum Viable Product)</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->wizard_oz_mvp == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="wizard_oz_mvp"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->wizard_oz_mvp == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="wizard_oz_mvp"  />
                  </div></td>
              </tr>
              <tr>
                <td>Others</td>
                <td width="60" colspan="2"><input type="text" class="form-control" placeholder=""  name="others" /></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="clearfix"></div>
      </section>
      <section class="question bg-light border p-3 rounded-lg shadow mt-4"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">43</strong>
        <div class="d-block overflow-hidden">
          <h6 class="h6 mt-2">Within the last 12 months we involved one of the following stakeholders in at least one experiment</h6>
          <div class="options pt-2">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Yes</th>
                  <th>No</th>
                </tr>
              </thead>
              <tr>
                <td>(Potential) Customer</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_customer == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="potential_customer"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_customer == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="potential_customer"  />
                  </div></td>
              </tr>
              <tr>
                <td>(Potential) Supplier</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_supplier == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="potential_supplier"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_supplier == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="potential_supplier"  />
                  </div></td>
              </tr>
              <tr>
                <td>(Potential) Partner</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_partner == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="potential_partner"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_partner == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="potential_partner"  />
                  </div></td>
              </tr>
              <tr>
                <td>(Potential) Investor</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_investor == 'Yes' ? 'checked' : '' ?> class="form-check-input" value="Yes" type="radio" name="potential_investor"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->potential_investor == 'No' ? 'checked' : '' ?> class="form-check-input" value="No" type="radio" name="potential_investor"  />
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
        <div> <a href="<?=base_url().base64_encode('form10')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 11 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
  </form>
</div>
