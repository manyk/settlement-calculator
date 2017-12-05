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
          <p>Medical Bills and Expenses</p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">
            <label for="medicalExpenses">Medical Expenses   <i class="fa fa-dollar"></i></label>
            <input type="number" class="form-control" id="medicalExpenses" placeholder="">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <p>Primarily used for auto injuries. Leave empty for personal injury. </p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">
            <label for="propertyDamages">Property Damages   <i class="fa fa-dollar"></i></label>
            <input type="number" class="form-control" id="propertyDamages" placeholder="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <p>Lost income, wages or benefits like PTO. </p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">
            <label for="lostEarnings">Lost Earnings   <i class="fa fa-dollar"></i></label>
            <input type="number" class="form-control" id="lostEarnings" placeholder=" ">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <p>Future and ongoing medical treatments. </p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">
            <label for="futureMedical">Estimated Future Medical Expenses   <i class="fa fa-dollar"></i></label>
            <input type="number" class="form-control" id="futureMedical" placeholder=" ">
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12 col-md-6 text-xs-center">
          <p>The more serious, long-lasting, and painful the injuries, the higher the multiplier. (Number 1-5) </p>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
          <div class="form-group">
            <label for="damagesMultiplier">Multiplier For Damages (1-5)</label>
            <input type="number" class="form-control pull-right" style="width: 25%;" id="damagesMultiplier" placeholder=" ">
          </div>
        </div>
      </div>



      <div class="row calculate-controls">
            <button class="btn btn-large btn-primary btn-block calculate">Calculate</button>
      </div>
    </div>

    <div class="calculator-results">
      <div class="row settlement-estimate ">
        <div class="col-md-12 top text-center">
          <h2>Settlement Estimate</h2>
          <p>This tool is not legal advice. This tool provides potential estimates and does not guarantee payment. </p>
          <input type="number" class="form-control" id="settlementEstimate" placeholder=" " disabled>
        </div>
        <div class="col-md-12 bottom text-left">


          <div class="col-sm-12 col-md-6 text-xs-center">
            <p>Total personal and property damages.  </p>
          </div>
          <div class="col-sm-12 col-md-6 text-right">
            <div class="form-group">
              <label for="economicDamages">Economic Damages</label>
              <input type="number" class="form-control pull-right" id="economicDamages" placeholder=" ">
            </div>
          </div>

          <div class="col-sm-12 col-md-6 text-xs-center">
            <p>Estimate payout for pain and suffering.  </p>
          </div>
          <div class="col-sm-12 col-md-6 text-right">
            <div class="form-group">
              <label for="personalDamages">Personal Damages</label>
              <input type="number" class="form-control pull-right" id="personalDamages" placeholder=" ">
            </div>
          </div>

        </div>
      </div>


      <div class="row footer">

        <div class="col-md-12">
          <h3>Additional Information About The Calculation</h3>
          <h4>Damages and The Multiplier</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>

        <div class="col-md-6 text-center" >
          <div class="button call-attorney">
            <h3>Speak To An Attorney Now</h3>
            <a href="tel:<?php echo $options['settcalc_field_phonenumber']; ?>"><?php echo $options['settcalc_field_phonelabel']; ?></a>
          </div>
        </div>

        <div class="col-md-6 text-center">
          <a href="<?php echo site_url() . '/' . $options['settcalc_field_contact']; ?>">
            <div class="button request-call">
              <h2>Have An Attorney Call You</h2>
            </div>
          </a>
        </div>



      </div>
    </div>












  </form>

</div>
