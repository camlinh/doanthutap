<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>
    <base href={{asset('')}}>
    <!-- Favicons -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="sourse/css/re.css">
    <link href="source/img/favicon.png" rel="icon">
    <link href="source/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="source/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="source/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="source/lib/advanced-datatable/css/DT_bootstrap.css" />
    <!-- Bootstrap core CSS -->
    <link href="source/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="source/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="source/stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="source/stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="source/css/style.css" rel="stylesheet">
    <link href="source/css/style-responsive.css" rel="stylesheet">
    <script src="source/lib/chart-master/Chart.js"></script>
    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
  </head>
  <body>
    <div class="super_container">
      <!-- Header -->
      @include('customer/block/header')
      <!-- Menu -->
      
      @yield('content-admin')
      <!-- Footer -->
      
    </div>
    <!-- jQuery library -->
    <script src="source/lib/jquery/jquery.min.js"></script>
    <script src="source/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="source/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" language="javascript" src="source/lib/advanced-datatable/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="source/lib/advanced-datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="source/lib/advanced-datatable/js/DT_bootstrap.js"></script>
    <script src="source/lib/jquery.scrollTo.min.js"></script>
    <script src="source/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="source/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="source/lib/common-scripts.js"></script>
    <script type="text/javascript" src="source/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="source/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="source/lib/sparkline-chart.js"></script>
    <script src="source/lib/zabuto_calendar.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    var unique_id = $.gritter.add({
    // (string | mandatory) the heading of the notification
    title: 'Welcome to Dashio!',
    // (string | mandatory) the text inside the notification
    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
    // (string | optional) the image to display on the left
    image: 'img/ui-sam.jpg',
    // (bool | optional) if you want it to fade out on its own or just sit there
    sticky: false,
    // (int | optional) the time you want it to be alive for before fading out
    time: 8000,
    // (string | optional) the class name you want to apply to that specific message
    class_name: 'my-sticky-class'
    });
    return false;
    });
    </script>
    <script type="application/javascript">
    $(document).ready(function() {
    $("#date-popover").popover({
    html: true,
    trigger: "manual"
    });
    $("#date-popover").hide();
    $("#date-popover").click(function(e) {
    $(this).hide();
    });
    $("#my-calendar").zabuto_calendar({
    action: function() {
    return myDateFunction(this.id, false);
    },
    action_nav: function() {
    return myNavFunction(this.id);
    },
    ajax: {
    url: "show_data.php?action=1",
    modal: true
    },
    legend: [{
    type: "text",
    label: "Special event",
    badge: "00"
    },
    {
    type: "block",
    label: "Regular event",
    }
    ]
    });
    });
    function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    </script>
    
  </body>
</html>