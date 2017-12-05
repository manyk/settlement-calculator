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
        <div class="col-sm-12 col-md-8 text-xs-center">
          <label for="medicalExpenses">Medical Expenses  <a href="#" data-toggle="tooltip" data-trigger="hover focus" title="Medical bills and expenses. "><span class="question-circle"  aria-hidden="true">?</span></a> </label>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">

            <input type="number" class="form-control" id="medicalExpenses" placeholder="$">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-8 text-xs-center">
          <label for="propertyDamages">Property Damages <a href="#" data-toggle="tooltip" title="Primarily used for auto injuries. Leave empty for personal injury.  "><span class="question-circle"  aria-hidden="true">?</span></i></a></label>
        </div>
        <div class="col-sm-12 col-md-4 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="propertyDamages" placeholder="$">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-8 text-xs-center">
          <label for="lostEarnings">Lost Earnings <a href="#" data-toggle="tooltip" title="Lost income, wages or benefits like PTO.  "><span class="question-circle"  aria-hidden="true">?</span></i></a></label>
        </div>
        <div class="col-sm-12 col-md-4 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="lostEarnings" placeholder="$">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-8 text-xs-center">
          <label for="futureMedical">Estimated Future Medical Expenses <a href="#" data-toggle="tooltip" title="Future and ongoing medical treatments.  "><span class="question-circle"  aria-hidden="true">?</span></i></a></label>
        </div>
        <div class="col-sm-12 col-md-4 text-right">
          <div class="form-group">

            <input type="number" class="form-control" id="futureMedical" placeholder="$">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-8 text-xs-center">
          <label for="damagesMultiplier">Multiplier For Damages (1-5) <a href="#" data-toggle="tooltip" title="The more serious, long-lasting, and painful the injuries, the higher the multiplier. (Number 1-5)  "><span class="question-circle"  aria-hidden="true">?</span></i></a></label>
        </div>
        <div class="col-sm-12 col-md-4 text-right">
          <div class="form-group">

            <input type="number" class="form-control pull-right" style="margin: 5px;width: 30%;" id="damagesMultiplier" placeholder="1-5">
          </div>
        </div>
      </div>



      <div class="row calculate-controls">
            <button class="btn btn-large btn-primary btn-block calculate">Calculate</button>
      </div>
      <div class="row text-center">
            Powered by <a href='https://lawsuitinfocenter.com/auto-accident-settlement-calculator/' rel=“nofollow” >Lawsuit Info Center</a>
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

          <p>
            <i>Your settlement estimate was calculated with the following formula:<br />
              <strong>Current Medical Bills + Expected Ongoing Medical Treatment x Pain & Suffering Multiplier = Medical and General Damages.</strong><br />
              <strong>Medical & General Damage Number + Loss of Income + Property Damage = Your Estimate.</strong><br />
              Again, this is a very rough estimate based on values you enter. For more accurate estimates, and a free consultation please call the number above, or click the button to have an attorney call you.
            </i>
          </p>
        </div>





      </div>
    </div>












  </form>

</div>
