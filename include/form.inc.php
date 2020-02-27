<div class="jumbotron">
    <img class="mainimg" src="images/temp.png" alt="thermometer"> 
    <h1 class="display-3">Temperature Converter</h1>
    <p class="lead">CTEC 127 - PHP with SQL 1</p>
    <hr class="my-2">
    <p>Use at your own risk!</p>
</div>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6"> 
        <label for="origunit" class="col-6 col-form-label">Original Unit</label>  
            <select name="originalunit" id="origunit" class="form-control mb-3">
                <option value="--Select--">--Select--</option>
                <option value="celsius"<?php if(isset($originalUnit) && ($originalUnit == 'celsius')) echo 'selected';?>>Celsius</option>
                <option value="fahrenheit"<?php if(isset($originalUnit) && ($originalUnit == 'fahrenheit')) echo 'selected';?>>Farenheit</option>
                <option value="kelvin"<?php if(isset($originalUnit) && ($originalUnit == 'kelvin')) echo 'selected';?>>Kelvin</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <label for="temp" class="col-6 col-form-label">Original Temp</label>
            <input type="text" class="form-control mb-3" value="<?php if (isset($_POST['originaltemp'])) {
                echo $_POST['originaltemp'];
            }
            ?>" name="originaltemp" size="14" maxlength="7" id="temp">
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <label for="convertunit" class="col-6 col-form-label">Conversion Unit</label> 
        <select name="conversionunit" id="convertunit" class="form-control mb-2">
            <option value="--Select--">--Select--</option>
            <option value="celsius"<?php if(isset($conversionUnit) && ($conversionUnit == 'celsius')) echo 'selected="selected"';?>>Celsius</option>
            <option value="fahrenheit"<?php if(isset($conversionUnit) && ($conversionUnit == 'fahrenheit')) echo 'selected="selected"';?>>Farenheit</option>
            <option value="kelvin"<?php if(isset($conversionUnit) && ($conversionUnit == 'kelvin')) echo 'selected="selected"';?>>Kelvin</option>
        </select>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-6">
            <label for="convertedtemp" class="col-6 col-form-label">Converted Temp</label>
            <input type="text" class="form-control mb-2" value='<?php if(isset($convertedTemp)) echo $convertedTemp;?>'
            name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>
        </div> 
    </div>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-secondary mb-2 mt-2">Convert</button>
        </div>
    </div>
</form>
<div id="info">
    <div class="row mb-3">
        <div class="accordion col-6">
                <!-- <div class="col-6"> -->
                <h1>Formulas</h1>
                <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            For Celsius
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        Celsius to Fahrenheit = T(°C) × 9/5 + 32<br>
                        Celsius to Kelvin = T(°C) + 273.15<br>
                    </p>
                </div>
                </div>
                </div>
    
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            For Fahrenheit
                        </button>
                    </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                        Fahrenheit to Celsius = (T(°F) - 32) × 5/9<br>
                        Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9<br>
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        For Kelvin
                        </button>
                    </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                        Kelvin to Fahrenheit = T(K) × 9/5 - 459.67<br>
                        Kelvin to Celsius = T(K) - 273.15<br>
                        </p>
                    </div>
                    </div>
                </div>
        </div>
        <div class="accordion col-6">
                <!-- <div class="col-6"> -->
                <h1>Information</h1>
                <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            For Celsius
                        </button>
                    </h5>
                </div>

                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <p>
                    The Celsius scale, also known as the centigrade scale, is a temperature scale. As an SI derived unit, it is used worldwide. In the United States, the Bahamas, Belize, the Cayman Islands and Liberia, Fahrenheit remains the preferred scale for everyday temperature measurement.
                    </p>
                </div>
                </div>
                </div>
    
                <div class="card">
                    <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            For Fahrenheit
                        </button>
                    </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                        The Fahrenheit scale is a temperature scale based on one proposed in 1724 by German physicist Daniel Gabriel Fahrenheit. It uses the degree Fahrenheit as the unit. Several accounts of how he originally defined his scale exist.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        For Kelvin
                        </button>
                    </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                        The kelvin is the base unit of temperature in the International System of Units, having the unit symbol K. It is named after the Belfast-born, Glasgow University engineer and physicist William Thomson, 1st Baron Kelvin.
                        </p>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>
