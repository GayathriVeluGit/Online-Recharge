<html>
  <link rel="stylesheet" href="src/creditly.css">
  <link rel="stylesheet" href="teaser.css">
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="src/creditly.js"></script>
  <script type="text/javascript">
    $(function() {
      // For the gray theme
      var grayThemeCreditly = Creditly.initialize(
          '.creditly-wrapper.gray-theme .expiration-month-and-year',
          '.creditly-wrapper.gray-theme .credit-card-number',
          '.creditly-wrapper.gray-theme .security-code',
          '.creditly-wrapper.gray-theme .card-type');

      $(".creditly-gray-theme-submit").click(function(e) {
        e.preventDefault();
        var output = grayThemeCreditly.validate();
        if (output) {
          // Your validated credit card output
          console.log(output);
        }
      });

      // For the blue theme
      var blueThemeCreditly = Creditly.initialize(
          '.creditly-wrapper.blue-theme .expiration-month-and-year',
          '.creditly-wrapper.blue-theme .credit-card-number',
          '.creditly-wrapper.blue-theme .security-code',
          '.creditly-wrapper.blue-theme .card-type');

      $(".creditly-blue-theme-submit").click(function(e) {
        e.preventDefault();
        var output = blueThemeCreditly.validate();
        if (output) {
          // Your validated credit card output
          console.log(output);
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      var switchThemes = function(e) {
        $(".theme-navigation .nav").find("li").removeClass("active");
        $(e.currentTarget).closest("li").addClass("active");
        var target = $(e.currentTarget).attr("data-target");
        $(".top-level-wrapper").hide();
        $("." + target).show();
      };

      $(".blue-theme-switch").click(switchThemes);
      $(".gray-theme-switch").click(switchThemes);
    });
  </script>
</html>
<body>
  <div class="banner">
    <div class="row">
      <div class="header">
        
        
        <div class="theme-navigation">
          <ul class="nav nav-pills">
            <li class="active"><a class="blue-theme-switch" data-target="blue-theme-wrapper" href="#">Blue Theme</a></li>
            <li><a class="gray-theme-switch" data-target="gray-theme-wrapper" href="#">Gray Theme</a></li>
          </ul>
        </div>
      </div>
      <form class="creditly-card-form">
        <div class="top-level-wrapper gray-theme-wrapper" style="display:none;">
          <section class="creditly-wrapper gray-theme">
            <h3>Credit Card</h3>
            <i>
              <div class="card-type" style="text-align:right;margin-top:10px;margin-right:10px;min-height:20px;margin-bottom:-15px"></div>
            </i>
            <div class="credit-card-wrapper">
              <div class="first-row form-group">
                <div class="col-sm-8 controls">
                  <label class="control-label">Card Number</label>
                  <input class="number credit-card-number form-control"
                    type="text" name="number"
                    pattern="(\d*\s){3}\d*"
                    inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                    placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                </div>
                <div class="col-sm-4 controls">
                  <label class="control-label">CVV</label>
                  <input class="security-code form-control"·
                    inputmode="numeric"
                    pattern="\d*"
                    type="text" name="security-code"
                    placeholder="&#149;&#149;&#149;">
                </div>
              </div>
              <div class="second-row form-group">
                <div class="col-sm-8 controls">
                  <label class="control-label">Name on Card</label>
                  <input class="billing-address-name form-control"
                    type="text" name="name"
                    placeholder="John Smith">
                </div>
                <div class="col-sm-4 controls">
                  <label class="control-label">Expiration</label>
                  <input class="expiration-month-and-year form-control"
                    type="text" name="expiration-month-and-year"
                    placeholder="MM / YY">
                </div>
              </div>
            </div>
          </section>
          <button class="creditly-gray-theme-submit"><span>Submit</span></button>
        </div>
        <div class="top-level-wrapper blue-theme-wrapper">
          <section class="creditly-wrapper blue-theme">
            <div class="credit-card-wrapper">
              <div class="first-row form-group">
                <div class="col-sm-8 controls">
                  <label class="control-label">Card Number</label>
                  <input class="number credit-card-number form-control"
                    type="text" name="number"
                    pattern="(\d*\s){3}\d*"
                    inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
                    placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                </div>
                <div class="col-sm-4 controls">
                  <label class="control-label">CVV</label>
                  <input class="security-code form-control"·
                    inputmode="numeric"
                    pattern="\d*"
                    type="text" name="security-code"
                    placeholder="&#149;&#149;&#149;">
                </div>
              </div>
              <div class="second-row form-group">
                <div class="col-sm-8 controls">
                  <label class="control-label">Name on Card</label>
                  <input class="billing-address-name form-control"
                    type="text" name="name"
                    placeholder="John Smith">
                </div>
                <div class="col-sm-4 controls">
                  <label class="control-label">Expiration</label>
                  <input class="expiration-month-and-year form-control"
                    type="text" name="expiration-month-and-year"
                    placeholder="MM / YY">
                </div>
              </div>
              <div class="card-type"></div>
            </div>
          </section>
          <button class="creditly-blue-theme-submit" type="submit"><span>Submit</span></button>
        </div>
      </form>
    </div>
    <div class="footer">
      Powered by <a href="http://zinc.io">Zinc</a>
    </div>
  </div>
</body>
