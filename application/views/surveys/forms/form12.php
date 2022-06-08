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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">44</strong>
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
                <td>We conduct A/B tests to improve our website?</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_website == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="tests_to_improve_website"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_website == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="tests_to_improve_website"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_website == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="tests_to_improve_website"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_website == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="tests_to_improve_website"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_website == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="tests_to_improve_website"  />
                  </div></td>
              </tr>
              <tr>
                <td>We conduct A/B tests to improve our product?</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_product == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="tests_to_improve_product"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_product == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="tests_to_improve_product"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_product == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="tests_to_improve_product"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_product == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="tests_to_improve_product"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->tests_to_improve_product == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="tests_to_improve_product"  />
                  </div></td>
              </tr>
              <tr>
                <td>We adapt our course of action based on the results we obtain from experiments?</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->results_obtain_from_experiments == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="results_obtain_from_experiments"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->results_obtain_from_experiments == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="results_obtain_from_experiments"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->results_obtain_from_experiments == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="results_obtain_from_experiments"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->results_obtain_from_experiments == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="results_obtain_from_experiments"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->results_obtain_from_experiments == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="results_obtain_from_experiments"  />
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
        <div> <a href="<?=base_url().base64_encode('form11')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 12 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
  </form>
</div>
