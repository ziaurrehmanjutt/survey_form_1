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
        <section class="question bg-light border p-3 rounded-lg shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">28</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Is your team currently part of an accelerator/ incubator or has it been in one in the past?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently1" <?= $data->team_currently_part_of_accelerator_or_incubator == 'Currently' ? 'checked' : '' ?> value="Currently" type="radio" name="team_currently_part_of_accelerator_or_incubator" />
                <label class="form-check-label" for="team_currently1">Currently</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently2" <?= $data->team_currently_part_of_accelerator_or_incubator == 'Past' ? 'checked' : '' ?> value="Past" type="radio" name="team_currently_part_of_accelerator_or_incubator" />
                <label class="form-check-label" for="team_currently2">Past</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently3" <?= $data->team_currently_part_of_accelerator_or_incubator == 'No' ? 'checked' : '' ?> value="No" type="radio" name="team_currently_part_of_accelerator_or_incubator" />
                <label class="form-check-label" for="team_currently3">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> 

          <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">29</strong>
          <table style="clear: both;
    margin-left: 50px;
    width: auto;    width: -webkit-fill-available;" class="table table-striped">
            <tr>
              <!-- <td></td> -->
              <!-- <td>   <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">29</strong></td> -->
              <td>
              <!-- <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">29</strong> -->
                <h6 class="h6 mt-2">In how many incubator programs has your team been part of?</h6>
              </td>
              <td>
                <div class="form-group">
                  <input name="incubator_programs_your_team_been_part" value="<?= $data->incubator_programs_your_team_been_part ?>" type="number" class="form-control" />
                </div>
              </td>
            </tr>

            <tr>
              <!-- <td></td> -->
              <td>
              <!-- <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">30</strong> -->
                <h6 class="h6 mt-2"><h6 class="h6 mt-2">In how many accelerator programs has your team been part of?</h6></h6>
              </td>
              <td>
                <div class="form-group">
                <input name="accelerator_programs_your_team_been_part" value="<?= $data->accelerator_programs_your_team_been_part ?>" type="number" class="form-control" />
                </div>
              </td>
            </tr>

          </table>
          <!-- <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In how many incubator programs has your team been part of?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input name="incubator_programs_your_team_been_part" value="<?= $data->incubator_programs_your_team_been_part ?>" type="number" class="form-control" />
              </div>
            </div>
          </div> -->
          <div class="clearfix"></div>
        </section>
        <!-- <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">30</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">In how many accelerator programs has your team been part of?</h6>
            <div class="options pt-2">
              <div class="form-group">
                <input name="accelerator_programs_your_team_been_part" value="<?= $data->accelerator_programs_your_team_been_part ?>" type="number" class="form-control" />
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section> -->
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">30</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">Has your been part of multiple incubator or accelerator programs at the same time?</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently11" <?= $data->part_of_multiple_incubator_or_accelerator_programs == 'accelerator' ? 'checked' : '' ?> value="accelerator" type="radio" name="part_of_multiple_incubator_or_accelerator_programs" />
                <label class="form-check-label" for="team_currently11">Multiple accelerator programs</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently12" <?= $data->part_of_multiple_incubator_or_accelerator_programs == 'incubator' ? 'checked' : '' ?> value="incubator" type="radio" name="part_of_multiple_incubator_or_accelerator_programs" />
                <label class="form-check-label" for="team_currently12">Multiple incubator programs</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently13" <?= $data->part_of_multiple_incubator_or_accelerator_programs == 'Accelerator and incubator' ? 'checked' : '' ?> value="Accelerator and incubator" type="radio" name="part_of_multiple_incubator_or_accelerator_programs" />
                <label class="form-check-label" for="team_currently13">Accelerator and incubator program</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="team_currently14" <?= $data->part_of_multiple_incubator_or_accelerator_programs == 'No' ? 'checked' : '' ?> value="No" type="radio" name="part_of_multiple_incubator_or_accelerator_programs" />
                <label class="form-check-label" for="team_currently14">No</label>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>
        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong id="ghty1" class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">31</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">What was your main motivation to take part in this/these program(s)?</h6>
            <div class="options pt-2">
              <div class="form-group"> <span><small class="btn btn-success px-2 py-0 btn-sm mr-2">1</small> Very motivating</span> <span><small class="btn btn-danger px-2 py-0 btn-sm mx-2">4</small> Less motivating</span>
                <div class="clearfix"></div>

                <style>
                  .nmi {
                    height: 30px;
                    width: 30px;
                    text-align: center;
                    margin-top: 22px !important;
                  }
                </style>
                <div style="display: flex;">
                  <div>
                    <span class="bg-success nmi rounded-sm text-white float-left mt-2 ">1</span>
                    <br>
                    <br>

                    <span style="margin-top: 27px !important;" class="bg-info nmi rounded-sm text-white float-left mt-2 ">2</span>
                    <br>
                    <br>
                    <span style="margin-top: 27px !important;" class="bg-warning nmi rounded-sm text-white float-left mt-2 ">3</span>
                    <br>
                    <br>
                    <span style="margin-top: 27px !important;" class="bg-danger nmi rounded-sm text-white float-left mt-2 mr-3">4</span>
                  </div>
                  <div>


                    <div id="sort-it" class="w-100">
                      <ol>
                        <?php foreach ($sort_array as $key => $value) {  ?>
                          <li class="mt-3 mw-100" id="<?= $value['id'] ?>">

                            <div class="sort-in d-block overflow-hidden">
                              <i class="fa fa-sort ml-2"></i>
                              <p class="d-inline-block mb-1"><?= $value['title'] ?></p>
                              <div class="clearfix"></div>

                              <input type="hidden" id="i<?= $value['id'] ?>" name="<?= $value['name'] ?>" />
                            </div>
                          </li>
                        <?php } ?>

                      </ol>



                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </section>

        <section class="question bg-light border p-3 rounded-lg mt-4 shadow"> <strong class="float-left bg-primary q-number text-center text-white rounded-circle mr-3">32</strong>
          <div class="d-block overflow-hidden">
            <h6 class="h6 mt-2">I believe that being part of these programs helped us to reach our goals quicker.</h6>
            <div class="options pt-2">
              <div class="form-check form-check-inline">
                <input <?= $data->programs_helped_reach_goals_quicker == '1' ? 'checked' : '' ?> value="1" class="form-check-input" type="radio" name="programs_helped_reach_goals_quicker" />
                <label class="form-check-label">doesn't apply at all</label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $data->programs_helped_reach_goals_quicker == '2' ? 'checked' : '' ?> value="2" class="form-check-input" type="radio" name="programs_helped_reach_goals_quicker" />
                <label class="form-check-label"></label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $data->programs_helped_reach_goals_quicker == '3' ? 'checked' : '' ?> value="3" class="form-check-input" type="radio" name="programs_helped_reach_goals_quicker" />
                <label class="form-check-label"></label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $data->programs_helped_reach_goals_quicker == '4' ? 'checked' : '' ?> value="4" class="form-check-input" type="radio" name="programs_helped_reach_goals_quicker" />
                <label class="form-check-label"></label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $data->programs_helped_reach_goals_quicker == '5' ? 'checked' : '' ?> value="5" class="form-check-input" type="radio" name="programs_helped_reach_goals_quicker" />
                <label class="form-check-label">applies completely</label>
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
          <div> <a href="<?= base_url().base64_encode('form02') ?>" class="btn btn-primary px-3"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 3 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button name="submitData" type="submit" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>


        </div>
      </div>
    </section>
  </form>
</div>