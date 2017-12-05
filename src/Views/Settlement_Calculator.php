<div class="settlement-calculator-wrapper">

  <form>

    <div class="calculator-form">
      <div class="row header">
        <div class="col-md-12 text-center">
          <h1>Injury Settlement Calculator</h1>
          <i class="fa fa-calculator pull-left fa-3x"></i>
          <p>Find out what a reasonable settlement payment for a car accident, slip and fall, or other type of personal injury case. </p>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <label for="medicalExpenses">Medical Expenses   </label>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="medicalExpenses" placeholder="$">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <label for="propertyDamages">Property Damages</label>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="propertyDamages" placeholder="$">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <label for="lostEarnings">Lost Earnings</label>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="lostEarnings" placeholder="$">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <label for="futureMedical">Estimated Future Medical Expenses</label>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="futureMedical" placeholder="$">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <label for="damagesMultiplier">Multiplier For Damages (1-5)</label>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">

            <input type="number" class="form-control pull-right" style="width: 25%;" id="damagesMultiplier" placeholder="">
          </div>
        </div>
      </div>



      <div class="row calculate-controls">
            <button class="btn btn-large btn-primary btn-block calculate">Calculate</button>
      </div>
      <div class="row text-center">
            Powered by <a href=“https://lawsuitinfocenter.com/auto-accident-settlement-calculator/” rel=“nofollow” >Lawsuit InfoCenter</a>
      </div>


    </div>

    <div class="calculator-results">

      <div class="row settlement-estimate ">
        <div class="col-md-12 top text-center">
          <h2>Settlement Estimate</h2>
          <p>This is not legal advice. This tool provides a very rough estimate for informational purposes only. All personal injury settlements are different based on individual facts of each case. For an accurate idea of what your claim may be worth, please contact us for a free legal consultation. Book your free consultation now by calling the number or clicking the button below your estimate. </p>
          <p id="settlementEstimate" ></p>
        </div>

        <div class="col-md-6 text-center" >
          <a href="tel:<?php echo $options['settcalc_field_phonenumber']; ?>">
            <div class="button call-attorney">
              <h3>Speak To An Attorney Now</h3>
              <span><?php echo $options['settcalc_field_phonelabel']; ?></span>
            </div>
          </a>
        </div>


        <div class="col-md-6 text-center">
          <a href="<?php echo site_url() . '/' . $options['settcalc_field_contact']; ?>">
            <div class="button request-call">
                <h3>Have An Attorney Call You</h3>
            </div>
          </a>
        </div>
      </div>


      <div class="row footer">

        <div class="col-md-12 text-center">
          <h3>About The Calculation</h3>
          <h4>Damages and The Multiplier</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>





      </div>
    </div>












  </form>

</div>
