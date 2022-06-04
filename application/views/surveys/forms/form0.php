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
  <?php if(isset($_SESSION['form_id']) && $_SESSION['form_id']): ?>
    <div class="alert alert-warning">
        You are already continue on a previous form! <a href="<?= base_url('survey/form1') ?>">Click Here</a> to continue on that
    </div>
  <?php  endif  ?>
  <form id="form1" method="POST">
    <div role="main" class="main py-5">
      <div class="container" id="part-one">
        <section class="question bg-light border p-3 rounded-lg shadow">
          <div class="d-block overflow-hidden">
            <div class="options pt-2">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />
                <br />
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <div class="form-check">
                <input class="form-check-input mt-1" required type="checkbox" value="accepted" id="flexCheckDefault" />
                <label class="form-check-label mt-0" for="flexCheckDefault">Agree Terms &amp; Conditions</label>
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
          <div> <a href="survey0.html" class="btn btn-primary px-3 disabled"><i class="fa fa-angle-left"></i> &nbsp; Previous</a> </div>
          <div>
            <p class="mb-1">Page 0 from 17</p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div> <button type="submit" name="submitData" class="btn btn-primary px-3">Next &nbsp; <i class="fa fa-angle-right"></i></button> </div>
        </div>
      </div>
    </section>
  </form>
</div>