<?php include 'functions.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Requisitions Processed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *,
        *:focus {
            outline: none !important;
        }
        .btn {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .inc img,
        .dec img {
            width: 16px;
            height: auto;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            height: 26px;
            border: none;
            padding: 5px 10px;
            width: auto;
            text-align: center;
            max-width: 50px;
            margin: 0;
            background-color: transparent;
            color: #fff;
            appearance: textfield;
            -moz-appearance: textfield;
        }
        input[type="number"]:focus {
            -webkit-box-shadow: 0 0 5px #373c77 inset;
            -moz-box-shadow: 0 0 5px #373c77 inset;
            box-shadow: 0 0 5px #373c77 inset;
        }
        td:first-child {
            text-transform: capitalize;
        }
        table th,
        table td {
            vertical-align: middle !important;
        }
    </style>
  </head>
  <body>
      <form autocomplete="off">
        <div style="background-color:#28a745;">
            <h1 class="text-white mb-0 text-center">Requisitions Processed</h1>
        </div>
        <div class="table-responsive">
            <table style="background-color: #2573c7!important" class="table table-bordered table-dark text-center">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Req Totals</th>
                    <th>Kits Delivered</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>erin</td>
                    <?php foreach($days as $day) { ?>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="number" value="<?php echo get_request_qty('erin', date('Y-m-d', strtotime(''.$day.' this week'))); ?>" name="<?php echo $day; ?>[]" data-name="erin" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>">
                            </div>
                        </td>
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('erin'); ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="number" value="<?php echo get_delivered_qty('erin'); ?>"  name="delivered[]" data-name="erin" data-date="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>ruby</td>
                    <?php foreach($days as $day) { ?>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="number" value="<?php echo get_request_qty('ruby', date('Y-m-d', strtotime(''.$day.' this week'))); ?>" name="<?php echo $day; ?>[]" data-name="ruby" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>">
                            </div>
                        </td>    
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('ruby'); ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="number" value="<?php echo get_delivered_qty('ruby'); ?>" name="delivered[]" data-name="ruby" data-date="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>angela</td>
                    <?php foreach($days as $day) { ?>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="number" value="<?php echo get_request_qty('angela', date('Y-m-d', strtotime(''.$day.' this week'))); ?>" name="<?php echo $day; ?>[]" data-name="angela" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>">
                            </div>
                        </td>    
                    <?php } ?>

                    <td data-request="total"><?php echo get_total_request_by('angela'); ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="number" value="<?php echo get_delivered_qty('angela'); ?>" name="delivered[]" data-name="angela" data-date="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>kristyna</td>
                    <?php foreach($days as $day) { ?>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="number" value="<?php echo get_request_qty('kristyna', date('Y-m-d', strtotime(''.$day.' this week'))); ?>" name="<?php echo $day; ?>[]" data-name="kristyna" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>">
                            </div>
                        </td>    
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('kristyna'); ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">                           
                            <input type="number" value="<?php echo get_delivered_qty('kristyna'); ?>" name="delivered[]" data-name="kristyna" data-date="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>hanna</td>
                    <?php foreach($days as $day) { ?>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <input type="number" value="<?php echo get_request_qty('hanna', date('Y-m-d', strtotime(''.$day.' this week'))); ?>" name="<?php echo $day; ?>[]" data-name="hanna" data-date="<?php echo date('Y-m-d', strtotime(''.$day.' this week')); ?>">
                            </div>
                        </td>    
                    <?php } ?>
                    <td data-request="total"><?php echo get_total_request_by('hanna'); ?></td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="number" value="<?php echo get_delivered_qty('hanna'); ?>" name="delivered[]" data-name="hanna" data-date="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </td> <!-- Delivered Kits -->
                  </tr>

                  <tr>
                    <td>Goals</td>
                    <td>15</td> <!-- Monday -->
                    <td>15</td> <!-- Tuesday -->
                    <td>15</td> <!-- Wednesday -->
                    <td>15</td> <!-- Thursday -->
                    <td>15</td> <!-- Friday -->
                    <td>75</td> <!-- Req Totals -->
                    <td>75</td> <!-- Delivered Kits -->
                  </tr>
                  <tr>
                    <td>Total Reqs</td>
                    <?php foreach($days as $day) { ?>
                        <td data-total="<?php echo $day; ?>"><?php echo get_total_request(date('Y-m-d', strtotime(''.$day.' this week'))); ?></td>
                    <?php } ?>
                    <td data-total="request">0</td>
                    <td data-total="delivered"><?php echo get_total_delivered(); ?></td> <!-- Delivered Kits -->
                  </tr>
                </tbody>
            </table>
        </div>
      </form>

      <div class="toast" data-delay="1000" style="position: absolute; top: 0; right: 15px;"><div class="toast-body"></div></div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        (function($) {
            //Kit Delivered
            $('input[name^="delivered"]').change(function(e) {
                $.ajax({
                    type: 'POST',
                    url: 'delivery.php',
                    data: {
                        name: $(this).attr('data-name'),
                        quantity: $(this).val(),
                        date: $(this).attr('data-date')
                    },
                    success: function (data) {
                        let total = 0;
                        $('input[name="delivered[]"]').map(function() {
                            total += parseInt($(this).val());
                        });
                        $('[data-total="delivered"]').text(total);
                        $('.toast-body').text(data);
                        $('.toast').toast('show');
                    },
                    error: function (data) {
                        alert(data);
                    },
                });                
            });


            //Request
            let days = ["monday", "tuesday", "wednesday", "thursday", "friday"];
            days.map(function(day, key) {
                $('input[name^='+day+']').change(function(e) {
                    $.ajax({
                        type: 'POST',
                        url: 'request.php',
                        data: {
                            name: $(this).attr('data-name'),
                            request: $(this).val(),
                            date: $(this).attr('data-date')
                        },
                        success: function (data) {
                            let total = 0;
                            $('input[name="'+day+'[]"]').map(function() {
                                total += parseInt($(this).val());
                            });
                            $('[data-total='+day+']').text(total);
                            $('.toast-body').text(data);
                            $('.toast').toast('show');
                        },
                        error: function (data) {
                            alert(data);
                        },
                    });
                });
            });

            let reqTotal = 0;
            $('[data-request=total]').each(function() {
                reqTotal += parseInt($(this).text());
            });
            $('[data-total=request]').text(reqTotal);

            //Button + -
            $('<button type="button" class="btn btn-sm btn-dark dec"><img src="img/minus.svg" alt="Decrement"></button>').insertBefore('input[type="number"]');
            $('<button type="button" class="btn btn-sm btn-dark inc"><img src="img/plus.svg" alt="Increment"></button>').insertAfter('input[type="number"]');
            $(".inc, .dec").on("click", function() {
                let button = $(this),
                    newVal = 0,
                    oldValue = button.siblings("input").val();

                if (button.hasClass('inc')) {
                    newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                button.siblings("input").val(newVal).trigger('change');
            });
        }(jQuery));
    </script>
</body>
</html>