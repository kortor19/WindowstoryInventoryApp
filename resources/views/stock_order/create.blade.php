
@extends('layouts.headerless')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- /<title>Document</title> -->
    
     <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
</head>
<body> 
                <div class="logo">
                    <!-- <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Responsive image"> -->
                     <h3 class="card-title frm-title">{{ __('Create Stock Order') }}</h3>
                </div>              

                <div class="container">
                <br>
                    <form method="POST" action="{{ route('stock_order.store') }}">
                        @csrf

                        <section>
                        <div class = "panel panel-header">
                        <div class="row">
                        <div class="col-md-6">
                            <div class = "form-group">
                            <input type="text" name="customer_name" class="form-control" placeholder="please enter customer name">

                           </div></div>
                           <div class="col-md-6">
                            <div class = "form-group">
                            <input type="text" name="address" class="form-control" placeholder="please enter customer address">

                        </div></div>
                        </div></div>

                        <div class="panel panel-footer">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th>Variant Code</th
                        <th>Item Name</th>
                        <th>Width</th>
                        <th>Height</th>
                        <th>SQM</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                        <th>Location</th>
                        <th>Out/In</th>
                        <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td><input type="text" name="variant_code[]" class="form-control variant_code"></td>
                        <td><input type="text" name="item_name[]" class="form-control item_name"></td>
                        <td><input type="text" name="width[]" class="form-control width"></td>
                        <td><input type="text" name="height[]" class="form-control height"></td>
                        <td><input type="text" name="sqm[]" class="form-control sqm"></td>
                        <td><input type="text" name="quantity[]" class="form-control quantity"></td>
                        <td><input type="text" name="unit_price[]" class="form-control unit_price"></td>
                        <td><input type="text" name="amount[]" class="form-control amount"></td>
                        <td><input type="text" name="location[]" class="form-control location"></td>
                        <td><input type="text" name="out_in[]" class="form-control out_in"></td>
                        <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr> 
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none"></td>
                            <td style="border:none">Total Amount</td>
                            <td style="border:none"><b class="total"></b></td>
                            <td style="border:none"></td>
                            <td style="border:none"><input type = "submit" name="submit" value="Submit" class="btn btn-success btn-block"></td>
                        </tr>
                        </tfoot>
                        </table>
                        </div>
                        </section>
                        
                        
                            </div>
                            
                        </div>
                    </form>
                </div> 

                <script type="text/javascript">
                $('tbody').delegate('.quantity, .unit_price, .width, .height', 'keyup', function(){
                    var tr = $(this).parent().parent();
                    var quantity = tr.find('.quantity').val();
                    var unit_price = tr.find('.unit_price').val();
                    var width = tr.find('.width').val();
                    var height = tr.find('.height').val();
                    var sqm = (width * height);
                    var amount = (quantity * unit_price);
                    tr.find('.sqm').val(sqm);
                    tr.find('.amount').val(amount);
                    total();
                });

                    function total(){
                        var total = 0;
                        $('.amount').each(function(i,e){
                            var amount = $(this).val()-0;
                        total += amount;
                        });
                        $('.total').html(total + ".00");
                    }

                    $('.addRow').on('click', function(){
                        addRow();
                    });

                    function addRow(){
                        var tr = '<tr>' +
                        '<td><input type="text" name="variant_code[]" class="form-control variant_code"></td>' +
                        '<td><input type="text" name="item_name[]" class="form-control item_name"></td>' +
                        '<td><input type="text" name="width[]" class="form-control width"></td>' +
                        '<td><input type="text" name="height[]" class="form-control height"></td>' +
                        '<td><input type="text" name="sqm[]" class="form-control sqm"></td>' +
                        '<td><input type="text" name="quantity[]" class="form-control quantity"></td>' +
                        '<td><input type="text" name="unit_price[]" class="form-control unit_price"></td>' +
                        '<td><input type="text" name="amount[]" class="form-control amount"></td>' +
                        '<td><input type="text" name="location[]" class="form-control location"></td>' +
                        '<td><input type="text" name="out_in[]" class="form-control out_in"></td>' +
                        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>' +
                        '</tr>';

                        $('tbody').append(tr);
                    };

                    $('.remove').live('click', function(){
                        var last = $(' tbody tr').length;
                        if(last==1){
                            alert("you can not remove last row");
                        }
                        else{
                            $(this).parent().parent().remove();
                        }
                        
                    });

                </script>

</body>
</html>