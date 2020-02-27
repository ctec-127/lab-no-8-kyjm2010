<div class="jumbotron">
    <h1 class="display-3">Temperature Converter</h1>
    <p class="lead">CTEC 127 - PHP with SQL 1</p>
    <hr class="my-2">
    <p>Use at your own risk!</p>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6"> 
        <label for="originalunit">Original Unit</label>  
            <select name="originalunit" class="form-control mb-3">
                <option value="--Select--">--Select--</option>
                <option value="celsius"<?php if(isset($originalUnit) && ($originalUnit == 'celsius')) echo 'selected';?>>Celsius</option>
                <option value="fahrenheit"<?php if(isset($originalUnit) && ($originalUnit == 'fahrenheit')) echo 'selected';?>>Farenheit</option>
                <option value="kelvin"<?php if(isset($originalUnit) && ($originalUnit == 'kelvin')) echo 'selected';?>>Kelvin</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <label for="temp">Temperature</label>
            <input type="text" class="form-control mb-3" value="<?php if (isset($_POST['originaltemp'])) {
                echo $_POST['originaltemp'];
            }
            ?>" name="originaltemp" size="14" maxlength="7" id="temp">
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <label for="conversionunit">Conversion Unit</label> 
        <select name="conversionunit" class="form-control mb-2">
            <option value="--Select--">--Select--</option>
            <option value="celsius"<?php if(isset($conversionUnit) && ($conversionUnit == 'celsius')) echo 'selected="selected"';?>>Celsius</option>
            <option value="fahrenheit"<?php if(isset($conversionUnit) && ($conversionUnit == 'fahrenheit')) echo 'selected="selected"';?>>Farenheit</option>
            <option value="kelvin"<?php if(isset($conversionUnit) && ($conversionUnit == 'kelvin')) echo 'selected="selected"';?>>Kelvin</option>
        </select>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-6">
            <label for="convertedtemp">Converted Temperature</label>
            <input type="text" class="form-control mb-2" value='<?php if(isset($convertedTemp)) echo $convertedTemp;?>'
            name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>
        </div> 
    </div>
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-secondary mb-2 mt-2">Convert</button>
        </div>
    </div>
</form>
</div>