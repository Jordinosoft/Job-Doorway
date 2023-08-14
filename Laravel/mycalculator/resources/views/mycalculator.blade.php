<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>calculator</title>

       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        
    </head>
    <body style="background-color: #D2691E">
        <br><br>
       <div class="container text-center">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="{{ route('calculator') }}" method="POST">
                    @csrf
                <div class="card " style="background-color: #2E8857">
                    <div class="card-body m-auto">
                        <h1 class="text-center text-light">Marthimatical Calculator</h1>

                        <div class="form-group row"></div>
                        <div class="col-md-9">
                            <input type="number" name="firstnumber" class="form-control" placeholder="Enter first number" required="">
                        </div>
                        <br>

                        <div class="form-group row"></div>
                        <div class="col-md-9">
                            <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number" required="">
                        </div>
                        <br>

                        <div class="form-group row"></div>
                        <div class="col-md-9">
                            <select name="operator" class="form-control">
                                <option >----------Select Operator----------</option>
                                <option value="+" class="text-center">+</option>
                                <option value="-" class="text-center">-</option>
                                <option value="*" class="text-center">*</option>
                                <option value="/" class="text-center">/</option>
                                <option value="%" class="text-center">%</option>
                            </select>
                        </div>

                    </div>
                    <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
                </div>
                </form>
            </div>
        </div>
       </div>

       <div class="row">
        
            
        </div>
       </div>
    </body>
</html>
