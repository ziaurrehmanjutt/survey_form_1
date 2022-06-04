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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">49</strong>
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
                <td>In an argument, I always remain objective and stick to the facts.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->remain_objective_and_stick == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="remain_objective_and_stick"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->remain_objective_and_stick == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="remain_objective_and_stick"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->remain_objective_and_stick == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="remain_objective_and_stick"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->remain_objective_and_stick == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="remain_objective_and_stick"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->remain_objective_and_stick == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="remain_objective_and_stick"  />
                  </div></td>
              </tr>
              <tr>
                <td>Even if I am feeling stressed, I am always friendly and polite to others.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->friendly_and_polite == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="friendly_and_polite"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->friendly_and_polite == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="friendly_and_polite"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->friendly_and_polite == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="friendly_and_polite"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->friendly_and_polite == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="friendly_and_polite"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->friendly_and_polite == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="friendly_and_polite"  />
                  </div></td>
              </tr>
              <tr>
                <td>When talking to someone, I always listen carefully to what the other person says.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->always_listen_carefully == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="always_listen_carefully"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->always_listen_carefully == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="always_listen_carefully"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->always_listen_carefully == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="always_listen_carefully"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->always_listen_carefully == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="always_listen_carefully"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->always_listen_carefully == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="always_listen_carefully"  />
                  </div></td>
              </tr>
              <tr>
                <td>It has happened that I have taken advantage of someone in the past.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->advantage_of_someone == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="advantage_of_someone"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->advantage_of_someone == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="advantage_of_someone"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->advantage_of_someone == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="advantage_of_someone"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->advantage_of_someone == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="advantage_of_someone"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->advantage_of_someone == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="advantage_of_someone"  />
                  </div></td>
              </tr>
              <tr>
                <td>I have occasionally thrown litter away in the countryside or on to the road.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->occasionally_thrown_litter == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="occasionally_thrown_litter"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->occasionally_thrown_litter == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="occasionally_thrown_litter"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->occasionally_thrown_litter == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="occasionally_thrown_litter"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->occasionally_thrown_litter == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="occasionally_thrown_litter"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->occasionally_thrown_litter == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="occasionally_thrown_litter"  />
                  </div></td>
              </tr>
              <tr>
                <td>Sometimes I only help people if I expect to get something in return.</td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->expect_to_get_something == '0' ? 'checked' : '' ?> class="form-check-input" value="0" type="radio" name="expect_to_get_something"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->expect_to_get_something == '1' ? 'checked' : '' ?> class="form-check-input" value="1" type="radio" name="expect_to_get_something"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->expect_to_get_something == '2' ? 'checked' : '' ?> class="form-check-input" value="2" type="radio" name="expect_to_get_something"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->expect_to_get_something == '3' ? 'checked' : '' ?> class="form-check-input" value="3" type="radio" name="expect_to_get_something"  />
                  </div></td>
                <td width="60"><div class="form-check form-check-inline">
              			<input <?= $data->expect_to_get_something == '4' ? 'checked' : '' ?> class="form-check-input" value="4" type="radio" name="expect_to_get_something"  />
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
        <div> <a href="<?=base_url('survey/form15')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 16 from 17</p>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div> <button  name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
      </div>
    </div>
  </section>
  </form>
</div>
