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
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">49</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">How high was your concentration during the interview</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q11_6" <?= $data->concentration_during_interview == 'Very low' ? 'checked' : '' ?> class="form-check-input" value="Very low" type="radio" name="concentration_during_interview" />
                <label for="q11_6" class="form-check-label">Very low</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->concentration_during_interview == 'Rather low' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather low" name="concentration_during_interview" />
                <label for="q11_6" class="form-check-label">Rather low</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->concentration_during_interview == 'Partially' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Partially" name="concentration_during_interview" />
                <label for="q11_6" class="form-check-label">Partially</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->concentration_during_interview == 'Rather High' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather High" name="concentration_during_interview" />
                <label for="q11_6" class="form-check-label">Rather High</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->concentration_during_interview == 'Very High' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Very High" name="concentration_during_interview" />
                <label for="q11_6" class="form-check-label">Very High</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">50</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">With what degree of honesty did you answer our questions</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q11_6" <?= $data->degree_of_honesty == 'Not honest at all' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Not honest at all" name="degree_of_honesty" />
                <label for="q11_6" class="form-check-label">Not honest at all</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->degree_of_honesty == 'Rather not honest' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather not honest" name="degree_of_honesty" />
                <label for="q11_6" class="form-check-label">Rather not honest</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->degree_of_honesty == 'Partially' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Partially" name="degree_of_honesty" />
                <label for="q11_6" class="form-check-label">Partially</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->degree_of_honesty == 'Rather honest' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather honest" name="degree_of_honesty" />
                <label for="q11_6" class="form-check-label">Rather honest</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->degree_of_honesty == 'Very honest' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Very honest" name="degree_of_honesty" />
                <label for="q11_6" class="form-check-label">Very honest</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>

        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">51</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Wie stark vertrauen Sie unseren Maßnahmen zur Anonymität und zum Persönlichkeitsschutz der Teilnehmenden in dieser Umfrage</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q11_6" <?= $data->personlichkeitsschutz == 'Not at all' ? 'checked' : '' ?> class="form-check-input" value="Not at all" type="radio" name="personlichkeitsschutz" />
                <label for="q11_6" class="form-check-label">Not at all</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->personlichkeitsschutz == 'Rather not' ? 'checked' : '' ?> class="form-check-input" value="Rather not" type="radio" name="personlichkeitsschutz" />
                <label for="q11_6" class="form-check-label">Rather not</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->personlichkeitsschutz == 'Partially' ? 'checked' : '' ?> class="form-check-input" value="Partially" type="radio" name="personlichkeitsschutz" />
                <label for="q11_6" class="form-check-label">Partially</label>

              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->personlichkeitsschutz == 'Rather Strong' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather Strong" name="personlichkeitsschutz" />
                <label for="q11_6" class="form-check-label">Rather Strong</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->personlichkeitsschutz == 'Very Strong' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Very Strong" name="personlichkeitsschutz" />
                <label for="q11_6" class="form-check-label">Very Strong</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>

        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">52</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Denken Sie, dass Sie die besonderen Befragungsmethoden jeweils korrekt befolgt haben</h6>
            <div class="options pt-2">
              <div class="form-check">
                <input id="q11_6" <?= $data->befragungsmethoden == 'Not at all' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Not at all" name="befragungsmethoden" />
                <label for="q11_6" class="form-check-label">Not at all</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->befragungsmethoden == 'Rather not' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather not" name="befragungsmethoden" />
                <label for="q11_6" class="form-check-label">Rather not</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->befragungsmethoden == 'Partially' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Partially" name="befragungsmethoden" />
                <label for="q11_6" class="form-check-label">Partially</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->befragungsmethoden == 'Rather Yes' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Rather Yes" name="befragungsmethoden" />
                <label for="q11_6" class="form-check-label">Rather Yes</label>
              </div>
              <div class="form-check">
                <input id="q11_6" <?= $data->befragungsmethoden == 'Yes definitely' ? 'checked' : '' ?> class="form-check-input" type="radio" value="Yes definitely" name="befragungsmethoden" />
                <label for="q11_6" class="form-check-label">Yes definitely</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">53</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">If you share your team name with us and more than two teammates have filled in the questionnaire, we will send you an analyzed exposé with your results that shows your results in comparison to other start-ups and possible rooms for improvement.</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input type="text" class="form-control" value="<?=$data->possible_rooms_for_improvement?>" name="possible_rooms_for_improvement" />
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
          <div> <a href="<?= base_url().base64_encode('form16') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 17 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" class="btn btn-primary px-3">Complete &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function show(){
    Swal.fire('Good job!',
    'You Completed the form!!!',
    'success')
  }

  <?php  if(isset($complete)){
    echo "show();";
  }  ?>

</script>
