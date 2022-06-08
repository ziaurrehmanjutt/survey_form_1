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
      <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">38</strong>
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
                <td>I usually feel relaxed and calm.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->feel_relaxed_and_calm == '0' ? 'checked' : '' ?> value="0" type="radio" name="feel_relaxed_and_calm" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->feel_relaxed_and_calm == '1' ? 'checked' : '' ?> value="1" type="radio" name="feel_relaxed_and_calm" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->feel_relaxed_and_calm == '2' ? 'checked' : '' ?> value="2" type="radio" name="feel_relaxed_and_calm" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->feel_relaxed_and_calm == '3' ? 'checked' : '' ?> value="3" type="radio" name="feel_relaxed_and_calm" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->feel_relaxed_and_calm == '4' ? 'checked' : '' ?> value="4" type="radio" name="feel_relaxed_and_calm" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>In unexpected situations I always know how I should act.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->unexpected_situations == '0' ? 'checked' : '' ?> value="0" type="radio" name="unexpected_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->unexpected_situations == '1' ? 'checked' : '' ?> value="1" type="radio" name="unexpected_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->unexpected_situations == '2' ? 'checked' : '' ?> value="2" type="radio" name="unexpected_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->unexpected_situations == '3' ? 'checked' : '' ?> value="3" type="radio" name="unexpected_situations" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->unexpected_situations == '4' ? 'checked' : '' ?> value="4" type="radio" name="unexpected_situations" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>It is not difficult for me to achieve my intentions and goals.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->intentions_and_goals == '0' ? 'checked' : '' ?> value="0" type="radio" name="intentions_and_goals" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->intentions_and_goals == '1' ? 'checked' : '' ?> value="1" type="radio" name="intentions_and_goals" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->intentions_and_goals == '2' ? 'checked' : '' ?> value="2" type="radio" name="intentions_and_goals" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->intentions_and_goals == '3' ? 'checked' : '' ?> value="3" type="radio" name="intentions_and_goals" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->intentions_and_goals == '4' ? 'checked' : '' ?> value="4" type="radio" name="intentions_and_goals" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I am mostly happy.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mostly_happy == '0' ? 'checked' : '' ?> value="0" type="radio" name="mostly_happy" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mostly_happy == '1' ? 'checked' : '' ?> value="1" type="radio" name="mostly_happy" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mostly_happy == '2' ? 'checked' : '' ?> value="2" type="radio" name="mostly_happy" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mostly_happy == '3' ? 'checked' : '' ?> value="3" type="radio" name="mostly_happy" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->mostly_happy == '4' ? 'checked' : '' ?> value="4" type="radio" name="mostly_happy" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>Blows of fate and suffering also have meaning.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->fate_and_suffering == '0' ? 'checked' : '' ?> value="0" type="radio" name="fate_and_suffering" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->fate_and_suffering == '1' ? 'checked' : '' ?> value="1" type="radio" name="fate_and_suffering" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->fate_and_suffering == '2' ? 'checked' : '' ?> value="2" type="radio" name="fate_and_suffering" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->fate_and_suffering == '3' ? 'checked' : '' ?> value="3" type="radio" name="fate_and_suffering" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->fate_and_suffering == '4' ? 'checked' : '' ?> value="4" type="radio" name="fate_and_suffering" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>Even when it often doesn't seem so, life still always has meaning.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_still_always_meaning == '0' ? 'checked' : '' ?> value="0" type="radio" name="life_still_always_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_still_always_meaning == '1' ? 'checked' : '' ?> value="1" type="radio" name="life_still_always_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_still_always_meaning == '2' ? 'checked' : '' ?> value="2" type="radio" name="life_still_always_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_still_always_meaning == '3' ? 'checked' : '' ?> value="3" type="radio" name="life_still_always_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_still_always_meaning == '4' ? 'checked' : '' ?> value="4" type="radio" name="life_still_always_meaning" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>Whatever happens, I will be okay.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->whatever_happens == '0' ? 'checked' : '' ?> value="0" type="radio" name="whatever_happens" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->whatever_happens == '1' ? 'checked' : '' ?> value="1" type="radio" name="whatever_happens" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->whatever_happens == '2' ? 'checked' : '' ?> value="2" type="radio" name="whatever_happens" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->whatever_happens == '3' ? 'checked' : '' ?> value="3" type="radio" name="whatever_happens" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->whatever_happens == '4' ? 'checked' : '' ?> value="4" type="radio" name="whatever_happens" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>If I got an incurable disease, I would rather die.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->incurable_desease == '0' ? 'checked' : '' ?> value="0" type="radio" name="incurable_desease" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->incurable_desease == '1' ? 'checked' : '' ?> value="1" type="radio" name="incurable_desease" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->incurable_desease == '2' ? 'checked' : '' ?> value="2" type="radio" name="incurable_desease" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->incurable_desease == '3' ? 'checked' : '' ?> value="3" type="radio" name="incurable_desease" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->incurable_desease == '4' ? 'checked' : '' ?> value="4" type="radio" name="incurable_desease" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I often feel despondent and depressed.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->despondent_and_depressed == '0' ? 'checked' : '' ?> value="0" type="radio" name="despondent_and_depressed" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->despondent_and_depressed == '1' ? 'checked' : '' ?> value="1" type="radio" name="despondent_and_depressed" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->despondent_and_depressed == '2' ? 'checked' : '' ?> value="2" type="radio" name="despondent_and_depressed" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->despondent_and_depressed == '3' ? 'checked' : '' ?> value="3" type="radio" name="despondent_and_depressed" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->despondent_and_depressed == '4' ? 'checked' : '' ?> value="4" type="radio" name="despondent_and_depressed" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>Life alone has no meaning.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_alone_no_meaning == '0' ? 'checked' : '' ?> value="0" type="radio" name="life_alone_no_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_alone_no_meaning == '1' ? 'checked' : '' ?> value="1" type="radio" name="life_alone_no_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_alone_no_meaning == '2' ? 'checked' : '' ?> value="2" type="radio" name="life_alone_no_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_alone_no_meaning == '3' ? 'checked' : '' ?> value="3" type="radio" name="life_alone_no_meaning" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->life_alone_no_meaning == '4' ? 'checked' : '' ?> value="4" type="radio" name="life_alone_no_meaning" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>In general I have only little self-confidence.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->little_self_confidence == '0' ? 'checked' : '' ?> value="0" type="radio" name="little_self_confidence" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->little_self_confidence == '1' ? 'checked' : '' ?> value="1" type="radio" name="little_self_confidence" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->little_self_confidence == '2' ? 'checked' : '' ?> value="2" type="radio" name="little_self_confidence" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->little_self_confidence == '3' ? 'checked' : '' ?> value="3" type="radio" name="little_self_confidence" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->little_self_confidence == '4' ? 'checked' : '' ?> value="4" type="radio" name="little_self_confidence" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>It is important to me what others think of me.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->important_to_me == '0' ? 'checked' : '' ?> value="0" type="radio" name="important_to_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->important_to_me == '1' ? 'checked' : '' ?> value="1" type="radio" name="important_to_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->important_to_me == '2' ? 'checked' : '' ?> value="2" type="radio" name="important_to_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->important_to_me == '3' ? 'checked' : '' ?> value="3" type="radio" name="important_to_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->important_to_me == '4' ? 'checked' : '' ?> value="4" type="radio" name="important_to_me" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>It is very important to me to make a good impression.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_good_impression == '0' ? 'checked' : '' ?> value="0" type="radio" name="make_good_impression" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_good_impression == '1' ? 'checked' : '' ?> value="1" type="radio" name="make_good_impression" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_good_impression == '2' ? 'checked' : '' ?> value="2" type="radio" name="make_good_impression" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_good_impression == '3' ? 'checked' : '' ?> value="3" type="radio" name="make_good_impression" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->make_good_impression == '4' ? 'checked' : '' ?> value="4" type="radio" name="make_good_impression" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>In general I am aware of only a little of what is going on inside me.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->going_on_inside_me == '0' ? 'checked' : '' ?> value="0" type="radio" name="going_on_inside_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->going_on_inside_me == '1' ? 'checked' : '' ?> value="1" type="radio" name="going_on_inside_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->going_on_inside_me == '2' ? 'checked' : '' ?> value="2" type="radio" name="going_on_inside_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->going_on_inside_me == '3' ? 'checked' : '' ?> value="3" type="radio" name="going_on_inside_me" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->going_on_inside_me == '4' ? 'checked' : '' ?> value="4" type="radio" name="going_on_inside_me" />
                    </div>
                  </td>
              </tr>
              <tr>
                <td>I believe I know myself very exactly.</td>
                <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->myself_very_exactly == '0' ? 'checked' : '' ?> value="0" type="radio" name="myself_very_exactly" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->myself_very_exactly == '1' ? 'checked' : '' ?> value="1" type="radio" name="myself_very_exactly" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->myself_very_exactly == '2' ? 'checked' : '' ?> value="2" type="radio" name="myself_very_exactly" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->myself_very_exactly == '3' ? 'checked' : '' ?> value="3" type="radio" name="myself_very_exactly" />
                    </div>
                  </td>
                  <td width="60">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?= $data->myself_very_exactly == '4' ? 'checked' : '' ?> value="4" type="radio" name="myself_very_exactly" />
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
        <div> <a href="<?=base_url().base64_encode('form07')?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
        <div>
          <p class="mb-1">Page 8 from 17</p>
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